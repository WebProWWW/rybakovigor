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
            <p class="text mt-10 fw-500 em-16 f-oswald">
                <span class="v-middle"><?= $product->price ?></span>
                <i class="i-ruble-sign em-9"></i>
            </p>
        </div><!-- .block -->
    </div><!-- .col -->
    <div class="col-12 col-md-6 col-xl-12">
        <div class="pb-xl-15">
            <p class="text gray">Выбрать формат</p>
            <?= Html::beginForm() ?>
                <select name="size" class="input">
                    <option value="A3(297x420мм)">A3 (297 x 420 мм)</option>
                    <option value="A1(594x841мм)">A1 (594 x 841 мм)</option>
                </select>
            <?= Html::endForm() ?>
            <p class="text">
                Постер на листе 10-мм пенокартона форматов А3 (30 х 42 см), либо A1 (60 x 84 см).
            </p>
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