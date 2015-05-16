<?php
/**
 * FlotTooltipAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class FlotTooltipAsset extends p2made\assets\P2AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-asset-collection/assets/flot.tooltip';

	public $js = [
		'js/jquery.flot.tooltip.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
