<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/font-awesome.min.css',
        'css/gallerybox.css',
        'css/component.css',
        'css/login-effect.css',
        'css/animate.css',
        'css/site.css',
    ];
    public $js = [
        'js/velocity.min.js',
        'js/owl.carousel.min.js',
        'js/jssor.slider-24.0.2.min.js',
        'js/site.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
