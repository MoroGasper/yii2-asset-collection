<?php
/**
 * P2AssetData.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\base\InvalidParamException;

class P2AssetData extends Component
{
	public $useCdn = false;

	public $data = array(
		'bootstrap-social' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/bootstrap-social',
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
		'fullCalendar' => array(
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/fullcalendar-2.3.1',
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
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/imsky-holder-b6a69ce',
			'pubJs'  => [
				'holder.min.js',
			],
			'cdnJs'  => [
				'//cdnjs.cloudflare.com/ajax/libs/holder/2.7.1/holder.min.js',
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
			'sourcePath' => '@vendor/p2made/yii2-asset-collection/assets/sweetalert-0.5.0/dist',
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
	);

	public function assetSourcePath($bundleName)
	{
		if($this->useCdn) {
			return null;
		}

		return $this->data[$bundleName]['sourcePath'];
	}

	public function assetCss($bundleName)
	{
		if($this->useCdn) {
			return $this->data[$bundleName]['cdnCss'];
		}

		return $this->data[$bundleName]['pubCss'];
	}

	public function assetJs($bundleName)
	{
		if($this->useCdn) {
			return $this->data[$bundleName]['cdnJs'];
		}

		return $this->data[$bundleName]['pubJs'];
	}

	public function assetImg($bundleName)
	{
		if($this->useCdn) {
			return $this->data[$bundleName]['cdnImg'];
		}

		return $this->data[$bundleName]['pubImg'];
	}

/*
		'media/css/jquery.dataTables.min.css',
		'cdn.datatables.net/autofill/1.2.1/css/dataTables.autoFill.css',
		'cdn.datatables.net/colreorder/1.1.2/css/dataTables.colReorder.css',
		'cdn.datatables.net/colvis/1.1.1/css/dataTables.colVis.css',
		'cdn.datatables.net/fixedcolumns/3.0.2/css/dataTables.fixedColumns.css',
		'cdn.datatables.net/fixedheader/2.1.2/css/dataTables.fixedHeader.css',
		'cdn.datatables.net/keytable/1.2.1/css/dataTables.keyTable.css',
		'cdn.datatables.net/scroller/1.2.2/css/dataTables.scroller.css',
		'cdn.datatables.net/tabletools/2.2.3/css/dataTables.tableTools.css',

		'media/css/jquery.dataTables_themeroller.css',

		'cdn.datatables.net/autofill/1.2.1/js/dataTables.autoFill.min.js',
		'cdn.datatables.net/colreorder/1.1.2/js/dataTables.colReorder.min.js',
		'cdn.datatables.net/colvis/1.1.1/js/dataTables.colVis.min.js',
		'cdn.datatables.net/fixedcolumns/3.0.2/js/dataTables.fixedColumns.min.js',
		'cdn.datatables.net/fixedheader/2.1.2/js/dataTables.fixedHeader.min.js',
		'cdn.datatables.net/keytable/1.2.1/js/dataTables.keyTable.min.js',
		'extensions/Responsive/js/dataTables.responsive.min.js',
		'cdn.datatables.net/scroller/1.2.2/js/dataTables.scroller.min.js',
		'cdn.datatables.net/tabletools/2.2.3/js/dataTables.tableTools.min.js',
*/

/*
		'//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css',
		'//cdn.datatables.net/autofill/1.2.1/css/dataTables.autoFill.css',
		'//cdn.datatables.net/colreorder/1.1.2/css/dataTables.colReorder.css',
		'//cdn.datatables.net/colvis/1.1.1/css/dataTables.colVis.css',
		'//cdn.datatables.net/fixedcolumns/3.0.2/css/dataTables.fixedColumns.css',
		'//cdn.datatables.net/fixedheader/2.1.2/css/dataTables.fixedHeader.css',
		'//cdn.datatables.net/keytable/1.2.1/css/dataTables.keyTable.css',
		'//cdn.datatables.net/scroller/1.2.2/css/dataTables.scroller.css',
		'//cdn.datatables.net/tabletools/2.2.3/css/dataTables.tableTools.css',

		'//cdn.datatables.net/autofill/1.2.1/js/dataTables.autoFill.min.js',
		'//cdn.datatables.net/colreorder/1.1.2/js/dataTables.colReorder.min.js',
		'//cdn.datatables.net/colvis/1.1.1/js/dataTables.colVis.min.js',
		'//cdn.datatables.net/fixedcolumns/3.0.2/js/dataTables.fixedColumns.min.js',
		'//cdn.datatables.net/fixedheader/2.1.2/js/dataTables.fixedHeader.min.js',
		'//cdn.datatables.net/keytable/1.2.1/js/dataTables.keyTable.min.js',
		'//cdn.datatables.net/responsive/1.0.3/js/dataTables.responsive.min.js',
		'//cdn.datatables.net/scroller/1.2.2/js/dataTables.scroller.min.js',
		'//cdn.datatables.net/tabletools/2.2.3/js/dataTables.tableTools.min.js',
*/

