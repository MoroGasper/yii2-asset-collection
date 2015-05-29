<?php
/**
 * FullCalendarPrintAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class FullCalendarPrintAsset extends P2AssetBundle
{
	/**
	 * options for the css file beeing published
	 * @var [type]
	 */
	public $cssOptions = [
		'media' => 'print'
	];

	private $resourceData = array(
		'sourcePath' => '@bower/fullcalendar/dist',
		'pub-css' => [
			'fullcalendar.print.css',
		],
		'cdn-css' => [
			'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.print.css',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
