<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CartfixAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/cart_fix.css',

    ];
    public $js = [

        'js/changecountext.js', // отдельно для поля приборы можно вынести в виджет поже

    ];
    public $depends = [

        "frontend\assets\CartAsset",
    ];

    public $publishOptions = [
        'forceCopy' => true,];
}
