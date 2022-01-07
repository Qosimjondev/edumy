<?php


namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class IeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $cssOptions = [
      'condition'=>'lt IE 9',
    ];

    public $js = [
        'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js',
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',
    ];

    public $jsOptions = [
        'condition'=>'lt IE 9',
        'position'=>View::POS_HEAD,
    ];
}