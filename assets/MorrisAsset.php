<?php
/**
 * MorrisAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class MorrisAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/assets/morris.js-0.5.1',
		'pub-css' => [
			'morris.css',
		],
		'cdn-css' => [
			'//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css',
		],
		'pub-js'  => [
			'morris.min.js',
		],
		'cdn-js'  => [
			'//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js',
		],
	);

	public $depends = [
		'p2made\assets\RaphaelAsset',
	];

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}