<?php
/**
 * PHP Exifer Tag LightSource: Defines LightSource Tag.
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

class LightSource extends Tag
{
    /**
     * Tag Id
     */
    const ID = '0x9208';

    protected string $name = 'LightSource';
    protected string $section = MapperAbstract::SECTION_EXIF;
    protected bool $isWritable = true;

    /**
     * LightSource description value in hex
     * @see https://exiftool.org/TagNames/EXIF.html#LightSource
     *
     * @var array|string[]
     */
    protected array $valueDescription = [
        0 => 'Unknown',
        1 => 'Daylight',
        2 => 'Fluorescent',
        3 => 'Tungsten (Incandescent)',
        4 => 'Flash',
        9 => 'Fine Weather',
        10 => 'Cloudy',
        11 => 'Shade',
        12 => 'Daylight Fluorescent',
        13 => 'Day White Fluorescent',
        14 => 'Cool White Fluorescent',
        15 => 'White Fluorescent',
        16 => 'Warm White Fluorescent',
        17 => 'Standard Light A',
        18 => 'Standard Light B',
        19 => 'Standard Light C',
        20 => 'D55',
        21 => 'D65',
        22 => 'D75',
        23 => 'D50',
        26 => 'ISO Studio Tungsten',
        255 => 'Other'
    ];

    /**
     * @inheritDoc
     * @throws InvalidDataException
     */
    public function setValue($value)
    {
        if(!in_array($value, array_keys($this->valueDescription))) {
            throw new InvalidDataException('LightSource invalid');
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