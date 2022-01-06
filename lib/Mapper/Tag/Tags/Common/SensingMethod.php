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

class SensingMethod extends Tag
{
    /**
     * Tag Id
     */
    const ID = '0xa217';

    const NAME = 'SensingMethod';
    const SECTION = MapperAbstract::SECTION_EXIF;
    const IS_WRITABLE = true;

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