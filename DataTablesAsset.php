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

class DataTablesAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2y2dataTablesAsset/DataTables-1.10.7';

	public $css = [
		'plugins/integration/bootstrap/3/dataTables.bootstrap.css',
		'extensions/Responsive/css/dataTables.responsive.css',
	];

	public $js = [
		'media/js/jquery.dataTables.min.js',
		'plugins/integration/bootstrap/3/dataTables.bootstrap.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
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
