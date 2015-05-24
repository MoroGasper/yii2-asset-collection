<?php
/**
 * P2AssetBundle.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @license MIT
 */

namespace p2made\assets;

class P2AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = [];
	public $css = [];
	public $js  = [];
	public $img = [];
	public $depends = [];
	public $_useCdn = false;

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
		'bootstrap' => array(
			'sourcePath' => '@bower/bootstrap/dist',
			'pubCss' => [
				'css/bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
			],
		),
		'bootstrap-plugin' => array(
			'sourcePath' => '@bower/bootstrap/dist',
			'pubJs' => [
				'js/bootstrap.min.js',
			],
			'cdnJs' => [
				'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
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
		'bootswatch-cerulean' => array(
			'sourcePath' => '@bower/bootswatch/cerulean',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cerulean/bootstrap.min.css',
			],
		),
		'bootswatch-cosmo' => array(
			'sourcePath' => '@bower/bootswatch/cosmo',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cosmo/bootstrap.min.css',
			],
		),
		'bootswatch-cyborg' => array(
			'sourcePath' => '@bower/bootswatch/cyborg',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cyborg/bootstrap.min.css',
			],
		),
		'bootswatch-darkly' => array(
			'sourcePath' => '@bower/bootswatch/darkly',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/darkly/bootstrap.min.css',
			],
		),
		'bootswatch-flatly' => array(
			'sourcePath' => '@bower/bootswatch/flatly',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/flatly/bootstrap.min.css',
			],
		),
		'bootswatch-journal' => array(
			'sourcePath' => '@bower/bootswatch/journal',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/journal/bootstrap.min.css',
			],
		),
		'bootswatch-lumen' => array(
			'sourcePath' => '@bower/bootswatch/lumen',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/lumen/bootstrap.min.css',
			],
		),
		'bootswatch-paper' => array(
			'sourcePath' => '@bower/bootswatch/paper',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/paper/bootstrap.min.css',
			],
		),
		'bootswatch-readable' => array(
			'sourcePath' => '@bower/bootswatch/readable',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/readable/bootstrap.min.css',
			],
		),
		'bootswatch-sandstone' => array(
			'sourcePath' => '@bower/bootswatch/sandstone',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/sandstone/bootstrap.min.css',
			],
		),
		'bootswatch-simplex' => array(
			'sourcePath' => '@bower/bootswatch/simplex',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/simplex/bootstrap.min.css',
			],
		),
		'bootswatch-slate' => array(
			'sourcePath' => '@bower/bootswatch/slate',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/slate/bootstrap.min.css',
			],
		),
		'bootswatch-spacelab' => array(
			'sourcePath' => '@bower/bootswatch/spacelab',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/spacelab/bootstrap.min.css',
			],
		),
		'bootswatch-superhero' => array(
			'sourcePath' => '@bower/bootswatch/superhero',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/superhero/bootstrap.min.css',
			],
		),
		'bootswatch-united' => array(
			'sourcePath' => '@bower/bootswatch/united',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/united/bootstrap.min.css',
			],
		),
		'bootswatch-yeti' => array(
			'sourcePath' => '@bower/bootswatch/yeti',
			'pubCss' => [
				'bootstrap.min.css',
			],
			'cdnCss' => [
				'//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/yeti/bootstrap.min.css',
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
		'fitvids' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/FitVids.js',
			'pubJs'  => [
				'jquery.fitvids.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js',
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
		'gmaps' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/gmaps',
			'pubJs'  => [
				'gmaps.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.12/gmaps.min.js',
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
		'jquery' => array(
			'sourcePath' => '@bower/jquery/dist',
			'pubJs' => [
				'jquery.min.js',
			],
			'cdnJs' => [
				'//code.jquery.com/jquery-1.11.3.min.js',
			],
		),
		'jquery-migrate' => array(
			'sourcePath' => '@bower/jquery-migrate',
			'pubJs' => [
				'jquery-migrate.min.js',
			],
			'cdnJs' => [
				'//code.jquery.com/jquery-migrate-1.2.1.min.js',
			],
		),
		'jquery-countTo' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/jquery-countTo',
			'pubJs' => [
				'jquery.countTo.js',
			],
			'cdnJs' => [
				'//cdn.jsdelivr.net/jquery.countto/0.1.0/jquery.countTo.min.js',
			],
		),
		'jquery-ui' => array(
			'sourcePath' => '@bower/jquery-ui',
			'pubJs' => [
				'jquery-ui.min.js',
			],
			'cdnJs' => [
				'//code.jquery.com/ui/1.11.4/jquery-ui.min.js',
			],
		),
		'masonry' => array(
			'sourcePath' => '@bower/masonry/dist',
			'pubJs'  => [
				'masonry.pkgd.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.min.js',
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
		'wow' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/WOW/dist',
			'pubJs'  => [
				'wow.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js',
			],
		),

		'html5shiv' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/shiv',
			'pubJs'  => [
				'html5shiv-3.7.2/dist/html5shiv.min.js',
				'Respond-1.4.2/dest/respond.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js',
				'//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js',
			],
		),
		'printshiv' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/shiv',
			'pubJs'  => [
				'html5shiv-3.7.2/dist/printshiv.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/printshiv.min.js',
			],
		),
	);

	protected function assetSourcePath($bundleName)
	{
		if(P2AssetBundle::useCdn()) {
			return null;
		}

		return $this->resourceData[$bundleName]['sourcePath'];
	}

	protected function cssItem($bundleName)
	{
		return $this->assetItem($bundleName, 'Css');
	}

	protected function jsItem($bundleName)
	{
		return $this->assetItem($bundleName, 'Js');
	}

	protected function assetItem($bundleName, $assetType)
	{
		$itemName = (P2AssetBundle::useCdn() ? 'cdn' : 'pub') . $assetType;
		return $this->resourceData[$bundleName][$itemName];
	}

	protected static function useCdn()
	{
		if(isset(\Yii::$app->params['p2assets']['useCdn'])) {
			$_useCdn = \Yii::$app->params['p2assets']['useCdn'];
		}
		return $_useCdn;
	}
}
