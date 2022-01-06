<?php
/**
 * PHP Exifer Tag YCbCrPositioning: Defines YCbCrPositioning Tag.
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
use Xraffsarr\PhpExifer\Mapper\Tag\TagAbstract;

class YCbCrPositioning extends TagAbstract
{
    /**
     * Tag Id
     */
    const ID = '0x0213';

    protected string $name = 'YCbCrPositioning';
    protected string $section = MapperAbstract::SECTION_IFD0;
    protected bool $isWritable = true;

    /**
     * YCbCrPositioning Tag value description
     *
     * @see https://exiftool.org/TagNames/EXIF.html
     *
     * @var array|string[]
     */
    protected array $valueDescription = [
        1 => 'Centered',
        2 => 'Co-sited'
    ];

    /**
     * @inheritDoc
     * @throws InvalidDataException
     */
    public function setValue($value)
    {
        if(!is_numeric($value) && ($value < 1 || $value > 2)) {
            throw new InvalidDataException('YCbCrPositioning Tag invalid data. Data must an integer between 1 and 2.');
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