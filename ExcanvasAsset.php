<?php
/**
 * ExcanvasAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class ExcanvasAsset extends P2AssetBundle
{
	private $bundleName = 'excanvas';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->js  = $this->assetItem($this->bundleName, 'Js');

		parent::init();
	}

	public $jsOptions = [
		'condition' => 'lte IE9'
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
