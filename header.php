<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= wp_title() ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body>

<?php $menu = wp_get_nav_menu_items('MainMenu'); ?>

<nav class="navbar navbar-expand-lg navbar-dark nav-top">
  <div class="container">
    <div class="row w-100 align-items-center">
      <div class="col-md-6">
        <div class="d-flex align-items-center">
          <a class="navbar-brand mr-5" href="#">
              <img src="<?= get_stylesheet_directory_uri() ?>/images/logo-header.png" alt="">
          </a>
          <div>Калуга</div>
          <div>
            <ul class="nav-top__phone-list my-auto">
                <li><a href="#">+7 (4842) 200-185</a></li>
                <li><a href="#" class="text-orange">+7 (800) 700-82-82</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" 
              aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 navbar-nav-top">
              <?php foreach ($menu as $menuItem): ?>
                <li class="nav-item active">
                  <a class="nav-link" href="<?= $menuItem->url ?>"><?= $menuItem->title ?></a>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
      </div>
    </div>
  </div>
</nav>