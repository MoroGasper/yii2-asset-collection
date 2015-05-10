<?php
/**
 * MetisMenuAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class MetisMenuAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/onokumus/metismenu/dist';

	public $css = [
		'metisMenu.min.css',
	];

	public $js = [
		'metisMenu.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
