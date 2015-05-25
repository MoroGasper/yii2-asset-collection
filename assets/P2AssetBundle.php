<?php
/**
 * P2AssetBundle.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class P2AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = null;
	public $css = [];
	public $js  = [];
	public $depends = [];
	public $_useCdn = false;

	protected function configureAsset($resourceData)
	{
		if(P2AssetBundle::useCdn()) {
			$this->configureCdnAsset($resourceData);
		} else {
			$this->configurePubAsset($resourceData);
		}
	}

	protected function configurePubAsset($resourceData)
	{
		$this->sourcePath = $resourceData['sourcePath'];

		if(isset($resourceData['pub-css'])) {
			$this->css = $resourceData['pub-css'];
		}
		if(isset($resourceData['pub-js'])) {
			$this->js = $resourceData['pub-js'];
		}
	}

	protected function configureCdnAsset($resourceData)
	{
		if(isset($resourceData['cdn-css'])) {
			$this->css = $resourceData['cdn-css'];
		}
		if(isset($resourceData['cdn-js'])) {
			$this->js = $resourceData['cdn-js'];
		}
	}

	protected static function useCdn()
	{
		if(isset(\Yii::$app->params['p2assets']['useCdn'])) {
			$_useCdn = \Yii::$app->params['p2assets']['useCdn'];
		}
		return $_useCdn;
	}

/* --- asset template --- */
/*
	private $resourceData = array(
		'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets',
		'pub-css' => [],
		'cdn-css' => [],
		'pub-js'  => [],
		'cdn-js'  => [],
	);

	public $depends = [];

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
*/
}
