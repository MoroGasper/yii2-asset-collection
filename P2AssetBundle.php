<?php
/**
 * P2AssetBundle.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class P2AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = [];
	public $css = [];
	public $js  = [];
	public $img = [];

	protected function assetSourcePath($bundleName)
	{
		return \Yii::$app->P2AssetCollection->assetSourcePath($bundleName);
	}

	protected function assetItem($bundleName, $assetType)
	{
		return \Yii::$app->P2AssetCollection->assetItem($bundleName, $assetType);
	}
}
