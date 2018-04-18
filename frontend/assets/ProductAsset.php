<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ProductAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
   // public  $sourcePath = '@app/HTML/bootstrap-3.3.7/dist';
    public $css = [
        '/js/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css',
        'css/product.css',
        '/js/fancybox-master/fancybox-master/dist/jquery.fancybox.min.css',
    ];

    public $js = [
        '/js/fancybox-master/fancybox-master/dist/jquery.fancybox.min.js',
        'js/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js',
        '/js/init_product.js',


    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',

 'frontend\assets\MainpageAsset'
    ];

    public $publishOptions = [
        'forceCopy' => true,];
}
