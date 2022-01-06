<?php
/**
 * PHP Exifer Tag ExposureProgram: Defines ExposureProgram Tag.
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

class ExposureProgram extends Tag
{
    /**
     * Tag Id
     */
    const ID = '0x8822';

    protected string $name = 'ExposureProgram';
    protected string $section = MapperAbstract::SECTION_EXIF;
    protected bool $isWritable = true;

    /**
     * ExposureProgram Tag value description
     *
     * @see https://exiftool.org/TagNames/EXIF.html
     *
     * @var array|string[]
     */
    protected array $valueDescription = [
        0 => 'Not Defined',
        1 => 'Manual',
        2 => 'Program AE',
        3 => 'Aperture-priority AE',
        4 => 'Shutter speed priority AE',
        5 => 'Creative (Slow speed)',
        6 => 'Action (High speed)',
        7 => 'Portrait',
        8 => 'Landscape',
        9 => 'Bulb'
    ];

    /**
     * @inheritDoc
     * @throws InvalidDataException
     */
    public function setValue($value)
    {
        if(!is_numeric($value) && ($value < 0 || $value > 9)) {
            throw new InvalidDataException('ExposureProgram Tag invalid data. Data must an integer between 1 and 9.');
        }

        $this->value = $value;
    }

    /**
     * @inheritDoc
     */
    public function getValueDescription(): string
    {
        return $this->valueDescription[$this->value];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): ?string
    {
        return null;
    }
}