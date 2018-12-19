<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 02:42
 */

/**
 * @var $this \yii\web\View
 * @var $content string
 */

use yii\helpers\Html;
use app\assets\FrontendAsset;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

FrontendAsset::register($this);


$baseUrl = Url::base(true);

$cAlias= ArrayHelper::getValue($this->params, 'alias', '');

function active($alias, $current)
{
    return ($alias === $current) ? ' active' : '';
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title>Рыбаков Игорь<?= Html::encode($this->title) ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= $baseUrl ?>/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $baseUrl ?>/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $baseUrl ?>/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $baseUrl ?>/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= $baseUrl ?>/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= $baseUrl ?>/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="<?= $baseUrl ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= $baseUrl ?>/favicon-16x16.png" sizes="16x16">
    <meta name="application-name" content="Игорь Рыбаков">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?= $baseUrl ?>/mstile-144x144.png">
</head>
<body>
<?php $this->beginBody() ?>

<header class="header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <a href="<?= Url::home() ?>">
                    <img class="d-block mt-15" height="32" src="/img/logo.svg">
                </a>
            </div>
            <div class="col col-lg-9 d-none d-md-block">
                <nav class="nav">
                    <a class="nav-ln" href="<?= Url::home() ?>">Главная</a>
                    <a class="nav-ln<?= active('biografiya', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'biografiya']) ?>">Биография</a>
                    <a class="nav-ln<?= active('iniciativy', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'iniciativy']) ?>">Инициативы</a>
                    <a class="nav-ln<?= active('venchurnyy-fond', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'venchurnyy-fond']) ?>">Венчурный Фонд</a>
                    <a class="nav-ln<?= active('magazin', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'magazin']) ?>">Магазин</a>
                    <a class="nav-ln<?= active('knigi', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'knigi']) ?>">Книги</a>
                    <a class="nav-ln<?= active('kontakty', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'kontakty']) ?>">Контакты</a>
                </nav>
            </div>
            <div class="col-auto d-md-none">
                <a class="nav-toggle js-collapse" href="#nav-mobile"><i class="i-bars"></i></a>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="collapse d-md-none" id="nav-mobile">
        <div class="container">
            <nav class="navm">
                <a class="navm-ln" href="<?= Url::home() ?>">Главная</a>
                <a class="navm-ln<?= active('biografiya', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'biografiya']) ?>">Биография</a>
                <a class="navm-ln<?= active('iniciativy', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'iniciativy']) ?>">Инициативы</a>
                <a class="navm-ln<?= active('venchurnyy-fond', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'venchurnyy-fond']) ?>">Венчурный Фонд</a>
                <a class="navm-ln<?= active('magazin', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'magazin']) ?>">Магазин</a>
                <a class="navm-ln<?= active('knigi', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'knigi']) ?>">Книги</a>
                <a class="navm-ln<?= active('kontakty', $cAlias) ?>" href="<?= Url::to(['site/index', 'view'=>'kontakty']) ?>">Контакты</a>
            </nav>
        </div>
        <div class="divider"></div>
    </div>
</header>

<section class="content">

    <?= $content ?>

</section><!-- .content -->

<!-- MODALS -->
<div class="d-none">

    <!-- ПРЕДИСЛОВИЕ ОТ АВТОРА -->
    <div class="modal" id="intro">
        <p class="text f-oswald fw-500 em-23 em-sm-36">ПРЕДИСЛОВИЕ ОТ АВТОРА</p>
        <p class="text">
            Всю свою сознательную жизнь я меняюсь. В 1997 году я не такой, каким был в 1991-м, а в 2017-м не такой, каким был в 2005-м, и даже в 2014-м, когда только начал размышлять над этой книгой. Постоянна во мне лишь жажда изменений, жажда нового — потребность и готовность меняться, все время получать новые знания и навыки. Я хочу говорить сегодня о том, что меня интересует, в чем я вижу мощное присутствие новизны. И с этой точки зрения размышляю о своем жизненном опыте и 25 годах предпринимательской деятельности.
        </p>
        <p class="text">
            Глубоко убежден в том, что важны не внешние обстоятельства, а важно то, как я в них действую, как добиваюсь главного — достичь и сохранить то состояние ума, души и духа, которые мне необходимы. Меняются обстоятельства — меняется мой способ действовать, меняется актуально востребованный набор информации и представлений. Остается неизменным внутреннее состояние свободного осознанного творчества, состояние счастья.
        </p>
        <p class="text">
            Постоянные изменения — это то, чем я занимался в компании «ТехноНИКОЛЬ», и в книге вы найдете истории и уроки наших прорывов. На изменениях я сфокусирован и сегодня. Венчурные инвестиции и филантропия, публичные выступления и эта книга — это мой вклад в трансформацию предпринимательской и социальной среды в России и в мире.
        </p>
        <p class="text">
            Мир меняется невероятно быстро. Побеждает тот, кто быстрей адаптируется к произошедшим изменениям. Все, что предыдущее поколение могло сделать, но, имея все возможности, не сделало — делают молодые люди. Ярчайший пример — создатель Ethereum 23-летний Виталик Бутерин. Очень похоже на наше с партнером состояние в начале 90-х, когда мы были так же решительны и безудержны. Наверное, поэтому меня так привлекают эти яркие ребята. И я вкладываю силы, время и ресурсы в развитие глобального предпринимательства.
        </p>
    </div><!-- .modal -->

    <!-- ОТЗЫВЫ -->
    <div class="modal" id="review">
        <p class="text f-oswald fw-500 em-23 em-sm-36">ОТЗЫВЫ</p>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="block">
                    <div class="row">
                        <div class="col-auto">
                            <img class="re-img" width="100" height="100" src="img/re-1.jpg">
                        </div>
                        <div class="col">
                            <p class="text lh-15">Игорь Рыбаков глубоко погружен в проблемы и задачи филантропии и инвестиций с социальным эффектом. В его книге вы найдете источник вдохновения</p>
                            <p class="text em-13 fw-700">Рубен Варданян</p>
                            <p class="text em-9 gray">#99 - список Forbes;<br>предприниматель, импакт-инвестор и филантроп</p>
                        </div>
                    </div><!-- .row -->
                </div><!-- .block -->
            </div><!-- .col -->
            <div class="col-12 col-lg-6">
                <div class="block">
                    <div class="row">
                        <div class="col-auto">
                            <img class="re-img" width="100" height="100" src="img/re-2.jpg">
                        </div>
                        <div class="col">
                            <p class="text lh-15">Создатель уникальной компании глобального уровня Игорь Рыбаков делится в этой книге своим опытом. Стремящийся достичь успеха должен прочесть эту книгу</p>
                            <p class="text em-13 fw-700">Давид Ян</p>
                            <p class="text em-9 gray">серийный предприниматель;<br>основатель ABBYY</p>
                        </div>
                    </div><!-- .row -->
                </div><!-- .block -->
            </div><!-- .col -->
            <div class="col-12 col-lg-6">
                <div class="block">
                    <div class="row">
                        <div class="col-auto">
                            <img class="re-img" width="100" height="100" src="img/re-3.jpg">
                        </div>
                        <div class="col">
                            <p class="text lh-15">Очень сильные размышления об особенностях предпринимательского мировосприятия. Многие из них абсолютно не интуитивны и сильно отличаются от общепринятых представлений</p>
                            <p class="text em-13 fw-700">Оскар Хартманн</p>
                            <p class="text em-9 gray">лидер цифровизации мировой Экономики;<br>со-основатель Larix.vc, World Entrepreneur Leadership Foundation</p>
                        </div>
                    </div><!-- .row -->
                </div><!-- .block -->
            </div><!-- .col -->
            <div class="col-12 col-lg-6">
                <div class="block">
                    <div class="row">
                        <div class="col-auto">
                            <img class="re-img" width="100" height="100" src="img/re-4.jpg">
                        </div>
                        <div class="col">
                            <p class="text lh-15">Эта книга еще раз подтверждает: выпускники Физтеха обладают особым складом ума и способны подчинять мир новым законам, которые они же только что и открыли</p>
                            <p class="text em-13 fw-700">Александр Федотов</p>
                            <p class="text em-9 gray">владелец ACMG Group, Forbes Россия</p>
                        </div>
                    </div><!-- .row -->
                </div><!-- .block -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .modal -->

</div>
<!-- /MODALS -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>