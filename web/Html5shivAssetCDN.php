<?php
/**
 * AssetBundleCDN.php
 *
 * @author Pedro Plowman //github.com/p2made
 */

namespace p2y2\shivAsset;

/**
 * Class AssetBundleCDN
 * @package p2y2\shivAsset\AssetBundleCDN
 */
class AssetBundleCDN extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [];

	public $jsOptions = [
		'condition' => 'lte IE9'
	];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js',
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
