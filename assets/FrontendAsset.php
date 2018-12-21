<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 13:10
 */

namespace app\assets;


use yii\web\AssetBundle;

class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic',
        'https://fonts.googleapis.com/css?family=Oswald:300,400,500&amp;subset=cyrillic',
        'fonts/icomoon/style.css',
        'css/main.css?v=016',
    ];
    public $js = [
        'js/main.js?v=012',
    ];
    public $depends = [
        JQuerryAsset::class,
        OwlCarousel::class,
        TwbsGridAsset::class,
        FancyboxAsset::class,
    ];
}
