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

class P2AssetBundle extends p2made\assets\P2AssetBundle
{
	private $assets = Yii::$app->P2AssetCollection;
	private $useCdn = $assets->useCdn;

	protected function assetSourcePath($bundleName)
	{
		if($this->useCdn) {
			return null;
		}

		return $this->assets->data[$bundleName]['sourcePath'];
	}

	protected function assetCss($bundleName)
	{
		$itemName = ($this->useCdn ? 'cdnCss' : 'pubCss');
		return $this->assets->data[$bundleName][$itemName];
	}

	protected function assetJs($bundleName)
	{
		$itemName = ($this->useCdn ? 'cdnJs' : 'pubJs');
		return $this->assets->data[$bundleName][$itemName];
	}

	protected function assetImg($bundleName)
	{
		$itemName = ($this->useCdn ? 'cdnImg' : 'cdnImg');
		return $this->assets->data[$bundleName][$itemName];
	}
}
