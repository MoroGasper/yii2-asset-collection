<?php
/**
 * jQueryPrettyCheckableAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class jQueryPrettyCheckableAsset extends P2AssetBundle
{
	private $resourceData = array(
		'sourcePath' => '@vendor/bower/bootstrap-switch/dist',
		'pub-css' => [
			'css/bootstrap3/bootstrap-switch.min.css',
		],
		'cdn-css' => [
			'//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css',
		],
		'pub-js'  => [
			'js/bootstrap-switch.min.js',
		],
		'cdn-js'  => [
			'//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js',
		],
	);

	public $depends = [
		'p2made\assets\BootstrapAsset',
	];

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}


<link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.prettycheckable/1.2/prettyCheckable.css">
<script src="//cdn.jsdelivr.net/jquery.prettycheckable/1.2/prettyCheckable.js"></script>
