<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 02:40
 */

/**
 * @var $this \yii\web\View
 */
$this->params['alias'] = 'index';
?>
<div class="container d-flex flex-grow-1">
    <div class="row">
        <div class="col-12 col-xl-6 mt-auto">
            <div class="block">
                <h1 class="htitle em-35 em-sm-80">РЫБАКОВ<br>ИГОРЬ</h1>
                <h2 class="text fw-300 em-13 em-sm-15">
                    Сооснователь компаний «ТехноНИКОЛЬ», «Николь-Пак», «Рыбаков Фонд», Венчурный Фонд «LARIX» и сети смарт-офисов «SOK»
                </h2>
            </div><!-- .col -->
            <div class="block">
                <div class="row align-items-stretch">
                    <div class="col-divider mt-15 mr-0"></div>
                    <div class="col-10 col-sm-auto"><h3 class="text em-13">Российский<br>предприниматель</h3></div>
                    <div class="w-100 d-sm-none"></div>
                    <div class="col-divider mt-15 mr-0"></div>
                    <div class="col-10 col-sm-auto"><h3 class="text em-13">Венчурный<br>инвестор</h3></div>
                    <div class="w-100 d-sm-none"></div>
                    <div class="col-divider mt-15 mr-0"></div>
                    <div class="col-10 col-sm-auto"><h3 class="text em-13">Филантроп</h3></div>
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="block">
                <a target="_blank" href="https://www.forbes.com/profile/igor-rybakov/">
                    <img class="d-block mt-15" height="33" src="/img/forbes.svg">
                </a>
                <div class="row">
                    <div class="col-12 col-md-auto">
                        <p class="text">
                     <span class="d-flex align-items-center">
                        <span class="d-block mr-20 f-oswald fw-500 em-34 orange">#84</span>
                        <span class="d-block fw-300">
                           в рейтинге 200 богатейших<br>
                           бизнесменов по версии<br>
                           журнала Forbes
                        </span>
                     </span>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto">
                        <p class="text">
                     <span class="d-flex align-items-center">
                        <span class="d-block mr-20 f-oswald fw-500 em-34 orange">$1.2</span>
                        <span class="d-block fw-300">
                           миллиарда<br>
                           cостояние<br>
                           в 2018
                        </span>
                     </span>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .row -->
        </div><!-- .col -->
        <div class="col-12 col-xl-6 mt-auto">
            <img class="img-a" src="/img/img-1.jpg">
        </div><!-- .col -->
        <div class="col-12 mt-auto">
            <div class="block">
                <?= $this->render('-soc') ?>
            </div><!-- .block -->
        </div><!-- .col -->
    </div><!-- .row -->
</div>