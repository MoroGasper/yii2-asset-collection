<?php
/**
 * DataTablesAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class DataTablesAsset extends p2made\assets\P2AssetBundle
{
	private $assetName = 'dataTables';

	public $sourcePath = $this->assetSourcePath($assetName);

	public $css = $this->assetCss($assetName);

	public $js = $this->assetJs($assetName);

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
