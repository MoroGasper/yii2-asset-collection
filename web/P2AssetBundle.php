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
	private $assetData = Yii::$app->p2assetData;
	private $useCdn = $assetData->useCdn;

	private function assetItem($bundleName, $itemName)
	{
		return $this->assetData->data[$bundleName][$itemName];
	}

	protected function assetSourcePath($bundleName)
	{
		if($this->useCdn) {
			return null;
		}

		return $this->assetItem($bundleName, 'sourcePath');
	}

	protected function assetCss($bundleName)
	{
		if($this->useCdn) {
			return $this->assetItem($bundleName, 'cdnCss');
		}

		return $this->assetItem($bundleName, 'pubCss');
	}

	protected function assetJs($bundleName)
	{
		if($this->useCdn) {
			return $this->assetItem($bundleName, 'cdnJs');
		}

		return $this->assetItem($bundleName, 'pubJs');
	}

	protected function assetImg($bundleName)
	{
		if($this->useCdn) {
			return $this->assetItem($bundleName, 'cdnImg');
		}

		return $this->assetItem($bundleName, 'pubImg');
	}
}
