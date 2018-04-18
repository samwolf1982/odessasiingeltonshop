<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CategorysliderAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
   // public  $sourcePath = '@app/HTML/bootstrap-3.3.7/dist';
    public $css = [
        'css/slider_widget.css',

    ];

    public $js = [
        "js/lazy/jquery.lazy.js",
        "js/mainload.js",
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
        "frontend\assets\AppAsset"
    ];

    public $publishOptions = [
        'forceCopy' => true,];
}

