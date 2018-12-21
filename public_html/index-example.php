<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 00:24
 */

use yii\web\Application;
use yii\helpers\ArrayHelper;
use yii\base\InvalidConfigException;

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../config/bootstrap.php';

$config = ArrayHelper::merge(
    require __DIR__ . '/../config/common.php',
    require __DIR__ . '/../config/frontend.php'
);

try {
    (new Application($config))->run();
} catch (InvalidConfigException $e) {
    if (YII_DEBUG) echo $e->getMessage();
}
