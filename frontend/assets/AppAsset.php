<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/master.css',
        'plugins/iview/css/iview.css',
        'plugins/iview/css/skin/style.css',
        'css/master.css',
        'css/master.css',
    ];
    public $js = [
        'js/jquery-1.11.1.min.js',
        'js/jquery-migrate-1.2.1.js',
        'js/jquery-ui.min.js',
        'js/bootstrap-3.1.1.min.js',
        'js/modernizr.custom.js',
        'plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js',
        'plugins/iview/js/iview.js',
        'plugins/isotope/jquery.isotope.min.js',
        'js/waypoints.min.js',
        'plugins/bxslider/jquery.bxslider.min.js',
        'plugins/magnific/jquery.magnific-popup.js',
        'plugins/prettyphoto/js/jquery.prettyPhoto.js',
        'plugins/loader/js/classie.js',
        'plugins/loader/js/pathLoader.js',
        'plugins/loader/js/main.js',
        'js/classie.js',
        'js/cssua.min.js',
        'js/custom.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
