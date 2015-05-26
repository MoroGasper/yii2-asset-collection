<?php
/**
 * RespondAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class RespondAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@bower/respond/dest',
		'pub-js'  => [
			'respond.min.js',
		],
		'cdn-js'  => [
			'//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
