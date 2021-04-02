<?php get_header(); ?>

<section class="section-promo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Акции</h2>
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
