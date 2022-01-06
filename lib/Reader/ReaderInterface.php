<?php
/**
 * PHP Exifer Reader Interface: Defines the interface for exif reader
 *
 * @link  https://github.com/0xRaffSarr/php-exifer
 * @copyright Copyright (c) 2022. Raffaele Sarracino <contacts@raffaelesarracino.it>
 * @license https://github.com/0xRaffSarr/php-exifer/blob/main/LICENSE
 * @package Reader
 */

namespace Xraffsarr\PhpExifer\Reader;

use Xraffsarr\PhpExifer\Exif;

/**
 * PHP Exifer Reader
 *
 * Define the public interface for a reader
 *
 * @package Reader
 */
interface ReaderInterface
{
    /**
     * Read Exif data from file
     *
     * @param $file the path of file
     * @return Exif instance of Exif with data read
     */
    public function read($file): Exif;
}