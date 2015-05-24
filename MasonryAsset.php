<?php
/**
 * MasonryAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class MasonryAsset extends P2AssetBundle
{
	private $bundleName = 'masonry';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->js  = $this->assetItem($this->bundleName, 'Js');

		parent::init();
	}

	public $depends = [];
}
