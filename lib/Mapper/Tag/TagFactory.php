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
use Xraffsarr\PhpExifer\Mapper\Tag\Common\ColorSpace;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\ExposureMode;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\ExposureProgram;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\Flash;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\LightSource;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\MeteringMode;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\Orientation;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\ResolutionUnit;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\SceneCaptureType;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\SensingMethod;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\WhiteBalance;
use Xraffsarr\PhpExifer\Mapper\Tag\Common\YCbCrPositioning;

abstract class TagFactory
{
    /**
     * Tag list
     */
    private const TAGS = [
        'ExposureProgram' => ExposureProgram::class,
        'Flash' => Flash::class,
        'LightSource' => LightSource::class,
        'MeteringMode' => MeteringMode::class,
        'Orientation' => Orientation::class,
        'ResolutionUnit' => ResolutionUnit::class,
        'YCbCrPositioning' => YCbCrPositioning::class,
        'ColorSpace' => ColorSpace::class,
        'SensingMethod' => SensingMethod::class,
        'ExposureMode' => ExposureMode::class,
        'WhiteBalance' => WhiteBalance::class,
        'SceneCaptureType' => SceneCaptureType::class
    ];

    /**
     * Return a tag class from tag name
     *
     * @param string $tagName
     * @return TagInterface
     * @throws TagNotFound
     */
    public static function getTagClass(string $tagName): TagInterface
    {
        if(!self::checkTagObject($tagName)) {
            throw new TagNotFound($tagName.' not found');
        }

        return new self::TAGS[$tagName];
    }

    /**
     * Check if exists tag object
     *
     * @param string $tagName
     * @return bool
     */
    public static function checkTagObject(string $tagName): bool
    {
        return in_array($tagName, array_keys(self::TAGS));
    }
}