<?php
/**
 * Template Name: Кейсы
 */

get_header();
?>

<section class="cases-archive">
	<div class="container">
		<h1 class="title">
			Кейсы
		</h1>
		<p class="sub-title">
			Сервис для решения любых финансовых вопросов
		</p>
		<div class="cases-archive__wrapper row">
			<?php $args = array(
			'post_type' => 'cases',
			);
			$query = new WP_Query($args);
			$coordinates = array();
			if ($query->have_posts()) :
			  while ($query->have_posts()) : $query->the_post(); ?>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="cases__item">
					<div class="cases-top">
						<div class="cases__img">
							<?php the_post_thumbnail('',array('class' => 'img-responsive')); ?>
						</div>
						<div class="cases-top__title">
							<h3>
								<?php the_title(); ?>
							</h3>
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
					<a href="<?php the_permalink();?>" class="btn-default">Подробнее</a>
				</div>
			</div>
			<?php  endwhile;
			endif; ?>
			<?php  wp_reset_postdata();?>
		</div>
		<!-- <div class="text-center mt-20">
			<a href="#" class="btn-default">Еще кейсы</a>
		</div> -->
	</div>	
</section>

<?php
get_footer();
