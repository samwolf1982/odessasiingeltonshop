<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainpageAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
   // public  $sourcePath = '@app/HTML/bootstrap-3.3.7/dist';
    public $css = [
//        'css/mainpage.css',

    ];

    public $js = [
        "css/bootstrap-3.3.7/assets/js/vendor/holder.min.js",
        "css/bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js",
        "js/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/owl.carousel.js",
//        "js/lazy/jquery.lazy.js",
//        "js/mainload.js",
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
        "frontend\assets\AppAsset"
    ];

    public $publishOptions = [
        'forceCopy' => true,];
}

