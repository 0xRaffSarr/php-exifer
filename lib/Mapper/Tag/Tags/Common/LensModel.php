<?php
/**
 * PHP Exifer Tag LensModel: Defines LensModel Tag.
 *
 * @link  https://github.com/0xRaffSarr/php-exifer
 * @see https://exiftool.org/TagNames/EXIF.html
 * @copyright Copyright (c) 2022. Raffaele Sarracino <contacts@raffaelesarracino.it>
 * @license https://github.com/0xRaffSarr/php-exifer/blob/main/LICENSE
 * @package Tag
 */


namespace Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common;

use Xraffsarr\PhpExifer\Mapper\MapperAbstract;
use Xraffsarr\PhpExifer\Mapper\Tag\Tag;

class LensModel extends Tag
{
    const ID = '0xa434';

    const NAME = 'LensModel';
    const SECTION = MapperAbstract::SECTION_EXIF;

    /**
     * @inheritDoc
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @inheritDoc
     */
    public function getValueDescription(): ?string
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): ?string
    {
        return null;
    }
}