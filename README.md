P2AssetCollection
=================

A bunch of CSS & JS resources wrapped as Yii 2 AssetBundles.

Resource | Asset Class
------------------------- | -------------------------
[Bootstrap Social](https://github.com/lipis/bootstrap-social) | `BootstrapSocialAsset`
[dataTables](http://datatables.net) | `DataTablesAsset`
[Flot Charts](http://www.flotcharts.org) | `FlotChartsAsset`
excanvas | `ExcanvasAsset`
Flot tooltip | `pub\FlotTooltipAsset`  |
[FullCalendar](http://fullcalendar.io) | `FullCalendarAsset`
[Holder.js](http://imsky.github.io/holder/) | `HolderAsset`
[metisMenu](https://github.com/onokumus/metisMenu) | `MetisMenuAsset`
[Moment.js](http://momentjs.com/) | `MomentAsset`
[MomentTimezone](http://momentjs.com/timezone/) | `MomentTimezoneAsset`
[Morris.JS](http://morrisjs.github.io/morris.js/) | `MorrisAsset`
[Raphaël](http://raphaeljs.com) | `RaphaelAsset`
[SweetAlert](http://t4t5.github.io/sweetalert/) | `SweetAlertAsset`
[html5shiv](https://github.com/afarkas/html5shiv) & [Respond.JS](https://github.com/scottjehl/Respond) | `Html5shivAsset`

The asset collection uses a component to allow using either published assets or assets from CDNs.

Installation
------------

The preferred way to install p2y2assetCollection is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require p2made/yii2-assets-collection "1.*"
```

or

```
php composer.phar require p2made/yii2-assets-collection "1.*"
```

Alternatively add:

```
	"p2made/yii2-assets-collection": "1.*"
```

to the requires section of your `composer.json` file & p2y2assetCollection will be installed next time you run `composer update`.

Usage
-----

First add these lines to the `components` section of your config file.

```
	'P2AssetCollection' => [
		'class' => 'p2made\assets\P2AssetCollection',
		'useCdn' => true, // false or not set to use published assets
	],
```

Register assets in views with:

```
	p2made\assets\AssetNameAsset::register($this);
```

& as a dependancy in assets with:

```
	public $depends = [
		// ...
		'p2made\assets\AssetNameAsset',
		// ...
	];
```

For usage of the asset resources see their web pages.


