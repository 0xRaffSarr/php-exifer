<?php
/**
 * PHP Exifer Tag Orientation: Defines Orientation Tag.
 *
 * @link  https://github.com/0xRaffSarr/php-exifer
 * @see https://exiftool.org/TagNames/EXIF.html
 * @copyright Copyright (c) 2022. Raffaele Sarracino <contacts@raffaelesarracino.it>
 * @license https://github.com/0xRaffSarr/php-exifer/blob/main/LICENSE
 * @package Tag
 */

namespace Xraffsarr\PhpExifer\Mapper\Tag\Common;

use Xraffsarr\PhpExifer\Exception\InvalidDataException;
use Xraffsarr\PhpExifer\Mapper\MapperAbstract;
use Xraffsarr\PhpExifer\Mapper\Tag\Tag;

/**
 * PHP Exifer OrientationTag
 *
 * Define Orientation Tag
 *
 * @package Tag
 */
class Orientation extends Tag
{
    /**
     * Tag Id
     */
    const ID = '0x0112';

    protected string $name = 'Orientation';
    protected string $section = MapperAbstract::SECTION_IFD0;
    protected bool $isWritable = true;

    /**
     * Orientation Tag value description
     *
     * @see https://exiftool.org/TagNames/EXIF.html
     *
     * @var array|string[]
     */
    protected array $valueDescription = [
        1 => 'Horizontal (normal)',
        2 => 'Mirror horizontal',
        3 => 'Rotate 180',
        4 => 'Mirror vertical',
        5 => 'Mirror horizontal and rotate 270 CW',
        6 => 'Rotate 90 CW',
        7 => 'Mirror horizontal and rotate 90 CW',
        8 => 'Rotate 270 CW',
    ];

    /**
     * @param $value
     * @throws InvalidDataException
     */
    public function setValue($value)
    {
        if(!is_numeric($value) && ($value < 1 || $value > 6)) {
            throw new InvalidDataException('Orientation Tag invalid data. Data must an integer between 1 and 6.');
        }

        $this->value = $value;
    }

    public function getValueDescription(): string
    {
        return $this->valueDescription[$this->value];
    }

    public function getDescription(): ?string
    {
        return null;
    }
}