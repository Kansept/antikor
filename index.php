<?php get_header(); ?>

<section class="hero-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="hero-banner__text">
                    Профессиональная антикоррозионная обработка и напыляемая шумоизоляция
                </div>
                <button type="button" class="btn btn-main my-5" data-toggle="modal" data-target="#questionModal">Задать вопрос</button>
            </div>
        </div>
    </div>
</section>

<div class="section-promo__top-bg"></div>
<section class="section-promo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Акции</h2>
            </div>
        </div>
        <div class="row promo-item__list">
            <div class="col-md-6">
                <div class="promo-item promo-item--fill">
                    <div class="promo-item-bg" style="background: url(<?= get_template_directory_uri() ?>/images/promo/dimitrol.png);"></div>
                    <div class="promo-item__wrap">
                        <div class="promo-item__text">ПРИХОДИ С ДРУГОМ — ПОЛУЧИ СКИДКУ НА ДИМИТРОЛ</div>
                        <a href="/" class="promo-item__more"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="promo-item promo-item--half">
                    <div class="promo-item-bg" style="background: url(<?= get_template_directory_uri() ?>/images/promo/calendar.png);"></div>
                    <div class="promo-item__wrap">
                        <div class="promo-item__text">Скидка каждую   среду — 5%</div>
                        <a href="/" class="promo-item__more"></a>
                    </div>
                </div>
                <div class="promo-item promo-item--half">
                    <div class="promo-item-bg" style="background: url(<?= get_template_directory_uri() ?>/images/promo/sale-line.png);"></div>
                    <div class="promo-item__wrap">
                        <div class="promo-item__text">ЧЕРНАЯ ПЯТНИЦА</div>
                        <a href="/" class="promo-item__more"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Новости</h2>
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?= get_stylesheet_directory_uri() ?>/images/demo/news1.png" class="img-fluid" alt="" loading="lazy">
                    </div>
                    <div class="col-md-10">
                        <div class="home-news__desc">
                            <div class="row">
                                <div class="col-md-10 pb-5">
                                    Пройдена очередная сертификация наших антикор-центров на соответствие качества услуг по антикоррозионной обработке автомобилей 
                                    и уровню сервисного обслуживания клиентов.
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col"><span class="home-news__date">13.01.2021 15:00</span></div>
                                <div class="col text-right"><a href="#" class="home-news__more">&#8594;</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
