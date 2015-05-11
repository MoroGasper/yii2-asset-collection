<?php
/**
 * cdn/HolderAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets\cdn;

class HolderAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/holder/2.7.1/holder.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
