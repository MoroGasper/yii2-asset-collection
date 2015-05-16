<?php
/**
 * MomentAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class MomentAsset extends p2made\assets\P2AssetBundle
{
	private $assetName = 'moment';

	public $sourcePath = $this->assetSourcePath($assetName);

	public $js = $this->assetJs($assetName);
}
