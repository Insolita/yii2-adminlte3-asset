<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 8/2/14
 * Time: 11:40 AM
 */

namespace insolita\adminlte3bs4\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class AdminLte3Asset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $js = [
            'js/adminlte.js'
        ];
    public $css = [
            'css/adminlte.css',
        ];
    public $depends
        = [
            YiiAsset::class,
            BootstrapAsset::class,
            BootstrapPluginAsset::class,
            FontAwesome4Asset::class
        ];
}