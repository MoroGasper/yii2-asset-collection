<?php
/**
 * pub/HolderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets\pub;

class HolderAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-asset-collection/assets/imsky-holder-b6a69ce';

	public $css = [];

	public $js = [
		'holder.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
