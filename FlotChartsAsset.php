<?php
/**
 * FlotChartsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class FlotChartsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-asset-collection/assets/flot-0.8.3';

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
		'p2made\assets\ExcanvasAsset',
		'p2made\assets\FlotTooltipAsset',
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
