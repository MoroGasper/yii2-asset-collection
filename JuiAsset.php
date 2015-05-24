<?php
/**
 * JuiAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class JuiAsset extends P2AssetBundle
{
	private $bundleName = 'jquery-ui';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->css = $this->jsItem($this->bundleName);

		parent::init();
	}

	public $depends = [
		'p2made\assets\JqueryAsset',
	];
}
