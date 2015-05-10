<?php
/**
 * AssetBundleCDN.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\sweetAlertAsset;

/**
 * Class AssetBundleCDN
 * @package p2y2sweetAlertAsset\AssetBundleCDN
 */
class AssetBundleCDN extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [
		'//cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.css',
	];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
