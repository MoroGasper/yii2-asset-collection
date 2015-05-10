<?php
/**
 * AssetBundle.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\raphaelAsset;

/**
 * Class AssetBundle
 * @package p2y2\raphaelAsset\AssetBundle
 */
class AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/p2y2raphaelAsset/raphael-2.1.2';

	public $css = [];

	public $js = [
		'raphael-min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
