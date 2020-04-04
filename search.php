<?php
get_header();
?>

<section class="main">
    <div class="container">
      <!-- Main news -->
      <div class="row"> 
        <div class="left-column col-12 col-lg-2">
          <h1 class="h1">
            Результаты поиска
          </h1>
          <!-- <p class="search-widget">
            По запросу<br><b>«соревнования ветеранов»</b> найдено <span>20</span> совпадений
          </p> -->
        </div>

        <div class="search__wrapper col-12 col-lg-10">
          <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="search__item">
            <h2 class="search__title">
              <?php the_title(); ?>
            </h2>
            <p class="search__text">
               <?php the_excerpt(); ?>
            </p>
          </a>
         <?php }} else {; ?>
              <p>
                Извините по Вашему результату ничего не найдено
              </p>
          <?php };?> 
    
        </div>         
      </div>
      <!-- End Main news -->
    </div>
  </section>

<?php
get_footer();
