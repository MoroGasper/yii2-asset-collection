<?php
/**
 * AssetBundle.php
 *
 * @author Pedro Plowman https://github.com/p2made
 */

namespace p2y2\flotChartsAsset;

/**
 * Class AssetBundle
 * @package p2y2\flotChartsAsset\AssetBundle
 */
class AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/p2y2flotChartsAsset/flot-0.8.3';

	public $css = [];

	public $js = [
		'jquery.flot.js',
		'jquery.flot.pie.js',
		'jquery.flot.resize.js',
		'jquery.flot.time.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'p2y2\flotChartsAsset\FlotTooltipAsset',
		'p2y2\flotChartsAsset\ExcanvasAsset',
	];
}

/*
		'jquery.flot.min.js',
		'jquery.flot.pie.min.js',
		'jquery.flot.resize.min.js',
		'jquery.flot.time.min.js',
		'excanvas.min.js',

		'jquery.colorhelpers.min.js',
		'jquery.flot.canvas.min.js',
		'jquery.flot.categories.min.js',
		'jquery.flot.crosshair.min.js',
		'jquery.flot.errorbars.min.js',
		'jquery.flot.fillbetween.min.js',
		'jquery.flot.image.min.js',
		'jquery.flot.navigate.min.js',
		'jquery.flot.selection.min.js',
		'jquery.flot.stack.min.js',
		'jquery.flot.symbol.min.js',
		'jquery.flot.threshold.min.js',
*/

/*
	<!--[if lte IE 8]>
		'js/excanvas.min.js',
	<![endif]-->
*/
