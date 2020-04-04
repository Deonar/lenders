<?php
/**
 * The template for displaying 404 pages (not found)
 */

?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<section class="page-404">
	<div class="container">
		<a href="<?php echo home_url(); ?>" class="page-404__logo">
			<img src="<?php bloginfo('template_url')?>/assets/img/logo.svg" alt="">
		</a>
		<div class="page-404__body">
			<h1 class="page-404__title">
				404
			</h1>
			<div class="page-404__info">
				<p>
					Запрашиваемая страница не существует
				</p>
				<div class="page-404__btn">
					<a href="<?php echo home_url(); ?>" class="btn btn_hover btn-accent">
						Вернуться на сайт
					</a>
				</div>
			</div>
		</div>

	</div>
</section>

<?php wp_footer(); ?>
</body>
</html>

