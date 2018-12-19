<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 18:04
 */

namespace app\assets;


use yii\web\AssetBundle;

class FancyboxAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fancyapps/fancybox/dist';
    public $css = [
        'jquery.fancybox.min.css',
    ];
    public $js = [
        'jquery.fancybox.min.js',
    ];
    public $depends = [
        JQuerryAsset::class,
    ];
}