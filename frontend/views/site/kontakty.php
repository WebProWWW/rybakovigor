<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 15:55
 */

/**
 * @var $this \yii\web\View
 */
?>
<div class="block my-auto">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="block">
                    <h1 class="page-title em-23 em-md-36">КОНТАКТЫ</h1>
                </div><!-- .block -->
            </div>
            <div class="col-12 col-lg-6 ml-auto">
                <div class="block quote">
                    <p class="text lh-10">
                        <span class="d-block fw-700 em-13 em-md-16">Делай невозможное, остальное сделают другие</span>
                        <span class="d-block em-11 mt-10">Игорь Рыбаков</span>
                    </p>
                </div><!-- .block -->
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .block -->

<div class="block mt-auto">
    <div class="container border-24">
        <div class="row align-items-center justify-content-around">
            <div class="col-12 col-lg-7 order-2 order-lg-1">
                <img class="img-b" src="/img/img-2.png">
            </div><!-- .col -->
            <div class="col-12 col-lg-4 order-1 order-lg-2">
                <div class="block">
                    <p class="text f-oswald em-18 fw-500 text-center text-xl-left">Я В СОЦИАЛЬНЫХ СЕТЯХ</p>
                    <div class="soc-large">
                        <?= $this->render('-soc') ?>
                    </div>
                    <img class="d-none d-lg-block mt-15 w-50 ml-auto" src="/img/avt.png">
                </div><!-- .block -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .block -->