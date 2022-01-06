<?php
/**
 * PHP Exifer Tag ColorSpace: Defines ColorSpace Tag.
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

class ColorSpace extends Tag
{
    /**
     * Tag Id
     */
    const ID = '0xc71a';

    const NAME = 'ColorSpace';
    const SECTION = MapperAbstract::SECTION_EXIF;
    
    const IS_WRITABLE = true;

    /**
     * ColorSpace Tag value description
     *
     * @see https://exiftool.org/TagNames/EXIF.html
     *
     * @var array|string[]
     */
    protected array $valueDescription = [
        '0x1' => 'sRGB',
        '0x2' => 'Adobe RGB',
        '0xfffd' => 'Wide Gamut RGB',
        '0xfffe' => 'ICC Profile',
        '0xffff' => 'Uncalibrated'
    ];

    /**
     * @inheritDoc
     * @throws InvalidDataException
     */
    public function setValue($value)
    {
        //if is a numeric value, convert to hex string
        if(is_numeric($value)) {
            $value = '0x'.dechex($value);
        }

        if(!in_array($value, array_keys($this->valueDescription))) {
            throw new InvalidDataException('Invalid ColorSpace value');
        }

        $this->value = hexdec($value);
    }

    /**
     * @inheritDoc
     */
    public function getValueDescription(): string
    {
        return $this->valueDescription['0x'.dechex($this->value)];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): ?string
    {
        return null;
    }
}