<?php
/**
 * FlotChartsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class FlotChartsAsset extends P2AssetBundle
{
	private $assetName = 'flot';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->Js  = $this->assetItem($this->bundleName, 'Js');

		parent::init();
	}

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'p2made\assets\pub\ExcanvasAsset',
		'p2made\assets\pub\FlotTooltipAsset',
	];
}