/*
		'jquery.flot.min.js',
		'jquery.flot.pie.min.js',
		'jquery.flot.resize.min.js',
		'jquery.flot.time.min.js',
		'excanvas.min.js',

		'jquery.colorhelpers.min.js',
		'jquery.flot.canvas.min.js',
		'jquery.flot.categories.min.js',
		'jquery.flot.crosshair.min.js',
		'jquery.flot.errorbars.min.js',
		'jquery.flot.fillbetween.min.js',
		'jquery.flot.image.min.js',
		'jquery.flot.navigate.min.js',
		'jquery.flot.selection.min.js',
		'jquery.flot.stack.min.js',
		'jquery.flot.symbol.min.js',
		'jquery.flot.threshold.min.js',
*/

/*
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.pie.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.time.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/excanvas.min.js',

		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.colorhelpers.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.canvas.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.categories.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.crosshair.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.errorbars.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.fillbetween.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.image.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.navigate.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.stack.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.symbol.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.threshold.min.js',
*/

/*
		@vendor/p2made/yii2-asset-collection/assets/fullcalendar-2.3.1

		'fullcalendar.min.css',
		'fullcalendar.print.css',
		'fullcalendar.min.js',

		'gcal.js',
		'lang-all.js',
		'lang/ar-ma.js',
		'lang/ar-sa.js',
		'lang/ar-tn.js',
		'lang/ar.js',
		'lang/bg.js',
		'lang/ca.js',
		'lang/cs.js',
		'lang/da.js',
		'lang/de-at.js',
		'lang/de.js',
		'lang/el.js',
		'lang/en-au.js',
		'lang/en-ca.js',
		'lang/en-gb.js',
		'lang/es.js',
		'lang/fa.js',
		'lang/fi.js',
		'lang/fr-ca.js',
		'lang/fr.js',
		'lang/he.js',
		'lang/hi.js',
		'lang/hr.js',
		'lang/hu.js',
		'lang/id.js',
		'lang/is.js',
		'lang/it.js',
		'lang/ja.js',
		'lang/ko.js',
		'lang/lt.js',
		'lang/lv.js',
		'lang/nb.js',
		'lang/nl.js',
		'lang/pl.js',
		'lang/pt-br.js',
		'lang/pt.js',
		'lang/ro.js',
		'lang/ru.js',
		'lang/sk.js',
		'lang/sl.js',
		'lang/sr-cyrl.js',
		'lang/sr.js',
		'lang/sv.js',
		'lang/th.js',
		'lang/tr.js',
		'lang/uk.js',
		'lang/vi.js',
		'lang/zh-cn.js',
		'lang/zh-tw.js',
*/

/*
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.css
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.print.css
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/gcal.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang-all.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/ar-ma.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/ar-sa.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/ar-tn.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/ar.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/bg.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/ca.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/cs.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/da.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/de-at.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/de.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/el.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/en-au.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/en-ca.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/en-gb.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/es.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/fa.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/fi.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/fr-ca.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/fr.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/he.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/hi.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/hr.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/hu.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/id.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/is.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/it.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/ja.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/ko.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/lt.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/lv.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/nb.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/nl.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/pl.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/pt-br.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/pt.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/ro.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/ru.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/sk.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/sl.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/sr-cyrl.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/sr.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/sv.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/th.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/tr.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/uk.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/vi.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/zh-cn.js
https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang/zh-tw.js
*/

/*
		'@vendor/p2made/yii2-asset-collection/assets/html5shiv-3.7.2/dist/html5shiv-printshiv.min.js',
*/

/*
		'//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js',
*/

/*
		'moment.min.js',

		'locales.min.js',
		'moment-with-locales.min.js',
		'tests.js',
*/

/*
		'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',

		'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/locales.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment-with-locales.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/tests.js',
*/

/*
		'moment-timezone.js',
		'moment-timezone-utils.js',
*/

/*
		'//cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.3.1/moment-timezone.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.3.1/moment-timezone-utils.min.js',
*/

}
