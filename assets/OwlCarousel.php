<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 14:22
 */

namespace app\assets;


use yii\web\AssetBundle;

class OwlCarousel extends AssetBundle
{
    public $sourcePath = '@vendor/OwlCarousel2/OwlCarousel2/dist';
    public $js = [
        'owl.carousel.min.js'
    ];
    public $css = [
        'assets/owl.carousel.min.css'
    ];
    public $depends = [
        JQuerryAsset::class,
    ];
}