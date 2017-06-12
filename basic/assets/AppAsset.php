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
        'css/font-awesome.min.css',
        'css/animate.css',
        'css/gallerybox.css',
        'css/site.css'
    ];
    public $js = [
        'js/jssor.slider-24.0.2.min.js',
        'js/owl.carousel.min.js',
        'js/owl.carousel2.thumbs.min.js',
        'js/velocity.min.js',
        'js/jquery.gallerybox.js',
        'js/googlemaps.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyACzvbJ4E9TUEi6FmtHuwn1EMKXLvGQtZw&callback=myMap',
        'js/site.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
