<?php
/**
 * TimelineAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class TimelineAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-asset-collection/assets/timeline';

	public $css = [
		'timeline.css',
	];

	public $depends = [
		'p2made\assets\BootstrapPluginAsset',
	];
}
