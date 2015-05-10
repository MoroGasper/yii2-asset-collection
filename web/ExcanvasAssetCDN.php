<?php
/**
 * ExcanvasAssetCDN.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\flotChartsAsset;

/**
 * Class AssetBundle
 * @package p2y2\flotChartsAsset\ExcanvasAssetCDN
 */
class ExcanvasAssetCDN extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [];

	public $jsOptions = [
		'condition' => 'lte IE9'
	];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/excanvas.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
