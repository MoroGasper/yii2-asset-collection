<?php
/**
 * Html5shivAsset.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\shivAsset;

/**
 * Class AssetBundle
 * @package p2y2\flotChartsAsset\FlotTooltipAsset
 */
class Html5shivAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/p2y2shivAsset/html5shiv-3.7.2/dist';

	public $css = [];

	public $jsOptions = [
		'condition' => 'lte IE9'
	];

	public $js = [
		'html5shiv.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
