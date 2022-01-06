<?php
/**
 * PHP Exifer Writer Interface: Defines the interface for exif writer
 *
 * @link  https://github.com/0xRaffSarr/php-exifer
 * @copyright Copyright (c) 2022. Raffaele Sarracino <contacts@raffaelesarracino.it>
 * @license https://github.com/0xRaffSarr/php-exifer/blob/main/LICENSE
 * @package Writer
 */

namespace Xraffsarr\PhpExifer\Writer;

use Xraffsarr\PhpExifer\Exif;

/**
 * PHP Exifer Writer
 *
 * Define the public interface for a writer
 *
 * @package Writer
 */
interface WriterInterface
{
    /**
     * Write Exif data to file
     *
     * @param Exif $exif exif object with data
     * @return bool
     */
    public function write(Exif $exif): bool;
}