<?php
/**
 * ImageOptimize plugin for Craft CMS 3.x
 *
 * Automatically optimize images after they've been transformed
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2020 nystudio107
 */

namespace nystudio107\imageoptimize\utilities;

use nystudio107\imageoptimize\ImageOptimize;
use nystudio107\imageoptimize\assetbundles\imageoptimizeutility\ImageOptimizeUtilityAsset;

use Craft;
use craft\base\Utility;

/**
 * ImageOptimize Utility
 *
 * @author    nystudio107
 * @package   ImageOptimize
 * @since     1.0.0
 */
class ImageOptimizeUtility extends Utility
{
    // Static
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('image-optimize', 'ImageOptimize Info');
    }

    /**
     * @inheritdoc
     */
    public static function id(): string
    {
        return 'imageoptimize-image-optimize-utility';
    }

    /**
     * @inheritdoc
     */
    public static function iconPath()
    {
        return Craft::getAlias("@nystudio107/imageoptimize/assetbundles/imageoptimizeutility/dist/img/ImageOptimizeUtility-icon.svg");
    }

    /**
     * @inheritdoc
     */
    public static function badgeCount(): int
    {
        return 0;
    }

    /**
     * @inheritdoc
     */
    public static function contentHtml(): string
    {
        Craft::$app->getView()->registerAssetBundle(ImageOptimizeUtilityAsset::class);

        $someVar = 'Have a nice day!';
        return Craft::$app->getView()->renderTemplate(
            'image-optimize/_components/utilities/ImageOptimizeUtility_content',
            [
                'someVar' => $someVar
            ]
        );
    }
}
