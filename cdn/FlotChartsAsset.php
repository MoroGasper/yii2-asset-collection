<?php
/**
 * cdn/FlotChartsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets\cdn;

class FlotChartsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.pie.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.time.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'p2made\assets\cdn\ExcanvasAsset',
		'p2made\assets\pub\FlotTooltipAsset',
	];
}

/*
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.pie.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.time.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/excanvas.min.js',

		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.colorhelpers.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.canvas.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.categories.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.crosshair.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.errorbars.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.fillbetween.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.image.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.navigate.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.stack.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.symbol.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.threshold.min.js',
*/