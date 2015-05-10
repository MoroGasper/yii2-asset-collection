<?php
/**
 * cdn/MomentAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets\cdn;

class MomentAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
	];

	public $depends = [];
}

/*
		'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',

		'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/locales.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment-with-locales.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/tests.js',
*/
