<?php
/**
 * PHP Exifer Id Map: Defines map between id and tags
 *
 * @link  https://github.com/0xRaffSarr/php-exifer
 * @copyright Copyright (c) 2022. Raffaele Sarracino <contacts@raffaelesarracino.it>
 * @license https://github.com/0xRaffSarr/php-exifer/blob/main/LICENSE
 * @package Tag
 */

namespace Xraffsarr\PhpExifer\Mapper\Tag;

use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\ColorSpace;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\ExposureMode;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\ExposureProgram;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\Flash;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\LensInfo;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\LensMake;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\LensModel;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\LightSource;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\OffsetSchema;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\Orientation;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\Padding;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\ResolutionUnit;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\SceneCaptureType;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\SensingMethod;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\WhiteBalance;
use Xraffsarr\PhpExifer\Mapper\Tag\Tags\Common\YCbCrPositioning;

abstract class IdMap
{
    /**
     * Id tag map
     */
    private const MAP = [
        ColorSpace::ID => ColorSpace::NAME,
        ExposureMode::ID => ExposureMode::NAME,
        ExposureProgram::ID => ExposureProgram::NAME,
        Flash::ID => Flash::NAME,
        LightSource::ID => LightSource::NAME,
        Orientation::ID => Orientation::NAME,
        ResolutionUnit::ID => ResolutionUnit::NAME,
        SceneCaptureType::ID => SceneCaptureType::NAME,
        SensingMethod::ID => SensingMethod::NAME,
        WhiteBalance::ID => WhiteBalance::NAME,
        YCbCrPositioning::ID => YCbCrPositioning::NAME,
        LensInfo::ID => LensInfo::NAME,
        LensMake::ID => LensMake::NAME,
        LensModel::ID => LensModel::NAME,
        Padding::ID => Padding::NAME,
        OffsetSchema::ID => OffsetSchema::NAME
    ];

    /**
     * @param string $idTag
     * @return string|null
     */
    public static function getTag(string $idTag): ?string
    {
        return self::MAP[$idTag] ?? null;
    }
}