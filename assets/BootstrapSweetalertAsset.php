<?php
/**
 * BootstrapSweetalertAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class BootstrapSweetalertAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-asset-collection/assets/lib/bootstrap-sweetalert-0.4.3/lib';

	public $css = [
		'sweet-alert.css',
	];

	public $js = [
		'sweet-alert.min.js',
	];
}
