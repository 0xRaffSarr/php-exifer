<?php
/**
 * PHP Exifer Tag Interfine: Defines the interface for tag Object
 *
 * @link  https://github.com/0xRaffSarr/php-exifer
 * @copyright Copyright (c) 2022. Raffaele Sarracino <contacts@raffaelesarracino.it>
 * @license https://github.com/0xRaffSarr/php-exifer/blob/main/LICENSE
 * @package Tag
 */

namespace Xraffsarr\PhpExifer\Mapper\Tag;

/**
 * PHP Exifer Tag
 *
 * Define the public interface for a tag
 *
 * @package Tag
 */
interface TagInterface
{
    /**
     * The section of tag
     *
     * @return string
     */
    public function getSection(): string;

    /**
     * Name tag
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Tag is writable
     *
     * @return bool
     */
    public function isWritable():bool;

    /**
     * Get tag type
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Tag Value
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Set tag value if writable
     *
     * @param $value
     */
    public function setValue($value);

    /**
     * Get tag value description
     *
     * @return string
     */
    public function getValueDescription(): string;

    /**
     * Tag description
     *
     * @return null|string
     */
    public function getDescription(): ?string;
}