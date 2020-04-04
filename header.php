<?php
/**
 * The header for our theme
 */

?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--  заглушка -->
  <meta property="og:image" content="<?php bloginfo('template_url')?>/assets/img/zaglushka.jpg" />
  <link rel="image_src" href="<?php bloginfo('template_url')?>/assets/img/zaglushka.jpg">

  <?php wp_head(); ?>
</head>

<body>

 <!--  <div class="preloader" id="preloader">
    <div class="preloader__wrapper">
      <div class="loader loader-left"></div>
      <div class="loader loader-right"></div>
    </div>
  </div> -->
  
  <header class="header" id="header">   
    <div class="header-top">
      <div class="container header-top__wrapper">
        <div class="mob-burger" id="mob-burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a href="<?php echo home_url(); ?>" class="logo">
          <img src="<?php bloginfo('template_url')?>/assets/img/logo.svg" alt="">
        </a>
        <div class="header-cities header-cities_desc">
          <a href="#city-popup" class="header-cities__link popup">Челябинск</a>
        </div>

        <a href="tel:<?php the_field('phone', 'option');?>" class="phone header__phone header__phone_desc">
          <span><?php the_field('phone', 'option');?></span>
        </a>
      </div>
    </div>
    <div class="header__bottom">
      <div class="container">
        <div class="header-menu__wrapper">
          <div class="header-cities header-cities_mob">
            <a href="#city-popup" class="header-cities__link popup">Челябинск</a>
          </div>
          <nav class="header-menu">
            <?php
              wp_nav_menu( array(
                  'theme_location'  => 'main-menu',
                  'menu_id'         => '',
                  'menu_class'      => '', 
                  'container'       => 'ul',
              ) );
            ?>
          </nav>
          <div class="phone-mob">
            <a href="tel:<?php the_field('phone', 'option');?>" class="phone">
              <?php the_field('phone', 'option');?>
            </a>
            <p>
              Звонок по России бесплатный
            </p>
          </div>
          <div class="social">
            <a href="<?php the_field('soc-vk', 'option');?>" target="_blank" class="social__item social__vk"></a>
            <a href="<?php the_field('soc-ins', 'option');?>" target="_blank" class="social__item social__inst"></a>
          </div>
        </div>
      </div>
    </div>
  </header>

  


