<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;
use yii\base\BaseObject;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',

        //<!-- Icon css link -->
        'css/font-awesome.min.css',
        //<!-- Bootstrap -->
        'css/bootstrap.min.css',

        //<!-- Rev slider css -->
        'vendors/revolution/css/settings.css',
        'vendors/revolution/css/layers.css',
        'vendors/revolution/css/navigation.css',

        //<!-- Extra plugin css -->
        'vendors/owl-carousel/owl.carousel.min.css',

        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/index.js',

        'js/WebGL.js',
        'js/WebGLColor.js',
        'js/WebGLImage.js',
        'js/WebGLTransfor.js',
        'js/webgl/cuon-matrix.js',
        'js/webgl/cuon-utils.js',
        'js/webgl/webgl-debug.js',
        'js/webgl/webgl-utils.js',
        'js/webgl/FilterBase.js',
        'js/webgl/JFilterBase.js',
        'js/webgl/JFilterCollection.js',
        'js/webgl/JFilterPoint.js',
        'js/webgl/jquery-3.2.1.js',
//        'js/webgl/jquery-3.2.1.min.js',


//        <!-- Rev slider js -->
        'vendors/revolution/js/jquery.themepunch.tools.min.js',
        'vendors/revolution/js/jquery.themepunch.revolution.min.js',
        'vendors/revolution/js/extensions/revolution.extension.actions.min.js',
        'vendors/revolution/js/extensions/revolution.extension.video.min.js',
        'vendors/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'vendors/revolution/js/extensions/revolution.extension.navigation.min.js',
        'vendors/revolution/js/extensions/revolution.extension.slideanims.min.js',
//        <!-- Extra plugin css -->
        'vendors/counterup/jquery.waypoints.min.js',
        'vendors/counterup/jquery.counterup.min.js',
        'vendors/counterup/apear.js',
        'vendors/counterup/countto.js',
        'vendors/owl-carousel/owl.carousel.min.js',
        'vendors/magnify-popup/jquery.magnific-popup.min.js',
        'js/circle-active.js',
        'js/contact.js',
        'js/gmaps.min.js',
        'js/popper.min.js',
        'js/smoothscroll.js',
        'js/bootstrap.min.js',
        'js/jquery.form.js',
        'js/jquery.validate.min.js',
//        'js/jquery-3.2.1.min.js',
        'js/theme.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

    public static function addWebGLJs($view)
    {
//        $file;
//        $view->registerJsFile($file, [AppAsset::className(), "depends" => 'backend\assets\AppAsset']);
    }
}
