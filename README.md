P2AssetCollection v2.11.0
========================

A bunch of CSS & JS resources wrapped as Yii 2 AssetBundles.

Resource | Asset Class
-------- | -----------
[Animate.css](http://daneden.github.io/animate.css/) | `p2made\assets\AnimateAsset`
[Bootstrap Social](https://github.com/lipis/bootstrap-social) | `p2made\assets\BootstrapSocialAsset`
[dataTables](http://datatables.net) | `p2made\assets\DataTablesAsset`
[excanvas](https://github.com/arv/ExplorerCanvas) | `p2made\assets\ExcanvasAsset`
[FitVids.js](http://fitvidsjs.com) | `p2made\assets\FitvidsAsset`
[Flot Charts](http://www.flotcharts.org) | `p2made\assets\FlotChartsAsset`
Flot tooltip | `p2made\assets\FlotTooltipAsset` |
[FontAwesome](http://fortawesome.github.io/Font-Awesome/) | `p2made\assets\FontAwesomeAsset`
[FullCalendar](http://fullcalendar.io) | `p2made\assets\FullCalendarAsset`
[GMaps.js](https://hpneo.github.io/gmaps/) | `p2made\assets\GMapsAsset`
[Holder.js](http://imsky.github.io/holder/) | `p2made\assets\HolderAsset`
[Isotope](http://isotope.metafizzy.co) | `p2made\assets\IsotopeAsset`
[jquery-countTo](https://github.com/mhuggins/jquery-countTo) | `p2made\assets\JqueryCountToAsset`
[Masonry](http://masonry.desandro.com) | `p2made\assets\MasonryAsset`
[metisMenu](https://github.com/onokumus/metisMenu) | `p2made\assets\MetisMenuAsset`
[Moment.js](http://momentjs.com/) | `p2made\assets\MomentAsset`
[MomentTimezone](http://momentjs.com/timezone/) | `p2made\assets\MomentTimezoneAsset`
[Morris.JS](http://morrisjs.github.io/morris.js/) | `p2made\assets\MorrisAsset`
[prettyPhoto](http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/) | `p2made\assets\PrettyPhotoAsset`
[prettySociable](http://www.no-margin-for-errors.com/projects/prettysociable-mashable-like-sharing/) | `p2made\assets\PrettySociableAsset`
[Raphaël](http://raphaeljs.com) | `p2made\assets\RaphaelAsset`
[SweetAlert](http://t4t5.github.io/sweetalert/) | `p2made\assets\SweetAlertAsset`
timeline | `p2made\assets\TimelineAsset`
[WOW.js](http://mynameismatthieu.com/WOW/) | `p2made\assets\WowAsset`
[html5shiv](https://github.com/afarkas/html5shiv) & [Respond.JS](https://github.com/scottjehl/Respond) | `p2made\assets\Html5shivAsset`

The asset collection uses a component to allow using either published assets or assets from CDNs.

Installation
------------

The preferred way to install p2y2assetCollection is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require p2made/yii2-assets-collection "2.*"
```

or

```
php composer.phar require p2made/yii2-assets-collection "2.*"
```

Alternatively add:

```
	"p2made/yii2-assets-collection": "2.*"
```

to the requires section of your `composer.json` file & p2y2assetCollection will be installed next time you run `composer update`.

Usage
-----

First add these lines to the `components` section of your config file.

```php
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

```php
	public $depends = [
		// ...
		'p2made\assets\AssetNameAsset',
		// ...
	];
```

The `register` lines for all assets...

```php
p2made\assets\AnimateAsset::register($this);
p2made\assets\BootstrapSocialAsset::register($this);
p2made\assets\DataTablesAsset::register($this);
p2made\assets\ExcanvasAsset::register($this);
p2made\assets\FitvidsAsset::register($this);
p2made\assets\FlotChartsAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\FullCalendarAsset::register($this);
p2made\assets\GMapsAsset::register($this);
p2made\assets\HolderAsset::register($this);
p2made\assets\IsotopeAsset::register($this);
p2made\assets\JqueryCountToAsset::register($this);
p2made\assets\MasonryAsset::register($this);
p2made\assets\MetisMenuAsset::register($this);
p2made\assets\MomentAsset::register($this);
p2made\assets\MomentTimezoneAsset::register($this);
p2made\assets\MorrisAsset::register($this);
p2made\assets\PrettyPhotoAsset::register($this);
p2made\assets\PrettySociableAsset::register($this);
p2made\assets\RaphaelAsset::register($this);
p2made\assets\SweetAlertAsset::register($this);
p2made\assets\TimelineAsset::register($this);
p2made\assets\WowAsset::register($this);
p2made\assets\Html5shivAsset::register($this);
```

& the dependency lines for all assets...

```php
		'p2made\assets\AnimateAsset',
		'p2made\assets\BootstrapSocialAsset',
		'p2made\assets\DataTablesAsset',
		'p2made\assets\ExcanvasAsset',
		'p2made\assets\FitvidsAsset',
		'p2made\assets\FlotChartsAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\FullCalendarAsset',
		'p2made\assets\GMapsAsset',
		'p2made\assets\HolderAsset',
		'p2made\assets\IsotopeAsset',
		'p2made\assets\JqueryCountToAsset',
		'p2made\assets\MasonryAsset',
		'p2made\assets\MetisMenuAsset',
		'p2made\assets\MomentAsset',
		'p2made\assets\MomentTimezoneAsset',
		'p2made\assets\MorrisAsset',
		'p2made\assets\PrettyPhotoAsset',
		'p2made\assets\PrettySociableAsset',
		'p2made\assets\RaphaelAsset',
		'p2made\assets\SweetAlertAsset',
		'p2made\assets\TimelineAsset',
		'p2made\assets\WowAsset',
		'p2made\assets\Html5shivAsset',
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



