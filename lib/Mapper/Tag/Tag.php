<?php
/**
 * PHP Exifer Tag Abstract: Defines the tag common methods
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
 * Define common method of tag
 *
 * @package Tag
 */
abstract class Tag implements TagInterface
{
    /**
     * Tag name - must override in subclass
     *
     * @var string
     */
    const NAME = null;

    /**
     * Section name - must override in subclass
     *
     * @var string
     */
    const SECTION = null;

    /**
     * Tab value type - must override in subclass
     *
     * @var string
     */
    protected string $type;

    /**
     * Is writable data - must override in subclass
     *
     * @var bool
     */
    const IS_WRITABLE = false;

    /**
     * Current tag value
     *
     * @var
     */
    protected $value;

    /**
     * Possible tag values description
     *
     * @var array
     */
    protected array $valueDescription = [];

    /**
     * Get tag name
     *
     * @return string
     */
    public function getName(): string
    {
        return static::NAME;
    }

    /**
     * Get section name
     *
     * @return string
     */
    public function getSection(): string
    {
        return static::SECTION;
    }

    /**
     * Tag is writable or read only
     *
     * @return bool
     */
    public function isWritable(): bool
    {
        return static::IS_WRITABLE;
    }

    /**
     * Get tag value type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Get tag value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}