<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css\animation.css',
        'css\bootstrap.css',
        'css\camera.css',
        'css\jquery.fancybox.css',
        'css\style.css',
        'css\touchTouch.css',
    ];
    public $js = [
        'js\bootstrap.min.js',
        'js\camera.js',
        'js\forms.js',
        'js\html5shiv.js',
        'js\jquery.easing.1.3.js',
        'js\jquery.equalheights.js',
        'js\jquery.isotope.min.js',
        'js\jquery.js',
        'js\jquery.mobile.customized.min.js',
        'js\jquery.mobilemenu.js',
        'js\jquery.touchSwipe.min.js',
        'js\jquery.ui.totop.js',
        'js\jquery-migrate-1.2.1.js',
        'js\superfish.js',
        'js\tm-scripts.js',
        'js\touchTouch.jquery.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}