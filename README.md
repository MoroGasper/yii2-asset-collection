P2AssetCollection v2.2.0
========================

A bunch of CSS & JS resources wrapped as Yii 2 AssetBundles.

Resource | Asset Class
-------- | -----------
[Bootstrap Social](https://github.com/lipis/bootstrap-social) | `p2made\assets\BootstrapSocialAsset`
[dataTables](http://datatables.net) | `p2made\assets\DataTablesAsset`
[Flot Charts](http://www.flotcharts.org) | `p2made\assets\FlotChartsAsset`
excanvas | `p2made\assets\ExcanvasAsset`
Flot tooltip | `p2made\assets\FlotTooltipAsset` |
[FullCalendar](http://fullcalendar.io) | `p2made\assets\FullCalendarAsset`
[Holder.js](http://imsky.github.io/holder/) | `p2made\assets\HolderAsset`
[metisMenu](https://github.com/onokumus/metisMenu) | `p2made\assets\MetisMenuAsset`
[Moment.js](http://momentjs.com/) | `p2made\assets\MomentAsset`
[MomentTimezone](http://momentjs.com/timezone/) | `p2made\assets\MomentTimezoneAsset`
[Morris.JS](http://morrisjs.github.io/morris.js/) | `p2made\assets\MorrisAsset`
[prettyPhoto](http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/) | `p2made\assets\PrettyPhotoAsset`
[prettySociable](http://www.no-margin-for-errors.com/projects/prettysociable-mashable-like-sharing/) | `p2made\assets\PrettySociableAsset`
[Raphaël](http://raphaeljs.com) | `p2made\assets\RaphaelAsset`
[SweetAlert](http://t4t5.github.io/sweetalert/) | `p2made\assets\SweetAlertAsset`
[html5shiv](https://github.com/afarkas/html5shiv) & [Respond.JS](https://github.com/scottjehl/Respond) | `p2made\assets\Html5shivAsset`

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

Sources
-------

In order of preference, the following sources are used for published assets...

- a trusted `composer` package as a dependancy
- a trusted `bower` package as a dependancy
- a trusted `npm` package as a dependancy
- downloaded files included in this package

In order of preference, the CDNs used are...

- vendor CDN
- [cdnjs](https://cdnjs.com/)
- [jsDelivr](http://www.jsdelivr.com/)

Very occasionally the CDN version of a resource may be a little behind the published version.



