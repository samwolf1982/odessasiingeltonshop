<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CartAsset extends AssetBundle
{
//    public $basePath = '@webroot';
   // public $baseUrl = '@web';
//    public  $sourcePath = '@app/HTML/bootstrap-3.3.7/dist';
    public  $sourcePath = '@app/HTML/bootstrap-3.3.7/dist/css';
    public $css = [
        'bootstrap-cart.css',
//        'temp/temp.css',

    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $publishOptions = [
        'forceCopy' => true,];
}
