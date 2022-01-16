<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-teacher',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'teacher\controllers',
    'name'=>'Education.uz',
    'defaultRoute'=>'site/index',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-teacher',
            'baseUrl'=>'/teacher',
        ],
        'user' => [
            'class'=>'yii\web\User',
            'identityClass' => 'common\models\User',
            'loginUrl' => 'site/login',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity_teacher', 'httpOnly' => true],
        ],
        'session' => [
            'name' => 'teacher_session',
            'cookieParams' => [
                'httpOnly' => true,
                'path' => '/teacher',
            ],
        ],
//        'session' => [
//            // this is the name of the session cookie used for login on the backend
//            'name' => 'advanced-teacher',
//        ],
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

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'baseUrl'=>'/teacher',
            ],
        ],
        'assetManager'=>[
            'appendTimestamp'=>true,

        ],
    ],
    'params' => $params,
];