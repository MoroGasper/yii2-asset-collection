<?php
/**
 * AssetBundle.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\morrisAsset;

/**
 * Class AssetBundle
 * @package p2y2\morrisAsset\AssetBundle
 */
class AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/p2y2morrisAsset/morris.js-0.5.1';

	public $css = [
		'morris.css',
	];

	public $js = [
		'morris.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'p2y2\raphaelAsset\AssetBundle',
	];
}
