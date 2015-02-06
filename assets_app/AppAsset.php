<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets_app;

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
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        '//code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
        //'css/site.css',
    ];
    public $js = [
        //'//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js',
        'dist/js/app.min.js',
        //'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
