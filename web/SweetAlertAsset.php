<?php
/**
 * AssetBundle.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\sweetAlertAsset;

/**
 * Class AssetBundle
 * @package p2y2sweetAlertAsset\AssetBundle
 */
class AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/p2y2sweetAlertAsset/sweetalert-0.5.0/dist';

	public $css = [
		'sweetalert.css',
	];

	public $js = [
		'sweetalert.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
