<?php
/**
 * AssetBundle.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\shivAsset;

/**
 * Class AssetBundle
 * @package p2y2\shivAsset\AssetBundle
 */
class AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/p2y2shivAsset/Respond-1.4.2/dest';

	public $css = [];

	public $jsOptions = [
		'condition' => 'lte IE9'
	];

	public $js = [
		'respond.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'p2y2\shivAsset\Html5shivAsset',
	];
}

/*
		'html5shiv-printshiv.min.js',
*/
