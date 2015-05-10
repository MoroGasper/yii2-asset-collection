<?php
/**
 * AssetBundleCDN.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\bootstrapSocialAsset;

/**
 * Class AssetBundleCDN
 * @package p2y2bootstrapSocialAsset\AssetBundleCDN
 */
class AssetBundleCDN extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [
		'//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.9.0/bootstrap-social.min.css',
	];

	public $js = [
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'\rmrevin\yii\fontawesome\AssetBundle',
	];
}
