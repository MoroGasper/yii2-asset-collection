<?php
/**
 * ExcanvasAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

class ExcanvasAsset extends p2made\assets\P2AssetBundle
{
	private $assetName = 'excanvas';

	public $sourcePath = $this->assetSourcePath($assetName);

	public $js = $this->assetJs($assetName);

	public $jsOptions = [
		'condition' => 'lte IE9'
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
