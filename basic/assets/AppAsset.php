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
        // 'css/site.css',
        'css/font-awesome.min.css',
        'css/component.css',
        'css/animate.css',
        'css/overlay.css',
        'css/demo.css',
        'css/slicebox.css',
        'css/master.css',
    ];
    public $js = [
        'js/velocity.min.js',
        'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js',
        'js/master.js',
        'js/modernizr.custom.46884.js',
        'js/jquery.slicebox.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
