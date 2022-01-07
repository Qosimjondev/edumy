<?php

namespace frontend\assets;

class MainAsset extends \yii\web\AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/bootstrap.min.css',
        'css/style.css',
        'css/responsive.css',
        [
            'href' => 'images/favicon.ico',
            'rel' => 'shortcut icon',
            'sizes' => '128x128',
            'type'=>'image/x-icon'
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
        'js/bootstrap-select.min.js',
        'js/isotop.js',
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
        'js/googlemaps1.js',
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap",
        'js/script.js',
    ];
}