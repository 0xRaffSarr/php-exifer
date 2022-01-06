<?php
/**
 * PHP Exifer Tag SensingMethod: Defines SensingMethod Tag.
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

class SensingMethod extends Tag
{
    /**
     * Tag Id
     */
    const ID = '0xa217';

    protected string $name = 'SensingMethod';
    protected string $section = MapperAbstract::SECTION_EXIF;
    protected bool $isWritable = true;

    protected array $valueDescription = [
        1 => 'Not defined',
        2 => 'One-chip color area',
        3 => 'Two-chip color area',
        4 => 'Three-chip color area',
        5 => 'Color sequential area',
        7 => 'Trilinear',
        8 => 'Color sequential linear'
    ];

    /**
     * @inheritDoc
     */
    public function setValue($value)
    {
        if(!in_array($value, array_keys($this->valueDescription))) {
            throw new InvalidDataException('Invalid SensingMethod value.');
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