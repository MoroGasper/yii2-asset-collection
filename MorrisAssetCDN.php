<?php
/**
 * MorrisAssetCDN.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class MorrisAssetCDN extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [
		'//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css',
	];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'p2made\assets\RaphaelAssetCDN',
	];
}
