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
abstract class TagAbstract implements TagInterface
{
    /**
     * Tag name - must override in subclass
     *
     * @var string
     */
    protected string $name;

    /**
     * Section name - must override in subclass
     *
     * @var string
     */
    protected string $section;

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
    protected bool $isWritable;
    protected $value;

    /**
     * Get tag name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get section name
     *
     * @return string
     */
    public function getSection(): string
    {
        return $this->section;
    }

    /**
     * Tag is writable or read only
     *
     * @return bool
     */
    public function isWritable(): bool
    {
        return $this->isWritable;
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
}