<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js/agency.js',
        'js/cbpAnimatedHeader.min.js',
        'js/classie.js',
        'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    public $css = [
        'css/agency.css',
        'font-awesome/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'https://fonts.googleapis.com/css?family=Kaushan+Script',
        'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic',
        'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700',
    ];
}
