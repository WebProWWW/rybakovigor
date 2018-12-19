<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 15:46
 */

use yii\helpers\Url;
use frontend\widgets\SocWidget;
use frontend\widgets\SubNavWidget;

/* @var $this \yii\web\View */
/* @var $socArr \frontend\models\Social[] */
/* @var $catArr \frontend\models\Category[] */
/* @var $catAlias string */
/* @var $parent string */


$this->title = ' - Магазин';
$this->params['alias'] = $parent;
?>
<div class="block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-xl-7 order-2 order-xl-1">
                <div class="block">
                    <?= SubNavWidget::widget(['data'=>$catArr, 'parent'=>$parent, 'alias'=>$catAlias]) ?>
                </div><!-- .block -->
            </div>
            <div class="col-auto ml-auto order-1 order-xl-2">
                <div class="block">
                    <?= SocWidget::widget(['data'=>$socArr]) ?>
                </div><!-- .block -->
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .block -->

<div class="container my-auto">
    <div class="row">
        <div class="col-12 col-lg-4 col-xl-3">
            <div class="block">
                <p class="text em-sm-13 f-oswald">
                    <span class="tbg-orange py-5 px-15">НОВАЯ КОЛЛЕКЦИЯ</span>
                </p>
                <h3 class="page-title fw-500 em-23 em-sm-36">RYBAKOV STORE</h3>
                <p class="text em-12 fw-300 mt-lg-50">Официальный магазин бренда Игоря Владимировича Рыбакова</p>
                <img class="d-none d-lg-block mt-50 w-75 mr-auto" src="/img/avt.png">
            </div><!-- .block -->
        </div><!-- .col -->
        <div class="col-12 col-lg-8 col-xl-6">
            <div class="block bg-logo">
                <div class="pslider-wrap">
                    <div class="owl-carousel pslider js-powl">
                    <!--<div class="pslider js-bxslider">-->
                        <div><img class="pslider-img" width="350" height="500" src="/img/product/1-1.jpg"></div>
                        <div><img class="pslider-img" width="350" height="500" src="/img/product/1-2.jpg"></div>
                        <div><img class="pslider-img" width="350" height="500" src="/img/product/1-3.jpg"></div>
                        <div><img class="pslider-img" width="350" height="500" src="/img/product/1-4.jpg"></div>
                        <div><img class="pslider-img" width="350" height="500" src="/img/product/1-5.jpg"></div>
                        <div><img class="pslider-img" width="350" height="500" src="/img/product/1-6.jpg"></div>
                        <div><img class="pslider-img" width="350" height="500" src="/img/product/1-7.jpg"></div>
                    </div><!-- .js-bxslider -->
                    <div class="pslider-btn em-13 js-bxslider-btn"></div>
                </div><!-- .pslider-wrap -->
            </div><!-- .block -->
        </div><!-- .col -->
        <div class="col-12 col-xl-3">
            <div class="row">
                <div class="col-12">
                    <div class="block">
                        <p class="text gray">Название</p>
                        <h3 class="text mt-10 fw-500 em-16 f-oswald">ПОСТЕР "FAIL BETTER"</h3>
                    </div><!-- .block -->
                </div><!-- .col -->
                <div class="col-12 col-md-5 col-xl-12">
                    <div class="block">
                        <p class="text gray">Выбрать формат</p>
                        <form>
                            <select class="input">
                                <option>А3 (297х420 мм)</option>
                                <option>А3 (297х420 мм)</option>
                                <option>А3 (297х420 мм)</option>
                                <option>А3 (297х420 мм)</option>
                                <option>А3 (297х420 мм)</option>
                            </select>
                        </form>
                        <p class="text gray">Постер на листе 10-мм пенокартона форматов А3 (30 х 42 см), либо A1 (60 x 84 см).</p>
                    </div><!-- .block -->
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-3 col-xl-12">
                    <div class="block">
                        <p class="text gray">Цена</p>
                        <p class="text mt-10 fw-500 em-16 f-oswald">
                            <span class="v-middle">2490</span>
                            <i class="i-ruble-sign em-9"></i>
                        </p>
                    </div><!-- .block -->
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-12">
                    <div class="block">
                        <p class="text d-none d-md-block">&nbsp;</p>
                        <a class="btn btn-orange f-oswald em-13" href="">
                            <i class="i-cart em-13 mr-10"></i> КУПИТЬ
                        </a>
                    </div><!-- .block -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->