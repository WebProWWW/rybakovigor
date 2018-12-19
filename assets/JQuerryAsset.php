<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 13:52
 */

namespace app\assets;


use yii\web\AssetBundle;

class JQuerryAsset extends AssetBundle
{
    public $sourcePath = '@vendor/jquery/jquery/dist';
    public $js = [
        'jquery.min.js',
    ];
}