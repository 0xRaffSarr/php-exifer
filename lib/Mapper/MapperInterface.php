<?php
/**
 * PHP Exifer Mapper Interface: Defines the interface for mapper exif data
 *
 * @link  https://github.com/0xRaffSarr/php-exifer
 * @copyright Copyright (c) 2022. Raffaele Sarracino <contacts@raffaelesarracino.it>
 * @license https://github.com/0xRaffSarr/php-exifer/blob/main/LICENSE
 * @package Mapper
 */

namespace Xraffsarr\PhpExifer\Mapper;

/**
 * PHP Exifer Mapper
 *
 * Define the public interface for a writer
 *
 * @package Mapper
 */
interface MapperInterface
{
    /**
     * Map the data for Exif fields
     *
     * @param array $data
     * @return array
     */
    public function mapData(array $data):array;

    /**
     * Get original data from mapped data
     *
     * @param array $data
     * @return array
     */
    public function unmapData(array $data):array;
}