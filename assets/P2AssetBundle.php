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
	/**
	 * [$sourcePath description]
	 * @var string
	 */
	public $sourcePath = null;

	/**
	 * [$css description]
	 * @var array
	 */
	public $css = [];

	/**
	 * [$js description]
	 * @var array
	 */
	public $js  = [];

	/**
	 * [$depends description]
	 * @var array
	 */
	public $depends = [];

	protected $_useCdn = false;
	private $_ownPathBase = '@vendor/p2made/yii2-asset-collection/assets/lib/';

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
		// using 'p2made' as param space to allow for my other bits
		if(isset(\Yii::$app->params['p2made']['useCdn'])) {
			$_useCdn = \Yii::$app->params['p2made']['useCdn'];
		}
		return $_useCdn;
	}

	protected function ownPathBase()
	{
		return $this->_ownPathBase;
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
