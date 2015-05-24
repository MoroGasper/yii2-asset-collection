<?php
/**
 * BootstrapAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class BootstrapAsset extends P2AssetBundle
{
	private $bundleName = 'bootstrap';

	/**
	 * @inherit doc
	 */
	public function init()
	{
		if(isset(\Yii::$app->params['p2assets']['bwTheme'])) {
			$this->bundleName = 'bootswatch-' . \Yii::$app->params['p2assets']['bwTheme'];
		}

		$this->sourcePath = $this->assetSourcePath($this->bundleName);
		$this->css = $this->cssItem($this->bundleName);

		parent::init();
	}
}

/* params
	'p2assets' => [
		'useCdn' => true, // false or not set to use published assets
		'bwTheme' = 'cerulean', // set to one of:
									'cerulean', 'cosmo', 'cyborg', 'darkly',
									'flatly', 'journal', 'lumen', 'paper',
									'readable', 'sandstone', 'simplex', 'slate',
									'spacelab', 'superhero', 'united', 'yeti',
	],
*/
