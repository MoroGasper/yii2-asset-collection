<?php
/**
 * FullCalendarAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class FullCalendarAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@bower/fullcalendar/dist',
		'pub-css' => [
			'fullcalendar.min.css',
			'fullcalendar.print.css',
		],
		'cdn-css' => [
			'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.css',
			'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.print.css',
		],
		'pub-js'  => [
			'fullcalendar.min.js',
		],
		'cdn-js'  => [
			'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js',
		],
	);

	public $depends = [
		'p2made\assets\MomentAsset',
	];

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
