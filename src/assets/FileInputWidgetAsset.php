<?php
/**
 * Created by PhpStorm.
 * User: floor12
 * Date: 31.12.2017
 * Time: 21:28
 */

namespace floor12\files\assets;


use yii\web\AssetBundle;


class FileInputWidgetAsset extends AssetBundle
{
    public $publishOptions = [
        'forceCopy' => true,
    ];

    public $sourcePath = '@vendor/floor12/yii2-module-files/assets/';

    public $css = [
        'yii2-floor12-files.css',
    ];
    public $js = [
        'yii2-floor12-files.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'floor12\files\assets\SimpleAjaxUploaderAsset',
    ];
}