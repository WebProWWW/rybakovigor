<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-22 04:43
 */

/* @var $this \yii\web\View */
/* @var $category \frontend\models\Category */
/* @var $products \frontend\models\Product[] */

?>
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
            <div class="pslider-wrap">
                <div class="owl-carousel pslider js-powl">
                    <?php foreach ($products as $product): ?>
                        <div><img class="pslider-img" width="600" height="600" src="<?= $product->img ?>"></div>
                    <?php endforeach; ?>
                </div><!-- .slider -->
            </div><!-- .pslider-wrap -->
        </div><!-- .col -->
        <div class="col-12 col-xl-3">
            <?php foreach ($products as $i => $product): ?>
                <div class="<?= ($i !== 0) ? 'd-none' : '' ?> js-pslider-data" id="pslider-data-<?= $i ?>">
                    <?= $this->render($category->tpl, ['product'=>$product]) ?>
                </div>
            <?php endforeach; ?>
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->

<div class="d-none">
    <div class="size-modal" id="size-table">
        <table class="em-md-13">
            <thead>
            <tr><th>Размер EU</th><th>XS</th><th>S</th><th>M</th><th>L</th><th>XL</th><th>XXL</th></tr>
            </thead>
            <tbody>
            <tr><td>Высота изделия, см</td><td>70</td><td>72</td><td>74</td><td>74</td><td>74</td><td>74</td></tr>
            <tr><td>Охват груди, см</td><td>90</td><td>92</td><td>96</td><td>100</td><td>106</td><td>106</td></tr>
            <tr><td>Ширина рукава, см</td><td>17</td><td>18</td><td>18</td><td>18</td><td>19</td><td>19</td></tr>
            <tr><td>Ширина плеч, см</td><td>39</td><td>41</td><td>42.5</td><td>42.5</td><td>45</td><td>50</td></tr>
            </tbody>
        </table>
    </div>
</div>