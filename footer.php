<?php
/**
 * The template for displaying the footer
 */

?>

  <footer class="footer" id="footer">
    <div class="footer-top">
      <div class="container footer-top__wrapper">
        <nav class="footer-menu">
          <?php
            wp_nav_menu( array(
                'theme_location'  => 'sub-menu',
                'menu_id'         => '',
                'menu_class'      => '', 
                'container'       => 'ul',
            ) );
          ?>
        </nav>
        <div class="footer__phone">
          <a href="tel:<?php the_field('phone', 'option');?>" class="phone">
            <?php the_field('phone', 'option');?>
          </a>
          <p>
            Звонок по России бесплатный
          </p>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container footer-bottom__wrapper">
        <p class="copyright">
          © 2020 ООО «Lenders»
        </p>
        <a href="/privacy-policy" target="_blank" class="politics">
          Политика конфиденциальности
        </a>
        <div class="social">
          <a href="<?php the_field('soc-vk', 'option');?>" target="_blank" class="social__item social__vk"></a>
          <a href="<?php the_field('soc-ins', 'option');?>" target="_blank" class="social__item social__inst"></a>
        </div>
      </div>
    </div>
  </footer>
  
  <div class="popup-modal mfp-hide city-popup text-center" tabindex="-1" id="city-popup">
    <div class="close close-popup"></div>
    <div class="popup-modal__content">
      <div class="selectCity__wrapper">
        <div class="selectCity__input">
          <input type="text" placeholder="| Введите город" id="inputCity">
        </div>
        <ul class="selectCity__list scrollbar" id="city-list">
          <li class="selectCity__item" data-city="Москва" data-region="Московская область">Москва ( Московская область )</li>
          <li class="selectCity__item" data-city="Санкт-Петербург" data-region="Ленинградская область">Санкт-Петербург ( Ленинградская область )</li>
          <li class="selectCity__item" data-city="Новосибирск" data-region="Новосибирская область">Новосибирск ( Новосибирская область )</li>
          <li class="selectCity__item" data-city="Екатеринбург" data-region="Свердловская область">Екатеринбург ( Свердловская область )</li>
          <li class="selectCity__item" data-city="Нижний Новгород" data-region="Нижегородская область">Нижний Новгород ( Нижегородская область )</li>
          <li class="selectCity__item" data-city="Казань" data-region="Татарстан">Казань ( Татарстан )</li>
          <li class="selectCity__item" data-city="Челябинск" data-region="Челябинская область">Челябинск ( Челябинская область )</li>
          <li class="selectCity__item" data-city="Омск" data-region="Омская область">Омск ( Омская область )</li>
          <li class="selectCity__item" data-city="Самара" data-region="Самарская область">Самара ( Самарская область )</li>
          <li class="selectCity__item" data-city="Ростов-на-Дону" data-region="Ростовская область">Ростов-на-Дону ( Ростовская область )</li>
        </ul>
      </div>
    </div>
  </div>

<?php wp_footer(); ?>
</body>
</html>
