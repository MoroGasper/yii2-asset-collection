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
	private $bundleName = 'morris';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->css = $this->assetItem($this->bundleName, 'Css');
		$this->js  = $this->assetItem($this->bundleName, 'Js');

		parent::init();
	}

	public $depends = [
		'p2made\assets\RaphaelAsset',
	];
}
