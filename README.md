p2y2assetCollection
===================

A bunch of CSS & JS resources wrapped as Yii 2 AssetBundles.

Resource | Published Asset | CDN Asset
------------ | ------------- | ------------
[Bootstrap Social](https://github.com/lipis/bootstrap-social) | `pub\BootstrapSocialAsset`  | `cdn\BootstrapSocialAsset`
[dataTables](http://datatables.net) | `pub\DataTablesAsset`  | `cdn\DataTablesAsset`
[Flot Charts](http://www.flotcharts.org) | `pub\FlotChartsAsset`  | `cdn\FlotChartsAsset`
excanvas | `pub\ExcanvasAsset`  | `cdn\ExcanvasAsset`
Flot tooltip | `pub\FlotTooltipAsset`  |
[FullCalendar](http://fullcalendar.io) | `pub\FullCalendarAsset`  | `cdn\FullCalendarAsset`
[Holder.js](http://imsky.github.io/holder/) | `pub\HolderAsset`  | `cdn\HolderAsset`
[metisMenu](https://github.com/onokumus/metisMenu) | `pub\MetisMenuAsset`  | `cdn\MetisMenuAsset`
[Moment.js](http://momentjs.com/) | `pub\MomentAsset`  | `cdn\MomentAsset`
[MomentTimezone](http://momentjs.com/timezone/) | `pub\MomentTimezoneAsset`  | `cdn\MomentTimezoneAsset`
[Morris.JS](http://morrisjs.github.io/morris.js/) | `pub\MorrisAsset`  | `cdn\MorrisAsset`
[Raphaël](http://raphaeljs.com) | `pub\RaphaelAsset`  | `cdn\RaphaelAsset`
[SweetAlert](http://t4t5.github.io/sweetalert/) | `pub\SweetAlertAsset`  | `cdn\SweetAlertAsset`
[html5shiv](https://github.com/afarkas/html5shiv) & [Respond.JS](https://github.com/scottjehl/Respond) | `pub\Html5shivAsset`  | `cdn\Html5shivAsset`



Installation
------------

The preferred way to install p2y2assetCollection is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require p2made/yii2-assets-collection "dev-master"
```

or

```
php composer.phar require p2made/yii2-assets-collection "dev-master"
```

Alternatively add:

```
	"p2made/yii2-assets-collection": "dev-master"
```

to the requires section of your `composer.json` file & p2y2assetCollection will be installed next time you run `composer update`.

Usage
-----

Register assets in views with:

```
	p2made\assets\pub\AssetNameAsset::register($this);
```

& as a dependancy in assets with:

```
	public $depends = [
		// ...
		'p2made\assets\pub\AssetNameAsset',
		// ...
	];
```

There are 2 versions of most AssetBundles, the default one publishes the assets to your `web\assets` folder, & the other pulls the assets from a CDN (most commonly cdnjs.com).
p2y2sweetAlertAsset contains 2 versions of the asset bundle,

To use the CDNs simply use `cdn\AssetNameAsset` *instead of* `pub\AssetNameAsset`.

For usage of the resources see their web pages.



