AdminLTE 3 asset for Bootstrap4
===============================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist insolita/yii2-adminlte-asset "~1.0.0"
```

or add

```
"insolita/yii2-adminlte-asset": "~1.0.0"
```

to the require section of your `composer.json` file.

Usage
----------

Just register AssetBundle in top of your layout

```php
$this->registerAssetBundle(AdminLte3Asset::class);
```

See [Layout Example](src/layout_examples/master.php)
