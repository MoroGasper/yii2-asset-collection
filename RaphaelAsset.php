<?php
/**
 * RaphaelAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 *
 */

namespace p2made\assets;

class RaphaelAsset extends P2AssetBundle
{
	private $bundleName = 'raphael';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->js  = $this->assetItem($this->bundleName, 'Js');

		parent::init();
	}

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
