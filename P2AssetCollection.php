<?php
/**
 * P2AssetCollection.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\base\InvalidParamException;

class P2AssetCollection extends Component
{
	public $useCdn = false;

	protected $resourceData = array(
		'animate' => array(
			'sourcePath' => '@bower/animate.css',
			'pubCss' => [
				'animate.min.css',
			],
			'cdnCss' => [
				'//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css',
			],
		),
		'bootstrap-social' => array(
			'sourcePath' => '@bower/bootstrap-social',
			'pubCss' => [
				'bootstrap-social.css',
			],
			'cdnCss' => [
				'//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.9.0/bootstrap-social.min.css',
			],
		),
		'dataTables' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/DataTables-1.10.7',
			'pubCss' => [
				'plugins/integration/bootstrap/3/dataTables.bootstrap.css',
				'extensions/Responsive/css/dataTables.responsive.css',
			],
			'cdnCss' => [
				'//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css',
				'//cdn.datatables.net/responsive/1.0.3/css/dataTables.responsive.css',
			],
			'pubJs'  => [
				'media/js/jquery.dataTables.min.js',
				'plugins/integration/bootstrap/3/dataTables.bootstrap.min.js',
			],
			'cdnJs'  => [
				'//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js',
				'//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js',
			],
		),
		'excanvas' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/flot-0.8.3',
			'pubJs'  => [
				'excanvas.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/excanvas.min.js',
			],
		),
		'flot' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/flot-0.8.3',
			'pubJs'  => [
				'jquery.flot.js',
				'jquery.flot.pie.js',
				'jquery.flot.resize.js',
				'jquery.flot.time.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js',
				'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.pie.min.js',
				'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js',
				'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.time.min.js',
			],
		),
		'font-awesome' => array(
			'sourcePath' => '@vendor/fortawesome/font-awesome',
			'pubCss'  => [
				'css/font-awesome.min.css',
			],
			'cdnCss'  => [
				'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
			],
		),
		'fullCalendar' => array(
			'sourcePath' => '@bower/fullcalendar/dist',
			'pubCss' => [
				'fullcalendar.min.css',
				'fullcalendar.print.css',
			],
			'cdnCss' => [
				'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.css',
				'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.print.css',
			],
			'pubJs'  => [
				'fullcalendar.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js',
			],
		),
		'holder' => array(
			'sourcePath' => '@vendor/imsky/holder',
			'pubJs'  => [
				'holder.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/holder/2.7.1/holder.min.js',
			],
		),
		'isotope' => array(
			'sourcePath' => '@bower/isotope/dist',
			'pubJs'  => [
				'isotope.pkgd.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js',
			],
		),
		'jquery-countTo' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/jquery-countTo',
			'pubJs' => [
				'jquery.countTo.js',
			],
			'cdnJs' => [
				'http://cdn.jsdelivr.net/jquery.countto/0.1.0/jquery.countTo.min.js',
			],
		),
		'metisMenu' => array(
			'sourcePath' => '@vendor/onokumus/metismenu/dist',
			'pubCss' => [
				'metisMenu.min.css',
			],
			'cdnCss' => [
				'//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.0.0/metisMenu.min.css',
			],
			'pubJs'  => [
				'metisMenu.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.0.0/metisMenu.min.js',
			],
		),
		'moment' => array(
			'sourcePath' => '@bower/moment/min',
			'pubJs'  => [
				'moment.min.js'
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
			],
		),
		'moment-timezone' => array(
			'sourcePath' => '@bower/moment-timezone',
			'pubJs'  => [
				'moment-timezone.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.3.1/moment-timezone.min.js',
			],
		),
		'morris' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/morris.js-0.5.1',
			'pubCss' => [
				'morris.css',
			],
			'cdnCss' => [
				'//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css',
			],
			'pubJs'  => [
				'morris.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js',
			],
		),
		'prettyPhoto' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/prettyPhoto_3.1.6',
			'pubCss' => [
				'css/prettyPhoto.min.css',
			],
			'cdnCss' => [
				'//cdn.jsdelivr.net/prettyphoto/3.1.5/css/prettyPhoto.css',
			],
			'pubJs'  => [
				'js/jquery.prettyPhoto.min.js',
			],
			'cdnJs'  => [
				'//cdn.jsdelivr.net/prettyphoto/3.1.5/js/jquery.prettyPhoto.js',
			],
		),
		'raphael' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/raphael-2.1.2',
			'pubJs'  => [
				'raphael-min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js',
			],
		),
		'sweetAlert' => array(
			'sourcePath' => '@bower/sweetalert/lib',
			'pubCss' => [
				'sweetalert.css',
			],
			'cdnCss' => [
				'//cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.css',
			],
			'pubJs'  => [
				'sweetalert.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.min.js',
			],
		),

		'html5shiv' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets',
			'pubJs'  => [
				'html5shiv-3.7.2/dist/html5shiv.min.js',
				'Respond-1.4.2/dest/respond.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js',
				'//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js',
			],
		),
	);

	public function assetSourcePath($bundleName)
	{
		if($this->useCdn) {
			return null;
		}

		return $this->resourceData[$bundleName]['sourcePath'];
	}

	public function assetItem($bundleName, $assetType)
	{
		$itemName = ($this->useCdn ? 'cdn' : 'pub') . $assetType;
		return $this->resourceData[$bundleName][$itemName];
	}

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();

		if($this->useCdn !== true) {
			return;
		}

		Yii::$app->assetManager->bundles['yii\web\JqueryAsset'] = [
			'sourcePath' => null,
			'js' => ['//code.jquery.com/jquery-1.11.2.min.js'],
		];
		Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
			'sourcePath' => null,
			'css' => ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'],
		];
		Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
			'sourcePath' => null,
			'js' => ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'],
		];
		Yii::$app->assetManager->bundles['yii\jui\JuiAsset'] = [
			'sourcePath' => null,
			'css' => ['//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css'],
			'js' => ['//code.jquery.com/ui/1.11.2/jquery-ui.min.js'],
		];
	}
}

/* example resource */
/*
		'bundleName' => array(
			'sourcePath' => '',
			'pubCss' => [
				'',
			],
			'cdnCss' => [
				'',
			],
			'pubJs'  => [
				'',
			],
			'cdnJs'  => [
				'',
			],
			'pubImg' => [
				'',
			],
			'cdnImg' => [
				'',
			],
		),
*/
