<?php
/**
 * MetisMenuAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class MetisMenuAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@vendor/onokumus/metismenu/dist',
		'pub-css' => [
			'metisMenu.min.css',
		],
		'cdn-css' => [
			'//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.0.0/metisMenu.min.css',
		],
		'pub-js'  => [
			'metisMenu.min.js',
		],
		'cdn-js'  => [
			'//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.0.0/metisMenu.min.js',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
