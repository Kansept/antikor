<?php wp_footer(); ?>

</body>
<footer>
    <div class="container">
        <div class="row footer">
            <div class="col-md-3">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/logo-footer.png" alt="">
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled footer__menu">
                    <li><a href="" class="footer-menu__item">О компании</a></li>
                    <li><a href="" class="footer-menu__item">О компании</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled footer__list">
                    <li><a href="tel:78007008282" class="footer__phone">+7 (800) 700-82-82</a></li>
                    <li><strong>antikor.expert</strong></li>
                    <li>&copy; <?= date('Y') ?>. Все права защищены.</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled footer__list">
                    <li>antikor40</li>
                    <li>antikor40.ru</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__bottom"></div>
</footer>
</html>
