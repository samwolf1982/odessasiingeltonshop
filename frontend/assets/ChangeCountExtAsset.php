<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ChangeCountExtAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/fontsulpoad.css',
//        'css/bootstrap-grid-custom.css',
//        'js/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/assets/owl.carousel.css',

    ];

    public $js = [
        "js/changecountext.js",
    ];
    public $depends = [
        'dvizh\cart\assets\WidgetAsset'
    ];

    public $publishOptions = [
        'forceCopy' => true,];
}
