<?php
/**
 * AssetBundle.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\bootstrapSocialAsset;

/**
 * Class AssetBundle
 * @package p2y2bootstrapSocialAsset\AssetBundle
 */
class BootstrapSocialAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-asset-collection/assets/bootstrap-social';

	public $css = [
		'bootstrap-social.css',
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
