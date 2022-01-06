<?php
/*
 * Copyright (c) 2022. Raffaele Sarracino <contacts@raffaelesarracino.it>
 *
 *
 */

namespace Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common;

use Xraffsarr\PhpExifer\Exception\InvalidDataException;
use Xraffsarr\PhpExifer\Mapper\MapperAbstract;
use Xraffsarr\PhpExifer\Mapper\Tag\Tag;

/**
 * PHP Exifer ResolutionUnitTag
 *
 * Define ResolutionUnit Tag
 *
 * @package Tag
 */
class ResolutionUnit extends Tag
{
    /**
     * Tag Id
     */
    const ID = '0x0128';

    const NAME = 'ResolutionUnit';
    const SECTION = MapperAbstract::SECTION_IFD0;
    const IS_WRITABLE = true;

    /**
     * ResolutionUnit Tag value description
     *
     * @see https://exiftool.org/TagNames/EXIF.html
     *
     * @var array|string[]
     */
    protected array $valueDescription = [
        1 => 'none',
        2 => 'inches',
        3 => 'cm'
    ];

    /**
     * @inheritDoc
     * @throws InvalidDataException
     */
    public function setValue($value)
    {
        if(!is_numeric($value) && ($value < 1 || 3)) {
            throw new InvalidDataException('ResolutionUnit Tag invalid data. Data must an integer between 1 and 3.');
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