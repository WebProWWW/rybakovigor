<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 02:28
 */

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Url;

$this->title = ' - 404';
?>

<div class="container d-flex flex-grow-1">
    <div class="col-12 my-auto">
        <a href="<?= Url::home() ?>">
            <img class="d-block mx-auto" width="150" height="150" src="/img/logo.svg" alt="IR">
        </a>
        <p class="text text-center fw-300 em-16">Страница не найдена</p>
    </div>
</div>