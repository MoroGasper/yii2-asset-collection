<?php
/**
 * cdn/MomentTimezoneAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets\cdn;

class MomentTimezoneAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@bower/moment-timezone';

	public $css = [];

	public $js = [
		'moment-timezone.js',
	];

	public $depends = [];
}

/*
		'//cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.3.1/moment-timezone.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.3.1/moment-timezone-utils.min.js',
*/
