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

class FontAwesome4Asset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/font-awesome';
    
    public $css
        = [
            'css/font-awesome.min.css',
        ];
}