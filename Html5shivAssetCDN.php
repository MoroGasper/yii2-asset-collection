<?php
/**
 * Html5shivAssetCDN.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class Html5shivAssetCDN extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js',
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
		'//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js',
*/
