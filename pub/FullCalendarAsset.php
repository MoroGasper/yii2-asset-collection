<?php
/**
 * pub/FullCalendarAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets\pub;

class FullCalendarAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-asset-collection/assets/fullcalendar-2.3.1';

	public $css = [
		'fullcalendar.min.css',
		'fullcalendar.print.css',
	];

	public $js = [
		'fullcalendar.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'p2made\assets\pub\MomentAsset',
	];
}

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
