<?php
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?> 
<section class="page-regular">
	<div class="container">
		<h1 class="page-regular__title">
			<?php the_title(); ?>
		</h1>
		<div class="page-regular__wrapper">
			<?php the_content(); ?>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php  wp_reset_postdata();?>
<?php
get_footer();
