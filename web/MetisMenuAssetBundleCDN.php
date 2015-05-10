<?php
/**
 * AssetBundleCDN.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\metisMenuAsset;

/**
 * Class AssetBundleCDN
 * @package p2y2metisMenuAsset\AssetBundleCDN
 */
class AssetBundleCDN extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [
		'//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.0.0/metisMenu.min.css',
	];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.0.0/metisMenu.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
