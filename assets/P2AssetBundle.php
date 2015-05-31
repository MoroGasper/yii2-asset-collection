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
	 * [$basePath description]
	 * @var string
	 */
	public $basePath = null;

	/**
	 * [$baseUrl description]
	 * @var string
	 */
	public $baseUrl = null;

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

	private static $_cdnEnd;
	private static $_useCdn;

	protected function configureAsset($resourceData)
	{
		if(P2AssetBundle::useCdn()) {
			$this->configureCdnAsset($resourceData);
		} else {
			$this->configurePubAsset($resourceData);
		}

		if(isset($resourceData['cssOptions'])) {
			$this->cssOptions = $resourceData['cssOptions'];
		}
		if(isset($resourceData['jsOptions'])) {
			$this->jsOptions = $resourceData['jsOptions'];
		}
		if(isset($resourceData['depends'])) {
			$this->depends = $resourceData['depends'];
		}
	}

	protected function configurePubAsset($resourceData, $fallOut = false)
	{
		if(!isset($resourceData['pub'])) { // no published asset data
			if($fallOut) {
				return;
			} else {
				$this->configureCdnAsset($resourceData, true);
			}
		}

		$currentPath = $resourceData['sourcePath'];
		if(P2AssetBundle::cdnEnd()) {
			$this->baseUrl = str_replace('#/', P2AssetBundle::cdnEnd() . '/lib/', $currentPath);
		} else {
			$this->sourcePath = str_replace( '#/', P2AssetBundle::ownPath(), $currentPath);
		}

		if(isset($resourceData['pub']['css'])) {
			$this->css = $resourceData['pub']['css'];
		}
		if(isset($resourceData['pub']['js'])) {
			$this->js = $resourceData['pub']['js'];
		}
	}

	protected function configureCdnAsset($resourceData, $fallOut = false)
	{
		if(!isset($resourceData['cdn'])) { // no CDN asset data
			if($fallOut) {
				return;
			} else {
				$this->configurePubAsset($resourceData, true);
			}
		}

		if(isset($resourceData['cdn']['css'])) {
			$this->css = $resourceData['cdn']['css'];
		}
		if(isset($resourceData['cdn']['js'])) {
			$this->js = $resourceData['cdn']['js'];
		}
	}

	protected static function useCdn()
	{
		if(isset($_useCdn)) { return $_useCdn; }

		// using 'p2made' as param space to allow for my other bits
		if(isset(\Yii::$app->params['p2made']['useCdn'])) {
			$_useCdn = \Yii::$app->params['p2made']['useCdn'];
		} else {
			$_useCdn = false;
		}

		return $_useCdn;
	}

	protected static function ownPath($folder)
	{
		if(!$folder) { return false; }
		return '@vendor/p2made/yii2-asset-collection/assets/lib/' . $folder;
	}

	protected static function cdnEnd()
	{
		if(isset($_cdnEnd)) { return $_cdnEnd; }

		// using 'p2made' as param space to allow for my other bits
		if(isset(\Yii::$app->params['p2made']['cdnEnd'])) {
			$_cdnEnd = \Yii::$app->params['p2made']['cdnEnd'];
		} else {
			$_cdnEnd = false;
		}

		return $_cdnEnd;
	}

/* --- asset template --- */
/*
	private $resourceData = array(
		'sourcePath' => '#/dummyFolder',
		'pub' => [
			'css' => [
			],
			'js' => [
			],
		],
		'cdn' => [
			'css' => [
			],
			'js' => [
			],
		],
		'cssOptions' => [
		],
		'jsOptions' => [
		],
		'depends' => [
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
*/
}
