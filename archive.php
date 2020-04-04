<?php
/**
 * Template Name: Архив записей
 */
?>
<?php
get_header(); ?>


  <div class="container breadcrumb">
    <div class="row">
      <div class="col-12 offset-lg-2 col-lg-10">
          <ul class="breadcrumb__wrapper">
              <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>">Главная</a></li>
              <li class="breadcrumb__item active">Новости</li>
          </ul>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/main-news'); ?>

  <section class="archive-news">
    <div class="container">
      <div class="row"> 
        <div class="left-column col-12 col-lg-2">
          <h2 class="h2 title">
            Архив новостей
          </h2> 
        </div>
        <div class="col-12 col-lg-10">
          <div class="row">

          <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
            <div class="col-6">
              <a href="<?php the_permalink(); ?>" class="archive-news__item">
                <div class="archive-news__img">
                  <?php the_post_thumbnail('archive_thumb'); ?>
                </div>
                <div class="archive-news__description">
                  <p class="archive-news__text">
                    <?php the_title(); ?>
                  </p>
                  <p class="archive-news__date">
                    <?php the_time('d.m.Y'); ?>
                  </p>
                </div>
              </a>
            </div>
          <?php }} ; ?>  


            <!-- <div class="col-12 text-center">
              <a href="#" class="btn show-more archive-news__btn">
                Показать ещё
              </a>
            </div> -->
                 
          </div>
        </div>         
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/partners'); ?>

<?php
get_footer();
