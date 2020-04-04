<?php
/**
 * Template Name: Вопрос - ответ
 */

get_header();
?>

<section class="banner banner-question">
	<div class="container banner__wrapper">
		<img class="banner__img_desc" src="<?php bloginfo('template_url')?>/assets/img/banner-question.png" alt="#">
		<div class="phone-form">
			<h1 class="title">
				Вопросы и ответы
			</h1>
			<p class="phone-form__text">
				Сервис для решения любых финансовых вопросов
			</p>

			<form class="banner-form" role="search" method="get" id="searchform" action="#">
				<img class="banner__img_mob" src="<?php bloginfo('template_url')?>/assets/img/banner-question.png" alt="#">
				<div class="search-form ajax-search">
					<input type="text" placeholder="Поиск" value="" name="s" id="s">
					<button class="search-submit"><i class="search-icon"></i></button>
					<ul class="ajax-search__list scrollbar">
						<li class="selectCity__item">Вопрос 1</li>
						<li class="selectCity__item">Вопрос 2</li>
						<li class="selectCity__item">Вопрос 3</li>
						<li class="selectCity__item">Вопрос 4</li>
					</ul>
				</div>

			</form>

		</div>
	</div>
</section>

<section class="question">
	<div class="container">
		<div class="tab-title">
			Раздел:
		</div>		
		<div class="tab mb-20">
			<div class="tab__wrapper">
				<div class="tab__item">
					<a href="#" data-tab="1" class="active">
						Льготный период
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="2">
						Без комиссий
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="3">
						Без обяза
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="3">
						Льготный период
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="3">
						Без комиссий
					</a>
				</div>
			</div>
		</div>
	
		<div class="tab-title"> 
			Сортировка:
		</div>		
		<div class="tab mb-30">
			<div class="tab__wrapper">
				<div class="tab__item">
					<a href="#" data-tab="1" class="active">
						Все
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="2">
						Новые
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="3">
						Топ
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-lg-8">
				<div class="question__wrapper">
				<?php $args = array(
				'post_type' => 'post',
				);
				$query = new WP_Query($args);
				$coordinates = array();
				if ($query->have_posts()) :
				  while ($query->have_posts()) : $query->the_post(); ?>
					<?php $questions = get_field('questions');
					?>
					<div class="question__item">
						<div class="question__top">
							<div class="question__img">
								<?php the_post_thumbnail(); ?>
							</div>
							<h2 class="question__text">
								<?php the_title(); ?>
							</h2>
							<div class="question__comment">
								<?php echo count($questions); ?> ответ
							</div>
							<div class="question__views">
								<?php echo get_post_meta ($post->ID,'views',true); ?>
							</div>
						</div>

						<div class="question__bottom">
							<div class="expert">
								<div class="expert__img">
									<img src="<?php echo $questions['0']['question_img']; ?>" alt="#">
								</div>
								<div class="expert__name">
									<?php echo $questions['0']['question_name']; ?><br>
									<span><?php echo $questions['0']['question_position']; ?></span>
								</div>
							</div>
							<div class="data">
								<?php the_time('d.m.Y'); ?>
							</div>
							<p class="question__description">
								<?php echo $questions['0']['question_content']; ?>
							</p>
							<a href="<?php the_permalink();?>" class="question__link">
								Читать
							</a>
						</div>

					</div>

				<?php  endwhile;
				endif; ?>
				<?php  wp_reset_postdata();?>

				</div>
				<!-- <a href="#" class="btn-default">Еще ответы</a> -->

				<div class="ask-form mt-50 mb-50">
					<div class="ask-form__wrapper">
							<div class="ask-form__left">
								<h3 class="ask-form__title">
									У вас есть вопросы?
								</h3>
								<p class="ask-form__sub-title">
									Наши эксперты обязательно ответят вам!
								</p>
							</div>
							<div class="ask-form__right">
								<div class="form">
								<textarea name="" id=""  class="textarea mb-10" placeholder="Задать вопрос..."></textarea>
								<div class="ask-form__btn">
									<button class="btn btn_hover btn-more uppercase">
										Задать вопрос
									</button>
								</div>
								</div>
							</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 widget">
				<div class="widget__wrapper">
					<div class="widget__item">
						<div class="widget-rating">
							<h3 class="widget-rating__title">
								 Узнай свой<br> кредитный рейтинг бесплатно
							</h3>
							<p class="widget-rating__sub-title">
								а мы подберем лучшие предложения согласно результатам.
							</p>

							<div class="widget-rating__info">
								<div class="grafik text-center mb-20">
									<img src="<?php bloginfo('template_url')?>/assets/img/grafik.png" alt="">
								</div>
								<p class="text-center">
									Ваш кредитный рейтинг: 
									<span>Нужно уточнить</span>
								</p>
							</div>

							<a href="" class="btn btn_hover btn-more">Узнать бесплатно</a>
						</div>
					</div>

					<div class="widget__item">
						<a href="" class="widget-banner">
							<img src="<?php bloginfo('template_url')?>/assets/img/widget-banner.jpg" alt="">
						</a>
					</div>
				</div>
			</div> 

		</div>
	</div>
</section>

<?php
get_footer();
