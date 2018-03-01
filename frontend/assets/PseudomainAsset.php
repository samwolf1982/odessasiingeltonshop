<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class PseudomainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/pseudomain/pseudomain.css',
    ];


    public $js = [
//        "//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js",
//        "//ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js",
//        "js/shoppica.js",
    ];
    public $depends = [
        "frontend\assets\AppAsset"
    ];
}
