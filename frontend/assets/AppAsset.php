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
        'assets/css/bootstrap.min.css',
        'assets/css/font-awesome.min.css',
        'assets/fonts/flaticon.css',
        'assets/css/animate.css',
        'assets/css/owl.carousel.css',
        'assets/css/slick.css',
        'assets/css/off-canvas.css',
        'assets/css/magnific-popup.css',
        'assets/css/rsmenu-main.css',
        'assets/css/rs-spacing.css',
        'assets/css/style.css',
        'assets/css/responsive.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
