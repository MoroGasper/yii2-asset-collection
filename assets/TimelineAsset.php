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

class TimelineAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '#/timeline',
		'pub' => [
			'css' => [
				'timeline.css',
			],
		],
		'depends' => [
			'p2made\assets\BootstrapPluginAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
