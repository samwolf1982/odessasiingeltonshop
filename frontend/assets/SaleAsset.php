<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class SaleAsset extends AssetBundle
{

//    public $basePath = '@frontend/themes/theme2';
    //  public $baseUrl = '@web';
//    public $sourcePath = '@frontend/themes/theme2';
//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $sourcePath = '@frontend/themes/theme2';
    public $css = [
        'sale/css/sale/sale.css',


    ];


    public $js = [
//        "css/bootstrap-3.3.7/assets/js/vendor/holder.min.js",
//        "css/bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js",
//        "js/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/owl.carousel.js",
//        'js/scrolto.js'
//        "js/lazy/jquery.lazy.js",
        "sale/js/sale.js",

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
        "frontend\assets\AppAsset"
    ];

    public $publishOptions = [
        'forceCopy' => true,];
}

