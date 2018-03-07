<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class TempAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public  $sourcePath = '@app/HTML/bootstrap-3.3.7/dist';
//    public  $sourcePath = '@app/HTML';
    public $css = [
        'css/temp/temp.css',

    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
//        "frontend\assets\CartAsset",
        "frontend\assets\MainpageAsset",
    ];
    public $publishOptions = [
        'forceCopy' => true,];
}
