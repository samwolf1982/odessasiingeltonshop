<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class GooglemapWidgetAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/temp/temp.css',

    ];
    public $js = [
        'js/map/initgooglemap.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
//        "frontend\assets\CartAsset",
       // "frontend\assets\CartAsset",
    ];
    public $publishOptions = [
        'forceCopy' => true,];
}
