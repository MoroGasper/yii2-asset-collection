<?php
/**
 * cdn/FullCalendarAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-collection
 * @version 0.1.0
 *
 */

namespace p2made\assets\cdn;

class FullCalendarAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;

	public $css = [
		'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.css',
		'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.print.css',
	];

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'p2made\assets\cdn\MomentAsset',
	];
}

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
