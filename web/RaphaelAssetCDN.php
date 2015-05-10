<?php
/**
 * AssetBundleCDN.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\raphaelAsset;

/**
 * Class AssetBundleCDN
 * @package p2y2\raphaelAsset\AssetBundleCDN
 */
class AssetBundleCDN extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
