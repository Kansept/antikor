<?php wp_footer(); ?>

</body>

<div class="modal" tabindex="-1" id="questionModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php $menu = wp_get_nav_menu_items('MainMenu'); ?>
<footer>
    <div class="container">
        <div class="row footer">
            <div class="col-md-3">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/logo-footer.png" alt="">
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled footer__menu">
                    <?php foreach($menu as $menuItem): ?>
                        <li><a href="<?= $menuItem->url ?>" class="footer-menu__item"><?= $menuItem->title ?></a></li>
                    <?php endforeach ?>
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
