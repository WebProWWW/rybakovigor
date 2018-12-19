<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 01:33
 */

Yii::setAlias('@frontend', dirname(__DIR__) . '/frontend');
Yii::setAlias('@backend', dirname(__DIR__) . '/backend');
Yii::setAlias('@console', dirname(__DIR__) . '/console');

function dump($data) {return '<pre>'.print_r($data, true).'</pre>';}