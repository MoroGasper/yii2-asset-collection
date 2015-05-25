<?php
/**
 * PrintShivAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class PrintShivAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/shiv',
		'pub-js'  => [
			'html5shiv-3.7.2/dist/html5shiv-printshiv.min.js',
		],
		'cdn-js'  => [
			'//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js',
		],
	);

	public $depends = [
		'p2made\assets\Html5shivAsset',
	];

	public $jsOptions = [
		'condition' => 'lte IE9',
		'position' => \yii\web\View::POS_HEAD,
	];

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
