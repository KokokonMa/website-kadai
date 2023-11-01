<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php chiro_schema_type(); ?>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ress.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;500;600;700&family=Noto+Sans+JP:wght@400;500;600;700&family=Shippori+Mincho:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Document</title>
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <!--ここからheader-->
  <header id="about-header">
    <div class="header-wrapper">
      
      <h1 class="header-logo">
        <a href="<?php echo home_url();?>/chiro/"><img src="<?php echo get_template_directory_uri();?>/img/samuraiseitaiin.png" alt=""></a>
      </h1>
      
      <?php wp_nav_menu( array(
  'theme_location'  => 'main-menu', /*メニュー名 register_nav_menus arrayの前半 */
  'menu'            => '',
  'menu_class'      => 'header-title-wrapper',  /*ulにつくクラス */
  'menu_id'         => '',  /*ulにつくid */
  'container'       => 'ul',
  'container_class' => '',
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'echo'            => true,
  'depth'           => 0,
  'walker'          => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
));  ?>

    </div>

    <!--ハンバーガーメニュー-->
    <div class="ham-wrap-wrap">
      <div class="ham-wrap">
        
        <button class="hamburger-menu" id="js-hamburger-menu">
          <span class="hamburger-menu__bar"></span>
          <span class="hamburger-menu__bar"></span>
          <span class="hamburger-menu__bar"></span>
        </button>
      </div>  
        <nav class="navigation">
          <h1 class="ham-burger-menu">
            <img src="<?php echo get_template_directory_uri();?>/img/samuraiseitaiin.png" alt="">
          </h1>
      
<div class="ham-menu">メニュー</div>
            
            <?php wp_nav_menu( array(
  'theme_location'  => 'main-menu', /*メニュー名 register_nav_menus arrayの前半 */
  'menu'            => '',
  'menu_class'      => 'navigation__list',  /*ulにつくクラス */
  'menu_id'         => '',  /*ulにつくid */
  'container'       => 'ul',
  'container_class' => '',
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'echo'            => true,
  'depth'           => 0,
  'walker'          => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
));  ?>


        </nav>   
    </div>
    <!--ハンバーガーメニュー終わり-->

  <!--ここからfv-->
  </header>