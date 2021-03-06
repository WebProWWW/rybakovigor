<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 15:33
 */

use frontend\widgets\SocWidget;

/**
 * @var $this \yii\web\View
 */
$this->title = ' - Биография';
$this->params['alias'] = 'biografiya';
?>
<div class="block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg order-2 order-lg-1">
                <div class="block">
                    <h1 class="page-title em-23 em-sm-36">
                        <span class="text-vcenter">ИГОРЬ РЫБАКОВ</span>
                        <span class="text-vcenter wsp-nowrap tbg-orange fw-300 em-6 px-15">ПУТЬ РАЗВИТИЯ</span>
                    </h1>
                </div><!-- .block -->
            </div><!-- .col -->
            <div class="col-auto ml-auto order-1 order-lg-2">
                <div class="block">
                    <?= SocWidget::widget(['data'=>$socArr]) ?>
                </div><!-- .block -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .block -->

<div class="d-flex flex-grow-1">
    <div class="owl-carousel fslider flex-grow-1 js-owl">
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-1.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">1972-1986</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">1972-1986</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">16 мая 1972 года в Магнитогорске в семье Рыбаковых родился сын Игорь – живой и непосредственный ребенок с пытливым умом. В 1978 году, пошел в школу с математическим уклоном, а в 1986 году заочно поступил в физико-техническую школу при МФТИ.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-2.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">1989</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">1989</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 1989 году окончил среднюю школу с углубленным изучением математики, параллельно с этим — заочную физико-техническую школу при МФТИ, а после поступил на факультет физической и квантовой электроники МФТИ.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-3.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">1991-1992</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">1991-1992</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">Организовал первый бизнес в 1991 году – продавал мороженое близ Белорусского вокзала. В 1992 году, будучи на третьем курсе института, совместно с однокурсником Сергеем Колесниковым занимались установкой и ремонтом кровли в Москве под заказ.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-4.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">1993</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">1993</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В начале 1993 года Игорь и Сергей придумывают название «ТехноНИКОЛЬ»  и регистрируют компанию, а уже в сентябре они отправляются в Башкирию за мембранными покрытиями, которые производило всего одно российское предприятие.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-5.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">1994</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">1994</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 1994 году производство было запущено, а все вырученные от продажи мембран средства предприниматели направили на покупку предприятия по выпуску кровельных и гидроизоляционных материалов (г. Выборг). Так появилось первое региональное подразделение «ТехноНИКОЛЬ».</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-6.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">1995-1996</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">1995-1996</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 1996 году окончил МФТИ по специальности инженер-физик. Институт стал важным этапом в жизни будущего миллиардера: здесь он не только обрел профессию, но также познакомился со своим бизнес-партнером Сергеем Колесниковым – соседом по комнате общежития, и встретил свою любовь – Екатерину. В компании принято решение о развитии собственной торговой сети. Открытие первого регионального торгового отделения в Санкт-Петербурге.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-7.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">1997</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">1997</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 1997 году предприятие «КРОМА» вошло в состав компании «ТехноНИКОЛЬ». Получение необходимых инвестиций на обновление устаревших производственных фондов позволило начать новый этап развития: в короткий срок провести модернизацию кровельного производства, установить передовое высокотехнологичное оборудование и начать выпуск современных кровельных материалов.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-8.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">1998</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">1998</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">Запуск завода «Технофлекс» - это современное предприятие полного цикла по выпуску гидроизоляционных и кровельных битумно-полимерных мембран. На тот момент завод «Технофлекс» был одним из самых современных в Европе предприятий по производству кровельных и гидроизоляционных материалов. Совокупные производственные мощности на данный момент составляют более 80 млн. кв.м. продукции в год. Продукция поставляется в более чем 30 стран мира.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-9.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">1999</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">1999</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В конце 1999 года  ООО "УСКК" - крупнейший производитель кровельных и гидроизоляционных материалов в России и основной экспортер кровельных материалов в страны Средней Азии вошел в структуры компании «ТехноНИКОЛЬ». В кратчайшие сроки были привлечены инвесторы, проведена реструктуризация завода и полная модернизация производства.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-10.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2000-2002</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2000-2002</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">С 2000 по 2002 год в компании принимают решение о расширении спектра продукции. Для освоения перспективного сегмента скатной кровли «ТехноНИКОЛЬ» приобретает первый зарубежный завод Gargzdu MIDA и запускает производство гибкой черепицы под маркой SHINGLAS. Под брендом ТЕХНО выходит серия теплоизоляционных материалов из каменной ваты. Налажен выпуск мастик. Идет активное расширение торговой сети.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-1.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2003</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2003</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2003 году число подразделений компании «ТехноНИКОЛЬ» в России достигло 50 предприятий. Корпорация  входит в пятерку крупнейших европейских производителей гидроизоляционных материалов.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-2.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2004</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2004</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2004 году филиалы корпорации были открыты во всех странах СНГ. В ассортименте продуктов компании появляется композитная черепица Luxard, производство которой впервые освоено в России. В этом году «ТехноНИКОЛЬ» открывает завод по производству битумных материалов в г. Днепродзержинске. Новые современные материалы разрабатываются и тестируется в открытом в 2004 собственном Научном центре «ТехноНИКОЛЬ»</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-3.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2005</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2005</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2005 году – Компания «ТехноНИКОЛЬ»  вышла на первое место в ЕС по производству мембранных панелей для кровли.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-4.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2006</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2006</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2006  году «ТехноНИКОЛЬ» начинает производство экструзионного пенополистирола под маркой Техноплекс. Запущено два завода общей мощностью 600 тысяч кубических метров в год. Корпорация активно наращивает мощности по производству теплоизоляционных материалов, способствуя повышению энергоэффективности строительного комплекса.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-5.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2007</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2007</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2007 году в состав Корпорации входит крупнейший на территории Дальнего Востока и Сибири производитель теплоизоляционных строительных материалов на основе каменной ваты завод «Базалит-ДВ». В октябре 2007 года в городе Заинске начинает работать «Завод ТЕХНО», построенный в республике Татарстан с целью удовлетворения потребительского спроса и предоставления инновационных решений для повышения качества строительства.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-6.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2008</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2008</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2008 году в городе Юрга Кемеровской области запущен в эксплуатацию построенный с «нулевого цикла» филиал производства каменной ваты «Завода ТЕХНОНИКОЛЬ-Сибирь». Благодаря успешной реализации инвестиционных проектов в период с 2006 по 2008 год компания «ТехноНИКОЛЬ»  входит в тройку российских лидеров рынка теплоизоляционных материалов. В феврале 2008 года компанией  построен и запущен первый в России завод полного цикла по выпуску полимерных мембран LOGICROOF</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-7.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2009-2012</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2009-2012</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2010 корпорация становится одним из крупнейших производителей и поставщиков гидро -, тепло- и звукоизоляции. В состав Корпорации входят 35 заводов в России, Беларуси, Литве и Чехии, собственная торговая сеть из 140 отделений и представительства в 33 странах. С 2011-2012 корпорация активно наращивает производственные мощности. Завод «ТехноНИКОЛЬ» в г. Днепродзержинске запустил новую линию по производству экструзионного пенополистирола. В Новоульяновске началось производство XPS CARBON.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-8.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2013</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2013</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2013 году «ТехноНИКОЛЬ» покупает итальянский завод строительных материалов Italiana Membrane. В Рязани запущен второй завод по производству гибкой черепицы SHINGLAS. В этом же году «ТехноНИКОЛЬ» стала победителем рейтинга DIY Advice Russia TOP в номинации «Теплоизоляционные материалы». На Всероссийском конгрессе динамично развивающихся компаний среднего бизнеса «Газели» Медиахолдинга «Эксперт» получила награду «За инновационный рост». В 2013 году компания получила премию «Полимеры России».</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-9.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2014</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2014</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2014 году компания ТЕХНОНИКОЛЬ заняла 81 место в ТОП-200 крупнейших публичных и непубличных компаний России по версии Forbes, став первой среди компаний-производителей, не связанных с сырьевым сектором. В Рязани начато строительство линии по производству новых для России теплоизоляционных материалов из жесткого пенополиизоцианурата – PIR и линии по производству минераловатных субстратов мощностью более 200000 м3 в год.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-10.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2015</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2015</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2015 году Игорь решил  отойти от оперативного управления компанией «ТехноНИКОЛЬ» и совместно с женой учредил «Институт ускорения экономического развития «Рыбаков Фонд». Капитал фонда — 1 млрд рублей, он разрабатывает и внедряет программы развития предпринимательских сообществ и поддержки молодых талантов в сфере экономики и инноваций.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-1.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2016</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2016</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2016 году «Рыбаков Фонд» вошел в ТОП-9 частных благотворитльных фондов России. Цель Фонда - реализовать огромный потенциал российского общества и российской экономики - задача, которую можно решить, лишь опираясь на лучшие качества граждан. Российское общество, как и российская экономика, обладает огромным потенциалом. Программы «Рыбаков Фонда» помогают россиянам эффективней работать и учиться друг у друга, создают новые каналы для их общения и сотрудничества.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-2.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2017</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2017</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">Параллельно активной благотворительной деятельности в 2017 году Игорь Рыбаков начинает инвестировать в инновационные проекты. В августе 2017 года совместно с Оскаром Хартманном запустил международный венчурный фонд Larix. Объем средств под управлением фонда составляет 100 млн долларов США. Larix уже проинвестировал в 15 проектов в 8 странах. Покупка 25% акций электронного научного архива «КиберЛенинка» за 30 млн. рублей. В 2017 году вышла книга «Жажда»</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
        <div class="fslider-item">
            <img class="fslider-img" src="/img/res-3.jpg">
            <div class="fslider-center">
                <p class="text text-center f-oswald em-34">2018</p>
                <span class="fslider-btn"><i class="i-arr-r"></i></span>
            </div><!-- .fslider-center -->
            <div class="fslider-cont">
                <p class="text f-oswald fw-400 em-34">2018</p>
                <p class="text lh-15 em-11 my-auto pt-15 flow-hidden">В 2018 года у м. «Курская» открылся «смарт-офис» компании SOK, работающий по принципу коворкинга. Соинвестором проекта стал Игорь Рыбаков, вложения в сеть SOK составили порядлка - 1,2 млрд руб. В апреле 2018 года израильский бизнес-интегратор Prytek вышел на российский рынок с намерением инвестировать в местные стартапы со средним чеком до $2 млн и продвигать их за рубежом. Ключевым российским партнером Prytek стал Игорь Рыбаков. Prytek уже проинвестировал более 100 млн долларов в 35 проектов. Запуск проекта «Русский Воск». В 2018 году миллиардер занял 84-е место в рейтинге Forbes с состоянием 1,11 млрд долл.</p>
            </div><!-- .fslider-cont -->
        </div><!-- .fslider-item -->
    </div>
</div>