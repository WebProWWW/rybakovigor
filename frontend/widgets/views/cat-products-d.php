<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-22 05:14
 */

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $product \frontend\models\Product */
?>
<div class="row pb-15">
    <div class="col-12 col-md-6 col-xl-12">
        <div class="pb-xl-15">
            <p class="text gray">Название</p>
            <h3 class="text text-upper mt-10 fw-500 em-16 f-oswald"><?= $product->name ?></h3>
        </div><!-- .block -->
    </div><!-- .col -->
    <div class="col-12 col-md-6 col-xl-12">
        <div class="pb-xl-15">
            <p class="text gray">Цена</p>
            <p class="text mt-10 fw-500 em-20 f-oswald">
                <span class="v-middle"><?= $product->price ?></span>
                <i class="i-ruble-sign em-9"></i>
            </p>
        </div><!-- .block -->
    </div><!-- .col -->
    <div class="col-12 col-md-6 col-xl-12">
        <div class="pb-xl-15">
            <p class="text"><?= $product->desc ?></p>
        </div><!-- .block -->
    </div><!-- .col -->
    <div class="col-12 col-md-6 col-xl-12 ml-auto">
        <div class="pb-xl-15">
            <p class="text d-none d-md-block d-xl-none">&nbsp;</p>
            <a class="btn btn-orange f-oswald em-13" href="">
                <i class="i-cart em-13 mr-10"></i> КУПИТЬ
            </a>
        </div><!-- .block -->
    </div><!-- .col -->
</div><!-- .row -->