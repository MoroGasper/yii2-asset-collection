p2y2assetCollection
===================

A bunch of CSS & JS resources wrapped as Yii 2 AssetBundles.

Resource | Published Asset | CDN Asset
------------ | ------------- | ------------
[Bootstrap Social](https://github.com/lipis/bootstrap-social) | `BootstrapSocialAsset`  | `BootstrapSocialAssetCDN`
[dataTables](http://datatables.net) | `DataTablesAsset`  | `DataTablesAssetCDN`
[Flot Charts](http://www.flotcharts.org) | `FlotChartsAsset`  | `FlotChartsAssetCDN`
excanvas | `ExcanvasAsset`  | `ExcanvasAssetCDN`
Flot tooltip | `FlotTooltipAsset`  |
[metisMenu](https://github.com/onokumus/metisMenu) | `MetisMenuAsset`  | `MetisMenuAssetCDN`
[Morris.JS](http://morrisjs.github.io/morris.js/) | `MorrisAsset`  | `MorrisAssetCDN`
[Raphaël](http://raphaeljs.com) | `RaphaelAsset`  | `RaphaelAssetCDN`
[SweetAlert](http://t4t5.github.io/sweetalert/) | `SweetAlertAsset`  | `SweetAlertAssetCDN`
[html5shiv](https://github.com/afarkas/html5shiv) & [Respond.JS](https://github.com/scottjehl/Respond) | `Html5shivAsset`  | `Html5shivAssetCDN`

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

There are 2 versions of most AssetBundles, the default one publishes the assets to your `web\assets` folder, & the other pulls the assets from a CDN (most commonly cdnjs.com).
p2y2sweetAlertAsset contains 2 versions of the asset bundle,

To use the CDNs simply use `AssetNameAssetCDN` *instead of* `AssetNameAsset`.

For usage of the resources see their web pages.



