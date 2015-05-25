<?php
/**
 * PrettyPhotoAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class PrettyPhotoAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/assets/prettyPhoto_3.1.6',
		'pub-css' => [
			'css/prettyPhoto.min.css',
		],
		'cdn-css' => [
			'//cdn.jsdelivr.net/prettyphoto/3.1.5/css/prettyPhoto.css',
		],
		'pub-js'  => [
			'js/jquery.prettyPhoto.min.js',
		],
		'cdn-js'  => [
			'//cdn.jsdelivr.net/prettyphoto/3.1.5/js/jquery.prettyPhoto.js',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
