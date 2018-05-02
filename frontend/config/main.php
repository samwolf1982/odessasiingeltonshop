<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log',
        'app\components\ShopNotificator'
    ],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'user' => [
            'as frontend' => 'dektrium\user\filters\FrontendFilter',
        ],
    ],
    'components' => [

        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'sourcePath' => '@app/HTML/bootstrap-3.3.7/dist',
//                    'basePath' => '@webroot',
//                    'baseUrl' => '@web',
                    'css' => ['css/bootstrap.min.css'],
                ]
            ]
        ],


'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,

    'rules' => [
        '/' => 'mainpage/index',
        'about' => 'site/about',
        'contact' => 'site/contact',
        'login' => 'site/login',
    ],

],

        'view' => [
            'theme' => [
                'basePath' => '@app/themes/theme2',
                'baseUrl' => '@web/themes/theme2',
                'pathMap' => [
                    '@app/views' => '@app/themes/theme2',
                ],
            ],
        ],


        'request' => [
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'dektrium\user\models\User',
            'identityCookie' => [
                'name'     => '_frontendIdentity',
                'path'     => '/',
                'httpOnly' => true,
            ],
        ],
        'session' => [
            'name' => 'FRONTENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path'     => '/',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

    ],
    'params' => $params,
];
