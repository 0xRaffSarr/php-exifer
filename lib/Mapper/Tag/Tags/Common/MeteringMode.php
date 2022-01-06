<?php
/**
 * PHP Exifer Tag MeteringMode: Defines MeteringMode Tag.
 *
 * @link  https://github.com/0xRaffSarr/php-exifer
 * @see https://exiftool.org/TagNames/EXIF.html
 * @copyright Copyright (c) 2022. Raffaele Sarracino <contacts@raffaelesarracino.it>
 * @license https://github.com/0xRaffSarr/php-exifer/blob/main/LICENSE
 * @package Tag
 */

namespace Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common;

use Xraffsarr\PhpExifer\Exception\InvalidDataException;
use Xraffsarr\PhpExifer\Mapper\MapperAbstract;
use Xraffsarr\PhpExifer\Mapper\Tag\Tag;

class MeteringMode extends Tag
{
    /**
     * Tag Id
     */
    const ID = '0x9207';

    const NAME = 'MeteringMode';
    const SECTION = MapperAbstract::SECTION_EXIF;
    const IS_WRITABLE = true;

    /**
     * MeteringMode Tag value description
     *
     * @see https://exiftool.org/TagNames/EXIF.html
     *
     * @var array|string[]
     */
    protected array $valueDescription = [
        0 => 'Unknown',
        1 => 'Average',
        2 => 'Center-weighted average',
        3 => 'Spot',
        4 => 'Multi-spot',
        5 => 'Multi-segment',
        6 => 'Partial',
        255 => 'Other'
    ];

    /**
     * @inheritDoc
     * @throws InvalidDataException
     */
    public function setValue($value)
    {
        if(!is_numeric($value) && (($value < 0 || $value > 6) && $value!== 256)) {
            throw new InvalidDataException('Orientation Tag invalid data. Data must an integer between 1 and 6 or 256.');
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