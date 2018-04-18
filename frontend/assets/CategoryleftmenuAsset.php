<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CategoryleftmenuAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
   // public  $sourcePath = '@app/HTML/bootstrap-3.3.7/dist';
    public $css = [
        'js/multi-level-push-menu-master/jquery.multilevelpushmenu.min.css',



//        'stylesheet/960.css',
//        'stylesheet/screen.css',
//        'stylesheet/color.css',
//        'css/temp/temp.css',

    ];

    public $js = [
       // 'js/multi-level-push-menu-master/jquery.multilevelpushmenu.min.js',
        'js/multi-level-push-menu-master/jquery.multilevelpushmenu.js',
        'js/multi-level-push-menu-master/init.js',
    ];
    public $depends = [
        'frontend\assets\AppAsset',

    ];

    public $publishOptions = [
        'forceCopy' => true,];
}
