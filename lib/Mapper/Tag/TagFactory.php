<?php
/**
 * PHP Exifer Tag Factory: Defines Tag Factory
 *
 * @link  https://github.com/0xRaffSarr/php-exifer
 * @copyright Copyright (c) 2022. Raffaele Sarracino <contacts@raffaelesarracino.it>
 * @license https://github.com/0xRaffSarr/php-exifer/blob/main/LICENSE
 * @package Tag
 */

namespace Xraffsarr\PhpExifer\Mapper\Tag;

use Xraffsarr\PhpExifer\Exception\TagNotFound;

abstract class TagFactory
{
    /**
     * Tag list
     */
    private const NAMESPACES = [
        'common' => __NAMESPACE__.'\\Tags\\Common\\'
    ];

    private const ID_TAGS = [

    ];

    /**
     * Return a tag class from tag name
     *
     * @param string $tagName
     * @param string|null $manufacture
     * @return Tag
     * @throws TagNotFound
     * @throws \ReflectionException
     */
    public static function getTagClass(string $tag, string $manufacture = null): Tag
    {

        //check if is a tag id
        if(!is_null(IdMap::getTag($tag))) {
            $tag = IdMap::getTag($tag);
        }

        if(self::checkTagObject(self::NAMESPACES['common'].$tag)) {
            $namespace = self::NAMESPACES['common'];
        }
        elseif (!is_null($manufacture) && isset(self::NAMESPACES[$manufacture]) && self::checkTagObject(self::NAMESPACES[$manufacture].$tag)) {
            $namespace = self::NAMESPACES[$manufacture];
        }
        else {
            throw new TagNotFound($tag.' not found.');
        }

        $class = new \ReflectionClass($namespace.$tag);

        return $class->newInstance();
    }

    /**
     * Check if exists tag object
     *
     * @param string $class
     * @return bool
     */
    public static function checkTagObject(string $class): bool
    {
        return class_exists($class);
    }
}