<?php
/**
 * AssetBundle.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\metisMenuAsset;

/**
 * Class AssetBundle
 * @package p2y2metisMenuAsset\AssetBundle
 */
class AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/onokumus/metismenu/dist';

	public $css = [
		'metisMenu.min.css',
	];

	public $js = [
		'metisMenu.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
