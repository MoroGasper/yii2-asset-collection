<?php
/**
 * ExcanvasAsset.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\flotChartsAsset;

/**
 * Class AssetBundle
 * @package p2y2\flotChartsAsset\ExcanvasAsset
 */
class ExcanvasAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/p2y2flotChartsAsset/flot-0.8.3';

	public $css = [];

	public $jsOptions = [
		'condition' => 'lte IE9'
	];

	public $js = [
		'excanvas.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
