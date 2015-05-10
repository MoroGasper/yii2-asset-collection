<?php
/**
 * pub/MomentAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets\pub;

class MomentAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@bower/moment/min';

	public $css = [];

	public $js = [
		'moment.min.js'
	];

	public $depends = [];
}

/*
		'moment.min.js',

		'locales.min.js',
		'moment-with-locales.min.js',
		'tests.js',
*/
