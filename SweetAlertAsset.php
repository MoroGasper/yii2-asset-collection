<?php
/**
 * SweetAlertAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class SweetAlertAsset extends P2AssetBundle
{
	private $bundleName = 'sweetAlert';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->css = $this->cssItem($this->bundleName);
		$this->css = $this->jsItem($this->bundleName);

		parent::init();
	}
}
