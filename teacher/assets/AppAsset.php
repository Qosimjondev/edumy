<?php

namespace teacher\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/style.css',
        'css/fileuploader.css',
        'css/dashbord_navitaion.css',

        'css/responsive.css',
        [
            'href' => 'images/favicon.ico',
            'rel' => 'shortcut icon',
            'sizes' => '128x128',
            'type' => 'image/x-icon'
        ],
        [
            'href' => 'images/favicon.ico',
            'rel' => 'shortcut icon',
            'sizes' => '128x128',
        ],

    ];
    public $js = [
        'js/jquery-3.3.1.js',
        'js/jquery-migrate-3.0.0.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/jquery.mmenu.all.js',
        'js/ace-responsive-menu.js',

        'js/chart.min.js',
        'js/chart-custome.js',

        'js/bootstrap-select.min.js',
        'js/snackbar.min.js',
        'js/simplebar.js',
        'js/parallax.js',
        'js/scrollto.js',
        'js/jquery-scrolltofixed-min.js',
        'js/jquery.counterup.js',
        'js/wow.min.js',
        'js/progressbar.js',
        'js/slider.js',
        'js/timepicker.js',
        'js/wow.min.js',
        'js/dashboard-script.js',

        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}