<?php
/**
 * The template for displaying all single posts
 *
 */
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?> 

<div class="breadcrumb d-none d-md-block">
	<div class="container">
        <ul class="breadcrumb__wrapper">
            <li class="breadcrumb__item"><a href="/<?php echo get_page_uri( 21 ); ?>">Кейсы</a></li>
            <li class="breadcrumb__item active"><?php the_title(); ?></li>
        </ul>
    </div>
</div>

<div class="breadcrumb-mob d-block d-md-none">
	<div class="container">
		<a href="/<?php echo get_page_uri( 21 ); ?>" class="breadcrumb-mob__link">
			Вернуться к кейсам
		</a>
	</div>
</div>

<section class="cases-single">
	<div class="container">
		<div class="cases-single__wrapper">
			<h1 class="cases-single__title title">
				<?php the_title(); ?>
			</h1>
			<div class="cases-single__meta meta">
				<div class="views">
					<?php echo get_post_meta ($post->ID,'views',true); ?>
				</div>
				<div class="data">
					<?php the_time('d.m.Y'); ?>
				</div>
			</div>
			<div class="cases-top">
				<div class="cases__img">
					<?php the_post_thumbnail('',array('class' => 'img-responsive')); ?>
				</div>
				<div class="cases-top__title">
					<span><?php the_field('cases_name');?></span>
				</div>
			</div>
			<div class="cases__text">
				<span>
					Цель
				</span>
				<p>
					<?php the_field('cases_target');?>
				</p>
			</div>
			<div class="cases__text">
				<span>
					Скрок получения
				</span>
				<p>
					<?php the_field('cases_term');?>
				</p>
			</div>
				
			<div class="cases__description">
				<?php the_content(); ?>
			</div>
			
			<div class="cases__text">
				<span>
					Итог:
				</span>
				<p>
					<?php the_field('cases_total');?>
				</p>
			</div>
			<img src="<?php the_field('cases_img');?>" alt="">
		</div>
	</div>	
</section>

<?php endwhile; ?>
<?php
get_footer();