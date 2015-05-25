<?php
/**
 * SweetAlertAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class SweetAlertAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@bower/sweetalert/lib',
		'pub-css' => [
			'sweetalert.css',
		],
		'cdn-css' => [
			'//cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.css',
		],
		'pub-js'  => [
			'sweetalert.min.js',
		],
		'cdn-js'  => [
			'//cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.min.js',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}