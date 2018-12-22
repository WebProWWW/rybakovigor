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
    <div class="col-12">
        <div class="pb-xl-15">
            <h3 class="text text-upper mt-10 fw-500 em-20 f-oswald">
                <?= $product->name ?>
                <span class="d-block mt-10 fw-300 em-7">
                    <span class="tbg-orange">ИГОРЬ РЫБАКОВ</span>
                </span>
            </h3>
            <p class="text">Эта книга о том, что движет мной, чем я утоляю жажду. Прежде всего, об этом, и уже потом о бизнесе, потому что для меня предпринимательство – понятие гораздо более широкое и ценное, нежели просто занятие бизнесом.</p>
        </div><!-- .block -->
        <div class="row pb-xl-15">
            <div class="col-12 col-sm-auto">
                <p class="text">
                    <a data-fancybox data-options="{'modal':true}" href="#intro">
                        <i class="i-justify em-13 mr-15"></i> <span class="bb-dashed">Предисловие от автора</span>
                    </a>
                </p>
            </div><!-- .col -->
            <div class="col-12 col-sm-auto">
                <p class="text">
                    <a data-fancybox data-options="{'modal':true}" href="#review">
                        <i class="i-speech-bubble em-13 mr-15"></i> <span class="bb-dashed">Отзывы</span>
                    </a>
                </p>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .col -->
    <div class="col-12">
        <div class="row align-items-center">
            <div class="col-auto ml-auto">
                <p class="text mt-10 fw-500 em-18 f-oswald">
                    <span class="v-middle"><?= $product->price ?></span>
                    <i class="i-ruble-sign em-9"></i>
                </p>
            </div><!-- .col -->
            <div class="col-12 col-sm-auto">
                <a class="btn btn-orange py-10 f-oswald" href="">
                    <i class="i-cart em-13 mr-10"></i> КУПИТЬ КНИГУ
                </a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .col -->
    <div class="col-12">
        <p class="text em-11">Читать онлайн</p>
        <div class="row">
            <div class="col-12 col-md col-xl-12">
                <a class="btn btn-white py-10 f-oswald fw-500" target="_blank" href="https://ru.bookmate.com/books/m3YV4SKF">
                     <span class="d-flex align-items-center">
                        <i class="i-bookmate orange em-18"></i>
                        <span class="w-100">BOOKMATE</span>
                     </span>
                </a>
            </div>
            <div class="col-12 col-md col-xl-12">
                <a class="btn btn-white py-10 f-oswald fw-500" target="_blank" href="https://books.google.ru/books?id=s41EDwAAQBAJ&pg=PT206&lpg=PT206&dq=книга+жажда+игорь+рыбаков+купить&source=bl&ots=fO8XKl9GQB&sig=ZiYwD_cP-en6PtYquwb4stVISGE&hl=ru&sa=X&ved=0ahUKEwjKs56C3sHYAhUhAZoKHZxbCfc4ChDoAQgnMAA#v=onepage&q=книга%20жажда%20игорь%20рыбаков%20купить&f=false">
                     <span class="d-flex align-items-center">
                        <i class="i-google-play orange em-18"></i>
                        <span class="w-100">GOOGLE BOOKS</span>
                     </span>
                </a>
            </div>
            <div class="col-12 col-md col-xl-12">
                <a class="btn btn-white py-10 f-oswald fw-500" target="_blank" href="https://www.litres.ru/igor-rybakov-12945001/zhazhda/">
                     <span class="d-flex align-items-center">
                        <i class="i-book-open orange em-18"></i>
                        <span class="w-100">ЛИТРЕС</span>
                     </span>
                </a>
            </div>
        </div>
    </div><!-- .col -->
</div><!-- .row -->