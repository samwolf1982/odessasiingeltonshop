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
        'js/multi-level-push-menu-master/jquery.multilevelpushmenu.min.css',
        'js/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/assets/owl.carousel.css',
        'js/pnotify/dist/PNotifyBrightTheme.css',
        '//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css',
        'css/navfix.css',
        'css/select_porciya_fix.css',
        'js/custombox-4.0.3/custombox-4.0.3/dist/custombox.min.css',
        '/js/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css',
     //   'css/Hover-master/css/hover-min.css',      //BAG fith FLEX n absolute


//        'stylesheet/960.css',
//        'stylesheet/screen.css',
//        'stylesheet/color.css',
//        'css/temp/temp.css',

    ];

    public $js = [
        "//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js",

//        "bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js",
        "//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js",
        "//oss.maxcdn.com/respond/1.4.2/respond.min.js",
        "//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js",
        "js/slidemenu/slidemenu.js",
        'css/bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js',
        'js/moment/moment.js',
        'js/pnotify/dist/iife/PNotify.js',
        'js/multi-level-push-menu-master/jquery.multilevelpushmenu.min.js',
        'js/multi-level-push-menu-master/init.js',
        'js/custombox-4.0.3/custombox-4.0.3/dist/custombox.min.js',
        'js/custombox-4.0.3/custombox-4.0.3/dist/custombox.legacy.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js',
        '/js/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js',
        'js/initmodal.js',
        'js/handler_beforesubmitmodal.js',
        'js/cartinitmask.js',
        'js/likeinit.js',


        // 'js/temp/temp.js'
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
