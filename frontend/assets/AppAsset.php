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
        'assets2/css/bootstrap.min.css',
        'assets2/css/font-awesome.min.css',
        'assets2/fonts/flaticon.css',
        'assets2/css/animate.css',
        'assets2/css/owl.carousel.css',
        'assets2/css/slick.css',
        'assets2/css/off-canvas.css',
        'assets2/css/magnific-popup.css',
        'assets2/css/rsmenu-main.css',
        'assets2/css/rs-spacing.css',
        'assets2/css/style.css',
        'assets2/css/responsive.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
