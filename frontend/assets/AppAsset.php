<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
   // public  $sourcePath = '@app/HTML/bootstrap-3.3.7/dist';
    public $css = [
        'css/fontsulpoad.css',
        'css/bootstrap-grid-custom.css',
        'js/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/assets/owl.carousel.css',

//        'stylesheet/960.css',
//        'stylesheet/screen.css',
//        'stylesheet/color.css',
//        'css/site.css',
    ];

    public $js = [
        "//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js",
//        "bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js",
        "//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js",
        "//oss.maxcdn.com/respond/1.4.2/respond.min.js",
        "//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js",
        'css/bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js',
        'js/moment/moment.js',
//        "//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js",
//        "//ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js",
//        "js/shoppica.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $publishOptions = [
        'forceCopy' => true,];
}
