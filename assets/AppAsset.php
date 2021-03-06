<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/bootstrap.min.css',
        'css/slick.css',
        'css/nouislider.min.css',
        'css/font-awesome.min.css',
        'css/slick-theme.css',
        'css/lg-fb-comment-box.css',
        'css/lg-transitions.css',
        'css/lightgallery.css',
        'css/image_zoom.css',
        'css/figure-zoom.css'
    ];
    public $cssOptions =[
        'type' => 'text/css',
        'rel' => 'stylesheet'
    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/slick.min.js',
        'js/nouislider.min.js',
        'js/jquery.zoom.min.js',
        'js/main.js',
        'js/bootstrap-notify.js',
        'http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
        'js/lightgallery.js',
        'js/image_zoom.js',
        'js/zoomer.js'
    ];
    public $depends = [
    ];
}