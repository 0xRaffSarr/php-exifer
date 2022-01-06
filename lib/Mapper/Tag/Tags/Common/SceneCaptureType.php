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

class SceneCaptureType extends Tag
{
    /**
     * Tag Id
     */
    const ID = '0xa406';

    protected string $name = 'SceneCaptureType';
    protected string $section = MapperAbstract::SECTION_EXIF;
    protected bool $isWritable = true;

    /**
     * SceneCaptureType Tag value description
     *
     * @see https://exiftool.org/TagNames/EXIF.html
     *
     * @var array|string[]
     */
    protected array $valueDescription = [
        0 => 'Standard',
        1 => 'Landscape',
        2 => 'Portrait',
        3 => 'Night',
        4 => 'Other'
    ];

    /**
     * @inheritDoc
     * @throws InvalidDataException
     */
    public function setValue($value)
    {
        if(!in_array($value, array_keys($this->valueDescription))) {
            throw new InvalidDataException('Invalid SceneCaptureType value.');
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