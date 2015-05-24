<?php
/**
 * PrettySociableAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class PrettySociableAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-asset-collection/assets/prettySociable_1.2.1';

	public $css = [
		'css/prettySociable.min.js',
	];

	public $js = [
		'js/jquery.prettySociable.min.js',
	];
}
