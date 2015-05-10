<?php
/**
 * pub/Html5shivAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets\pub;

class Html5shivAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [];

	public $js = [
		'@vendor/p2made/yii2-asset-collection/assets/html5shiv-3.7.2/dist/html5shiv.min.js',
		'@vendor/p2made/yii2-asset-collection/assets/Respond-1.4.2/dest/respond.min.js',
	];

	public $jsOptions = [
		'condition' => 'lte IE9'
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}

/*
		'@vendor/p2made/yii2-asset-collection/assets/html5shiv-3.7.2/dist/html5shiv-printshiv.min.js',
*/
