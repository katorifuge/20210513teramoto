<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <title>Estra,inc.MEDIA</title>
  <?php wp_head(); ?>
</head>

<body<?php body_class(); ?>>
  <!------- header ------->
  <header class="header">
    <div class="header-article">
      <div class="header__img">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png"></a>
      </div>
      <nav class="header__nav pc">
        <ul>
          <li><a href="<?php echo get_category_link(17); ?>">HTML</a></li>
          <li><a href="<?php echo get_category_link(13); ?>">CSS</a></li>
          <li><a href="<?php echo get_category_link(16); ?>">JavaScript</a></li>
          <li><a href="<?php echo get_category_link(15); ?>">PHP</a></li>
          <li><a href="<?php echo get_category_link(14); ?>">MySQL</a></li>
        </ul>
      </nav>
    </div>
  </header>