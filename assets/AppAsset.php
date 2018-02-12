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
        'css/bootstrap.min.css',
		'css/font-awesome.min.css',
		'css/owl.carousel.css',
		'css/responsive.css',
		'css/style.css',
    ];
    public $js = [
	/*	'js/bootstrap.min.js',
		'jquery.min.js',
		'js/owl.carousel.min.js',
		'js/jquery.sticky.js',
		'js/jquery.easing.1.3.min.js',
		'js/main.js',
		'js/bxslider.min.js',
		'js/script.slider.js',*/

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
	public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
