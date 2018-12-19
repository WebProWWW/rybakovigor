<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 14:40
 */

namespace app\assets;


use yii\web\AssetBundle;

class TwbsGridAsset extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap/dist';
    public $css = [
        'css/bootstrap-grid.min.css',
    ];
}