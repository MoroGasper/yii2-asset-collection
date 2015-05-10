<?php
/**
 * AssetBundleCDN.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\morrisAsset;

/**
 * Class AssetBundleCDN
 * @package p2y2\morrisAsset\AssetBundleCDN
 */
class AssetBundleCDN extends \yii\web\AssetBundle
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
		'p2y2\raphaelAsset\AssetBundleCDN',
	];
}
