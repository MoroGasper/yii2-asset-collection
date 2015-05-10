<?php
/**
 * AssetBundleCDN.php
 *
 * @author Pedro Plowman //github.com/p2made
 */

namespace p2y2\flotChartsAsset;

/**
 * Class AssetBundleCDN
 * @package p2y2\flotChartsAsset\AssetBundleCDN
 */
class AssetBundleCDN extends \yii\web\AssetBundle
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
		'p2y2\flotChartsAsset\FlotTooltipAsset',
		'p2y2\flotChartsAsset\ExcanvasAssetCDN',
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
