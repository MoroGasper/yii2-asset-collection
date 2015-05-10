<?php
/**
 * FlotTooltipAsset.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\flotChartsAsset;

/**
 * Class AssetBundle
 * @package p2y2\flotChartsAsset\FlotTooltipAsset
 */
class FlotTooltipAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/p2y2flotChartsAsset/flot.tooltip';

	public $css = [];

	public $js = [
		'js/jquery.flot.tooltip.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
