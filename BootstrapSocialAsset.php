<?php
/**
 * BootstrapSocialAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class BootstrapSocialAsset extends P2AssetBundle
{
	private $bundleName = 'bootstrap-social';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->css = $this->assetItem($this->bundleName, 'Css');
		//$this->js  = $this->assetItem($this->bundleName, 'Js');
		//$this->Img = $this->assetItem($this->bundleName, 'Img');

		parent::init();
	}

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'\rmrevin\yii\fontawesome\AssetBundle',
	];
}
