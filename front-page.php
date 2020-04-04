<?php
/*
Template Name: Home
*/
?>
<?php
get_header(); ?>
	
<section class="main-slider">
	<div class="main-slider__item">
		<div class="container">
			<div class="main-slider__description">
				<h2 class="main-slider__title">
		  		Все кредитные организации<br> в одном месте
			  	</h2>
			  	<p class="main-slider__sub-title">
			  		Подбери лучшее кредитное предложение на рынке!
			  	</p>
			</div>
			<div class="main-slider__img">
				<img src="<?php bloginfo('template_url')?>/assets/img/main-slider.png" alt="#">
			</div>
		</div>
	</div>
	<div class="main-slider__item">
		<div class="container">
			<div class="main-slider__description">
				<h2 class="main-slider__title">
		  		Все кредитные организации<br> в одном месте
			  	</h2>
			  	<p class="main-slider__sub-title">
			  		Подбери лучшее кредитное предложение на рынке!
			  	</p>
			</div>
			<div class="main-slider__img">
				<img src="<?php bloginfo('template_url')?>/assets/img/main-slider.png" alt="#">
			</div>
		</div>
	</div>
	<div class="main-slider__item">
		<div class="container">
			<div class="main-slider__description">
				<h2 class="main-slider__title">
		  		Все кредитные организации<br> в одном месте
			  	</h2>
			  	<p class="main-slider__sub-title">
			  		Подбери лучшее кредитное предложение на рынке!
			  	</p>
			</div>
			<div class="main-slider__img">
				<img src="<?php bloginfo('template_url')?>/assets/img/main-slider.png" alt="#">
			</div>
		</div>
	</div>
</section>

<div class="partners">
	<div class="container">
		<div class="partners__wrapper" id="partners-slide">
			<div class="partners__item">
				<a href="#">
					<img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/img/partners/partner1.png" alt="server">
				</a>
			</div>
			<div class="partners__item">
				<a href="#">
					<img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/img/partners/partner2.png" alt="server">
				</a>
			</div>
			<div class="partners__item">
				<a href="#">
					<img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/img/partners/partner3.png" alt="server">
				</a>
			</div>
			<div class="partners__item">
				<a href="#">
					<img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/img/partners/partner4.png" alt="server">
				</a>
			</div>
			<div class="partners__item">
				<a href="#">
					<img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/img/partners/partner5.png" alt="server">
				</a>
			</div>
			<div class="partners__item">
				<a href="#">
					<img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/img/partners/partner6.png" alt="server">
				</a>
			</div>
			<div class="partners__item">
				<a href="#">
					<img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/img/partners/partner7.png" alt="server">
				</a>
			</div>
		</div>
	</div>
</div>

<div class="exchange">
	<div class="container">
		<div class="exchange__wrapper" id="exchange">
			<?php $curs = getPaperStatus();

			foreach ( $curs as $item  ) {  ?>
				<div class="exchange__item">
					<?php echo $item->name; ?> <span class=" <?php echo ($item->isMore) ? 'exchange__up' : 'exchange__down'?>"><?php echo $item->new_value; ?></span>
				</div>		
			<?php } ?>

		</div>
	</div>
</div>

<section class="offer">
	<div class="container">
		<h2 class="title">
			Лучшие предложения
		</h2>
		
		<div class="offer__tabs tab">
			<div class="tab__wrapper">
				<div class="tab__item">
					<a href="#" data-tab="1" class="active">
						Микрозаймы
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="2">
						Кредитные карты
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="3">
						Дебетовые карты
					</a>
				</div>
			</div>
		</div>

		<div class="offer__wrapper active" data-tab="1">
			<div class="offer-slider" >
				<?php $args = array(
				'post_type' => 'microloan',
				);
				$query = new WP_Query($args);
				$coordinates = array();
				if ($query->have_posts()) :
				  while ($query->have_posts()) : $query->the_post(); ?>
				<div class="offer__item">
					<div class="offer-card">
						<div class="offer-card__top">
							<div class="offer-card__logo">
								<img src="<?php the_field('bank-logo');?>" alt="#">
							</div>
							<div class="offer-card__rating card-rating">
								<div class="card-rating-icon">
									<?php
										$icons = get_field('icons');
										if( $icons ): 
										foreach( $icons as $icon ):
										switch ($icon) {
										    case '1':
										        echo "<span class=\"card-rating-icon_fire\"></span>";
										        break;
										    case '2':
										        echo "<span class=\"card-rating-icon_crown\"></span>";
										        break;
										}
										endforeach;
										endif; ?>
								</div>
								<div class="card-rating-number">
									<?php the_field('rating');?>
								</div>
							</div>
						</div>

						<div  class="offer-card__text">
							<?php
							$percent = get_field('percent');
							if( $percent ): ?>
								<span>
									Ставка
								</span>
								<p class="range range-percent">
									<span><?php echo $percent['percent_number']; ?></span> <span></span> %
								</p>
							<?php endif; ?>
						</div>

						<div class="offer-card__text">
							<?php
							$sum = get_field('sum');
							if( $sum ): ?>
							<span>
								Сумма
							</span>
							<p class="range range-limit">
								<span><?php echo $sum['sum_from'];?></span> - <span><?php echo $sum['sum_to'];?></span> ₽
							</p>
							<?php endif; ?>
						</div>

						<div class="offer-card__text">
							<?php
							$term = get_field('term');
							if( $term ): ?>
							<span>
								Скрок
							</span>
							<p class="range range-day">
								<span><?php echo $term['term_from'];?></span> - <span><?php echo $term['term_to'];?></span> дня
							</p>
							<?php endif; ?>
						</div>

						<a href="<?php the_permalink();?>" class="btn btn_hover btn-more">
					 		Подробнее
					 	</a>
						<p class="offer-card__bottom text-center">
							Без % На долгий срок Лучшее предложение
						</p>
					</div>
				</div>
				<?php  endwhile;
				endif; ?>
				<?php  wp_reset_postdata();?>
			</div>
			<div class="offer__btn">
				<a href="/<?php echo get_page_uri( 13 ); ?>" class="btn offer-link btn_hover">
					Подбор микрозаймов
				</a>
			</div>
		</div>

		<div class="offer__wrapper" data-tab="2">
			<div class="offer-slider" >

				<?php $args = array(
				'post_type' => 'credit',
				);
				$query = new WP_Query($args);
				$coordinates = array();
				if ($query->have_posts()) :
				  while ($query->have_posts()) : $query->the_post(); ?>
				<div class="offer__item">
					<div class="offer-card">
						<div class="offer-card__top">
							<div class="offer-card__logo">
								<img src="<?php the_field('bank-logo');?>" alt="#">
							</div>
							<div class="offer-card__rating card-rating">
								<div class="card-rating-icon">
									<?php
										$icons = get_field('icons');
										if( $icons ): 
										foreach( $icons as $icon ):
										switch ($icon) {
										    case '1':
										        echo "<span class=\"card-rating-icon_fire\"></span>";
										        break;
										    case '2':
										        echo "<span class=\"card-rating-icon_crown\"></span>";
										        break;
										}
										endforeach;
										endif; ?>
								</div>
								<div class="card-rating-number">
									<?php the_field('rating');?>
								</div>
							</div>
						</div>

						<div  class="offer-card__text">
							<?php
							$percent = get_field('percent');
							if( $percent ): ?>
								<span>
									Ставка
								</span>
								<p class="range range-percent">
									<span><?php echo $percent['percent_number']; ?></span> <span></span> %
								</p>
							<?php endif; ?>
						</div>

						<div class="offer-card__text">
							<?php
							$sum = get_field('sum');
							if( $sum ): ?>
							<span>
								Сумма
							</span>
							<p class="range range-limit">
								<span><?php echo $sum['sum_from'];?></span> - <span><?php echo $sum['sum_to'];?></span> ₽
							</p>
							<?php endif; ?>
						</div>

						<div class="offer-card__text">
							<?php
							$term = get_field('term');
							if( $term ): ?>
							<span>
								Скрок
							</span>
							<p class="range range-day">
								<span><?php echo $term['term_from'];?></span> - <span><?php echo $term['term_to'];?></span> дня
							</p>
							<?php endif; ?>
						</div>

						<a href="<?php the_permalink();?>" class="btn btn_hover btn-more">
					 		Подробнее
					 	</a>
						<p class="offer-card__bottom text-center">
							Без % На долгий срок Лучшее предложение
						</p>
					</div>
				</div>
				<?php  endwhile;
				endif; ?>
				<?php  wp_reset_postdata();?>

			</div>  
			<div class="offer__btn">
				<a href="/<?php echo get_page_uri( 15 ); ?>" class="btn offer-link btn_hover">
					Подбор кредитных карт
				</a>
			</div>
		</div>

		<div class="offer__wrapper" data-tab="3">
			<div class="offer-slider" >
				<?php $args = array(
				'post_type' => 'debit',
				);
				$query = new WP_Query($args);
				$coordinates = array();
				if ($query->have_posts()) :
				  while ($query->have_posts()) : $query->the_post(); ?>
				<div class="offer__item">
					<div class="offer-card">
						<div class="offer-card__top">
							<div class="offer-card__logo">
								<img src="<?php the_field('bank-logo');?>" alt="#">
							</div>
							<div class="offer-card__rating card-rating">
								<div class="card-rating-icon">
									<?php
										$icons = get_field('icons');
										if( $icons ): 
										foreach( $icons as $icon ):
										switch ($icon) {
										    case '1':
										        echo "<span class=\"card-rating-icon_fire\"></span>";
										        break;
										    case '2':
										        echo "<span class=\"card-rating-icon_crown\"></span>";
										        break;
										}
										endforeach;
										endif; ?>
								</div>
								<div class="card-rating-number">
									<?php the_field('rating');?>
								</div>
							</div>
						</div>

						<div  class="offer-card__text">
							<?php
							$percent = get_field('percent');
							if( $percent ): ?>
								<span>
									Ставка
								</span>
								<p class="range range-percent">
									<span><?php echo $percent['percent_number']; ?></span> <span></span> %
								</p>
							<?php endif; ?>
						</div>

						<div class="offer-card__text">
							<?php
							$sum = get_field('sum');
							if( $sum ): ?>
							<span>
								Сумма
							</span>
							<p class="range range-limit">
								<span><?php echo $sum['sum_from'];?></span> - <span><?php echo $sum['sum_to'];?></span> ₽
							</p>
							<?php endif; ?>
						</div>

						<div class="offer-card__text">
							<?php
							$term = get_field('term');
							if( $term ): ?>
							<span>
								Скрок
							</span>
							<p class="range range-day">
								<span><?php echo $term['term_from'];?></span> - <span><?php echo $term['term_to'];?></span> дня
							</p>
							<?php endif; ?>
						</div>

						<a href="<?php the_permalink();?>" class="btn btn_hover btn-more">
					 		Подробнее
					 	</a>
						<p class="offer-card__bottom text-center">
							Без % На долгий срок Лучшее предложение
						</p>
					</div>
				</div>
				<?php  endwhile;
				endif; ?>
				<?php  wp_reset_postdata();?>
			</div>
			<div class="offer__btn">
				<a href="/<?php echo get_page_uri( 17 ); ?>" class="btn offer-link btn_hover">
					Подбор дебетовых карт
				</a>
			</div>
		</div>

	</div>
</section>

<section class="article">
	<div class="container">
		<h2 class="title">
			Вопросы и ответы
		</h2>
		<div class="tab">
			<div class="tab__wrapper">
				<div class="tab__item">
					<a href="#" data-tab="1" class="active">
						Все
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="2">
						Личные финансы
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="3">
						Право
					</a>
				</div>
				<div class="tab__item">
					<a href="#" data-tab="4">
						Дебетовые карты
					</a>
				</div>
			</div>
		</div>
		<div class="article__wrapper article-slider-main">
		<?php $args = array(
		'post_type' => 'post',
		);
		$query = new WP_Query($args);
		$coordinates = array();
		if ($query->have_posts()) :
		  while ($query->have_posts()) : $query->the_post(); ?>
			<?php $questions = get_field('questions');
			?>
			<div class="article-slider-main__item">
				<a href="question-single.html" class="article__item">
					<div class="article__img">
						<?php the_post_thumbnail(); ?>
					</div>
					<p class="article__text">
						<?php the_title(); ?>
					</p>
					<div class="article__comment">
						<?php echo count($questions); ?> ответ
					</div>
					<div class="article__views">
						<?php echo get_post_meta ($post->ID,'views',true); ?>
					</div>
				</a>
			</div>
		<?php  endwhile;
		endif; ?>
		<?php  wp_reset_postdata();?>	
		</div>
		<div class="article__btn">
			<a href="/<?php echo get_page_uri( 23 ); ?>" class="btn-default">
				Все вопросы
			</a>
		</div>

	</div>	
</section>

<section class="why-lenders">
	<div class="container">
		<div class="row why-lenders__wrapper">
			<div class="col-12 col-lg-6 order-1 order-lg-0">
				<div class="why-lenders-slider" id="why-lenders-slider">
					<div class="why-lenders-slider__item">
						<div class="why-lenders-slider__title">
							Почему выбирают Lenders?
						</div>
						<div class="why-lenders-slider__icon">
							<img src="<?php bloginfo('template_url')?>/assets/img/note.svg" alt="">
						</div>
						<div class="why-lenders-slider__text">
							<p>
								Заполните анкету о себе, чтобы мы точно смогли определить ваш кредитный рейтинг
							</p>
						</div>
					</div>
					<div class="why-lenders-slider__item">
						<div class="why-lenders-slider__title">
							Почему выбирают Lenders?
						</div>
						<div class="why-lenders-slider__icon">
							<img src="<?php bloginfo('template_url')?>/assets/img/note.svg" alt="">
						</div>
						<div class="why-lenders-slider__text">
							<p>
								Заполните анкету о себе, чтобы мы точно смогли определить ваш кредитный рейтинг
							</p>
						</div>
					</div>
					<div class="why-lenders-slider__item">
						<div class="why-lenders-slider__title">
							Почему выбирают Lenders?
						</div>
						<div class="why-lenders-slider__icon">
							<img src="<?php bloginfo('template_url')?>/assets/img/note.svg" alt="">
						</div>
						<div class="why-lenders-slider__text">
							<p>
								Заполните анкету о себе, чтобы мы точно смогли определить ваш кредитный рейтинг
							</p>
						</div>
					</div>
					<div class="why-lenders-slider__item">
						<div class="why-lenders-slider__title">
							Почему выбирают Lenders?
						</div>
						<div class="why-lenders-slider__icon">
							<img src="<?php bloginfo('template_url')?>/assets/img/note.svg" alt="">
						</div>
						<div class="why-lenders-slider__text">
							<p>
								Заполните анкету о себе, чтобы мы точно смогли определить ваш кредитный рейтинг
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 order-0 order-lg-1">
				<div class="why-lenders-info">
					<div class="why-lenders-info__wrapper">
						
						<h3 class="why-lenders-info__title">
							Узнай свой<br>кредитный рейтинг<br>бесплатно!
						</h3>
						<p class="why-lenders-info__text">
							а мы подберем лучшие предложения согласно результатам
						</p>

						<div class="phone-form__input">
							<img src="<?php bloginfo('template_url')?>/assets/img/hand.png" alt="">
							<input type="text" class="input-mask" placeholder="+7 (   )" >
							<label>Мобильный телефон *</label>
						</div>
						<div class="phone-form__btn">
							<a href="form.html" class="btn btn_hover btn-accent">Бесплатный подбор</a>
						</div>
						<div class="privacy-form">
						    <input type="checkbox" id="check" checked name="check" />
						    <label for="check" class="">Я принимаю <a href="">условия передачи информации</a></label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<section class="cases">
	<div class="container">
		<h2 class="title">
			Кейсы
		</h2>
		<div class="cases__wrapper" id="cases-slide">
			<?php $args = array(
			'post_type' => 'cases',
			);
			$query = new WP_Query($args);
			$coordinates = array();
			if ($query->have_posts()) :
			  while ($query->have_posts()) : $query->the_post(); ?>
			<div class="cases-slide__item">
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
		<div class="cases__btn text-center">
			<a href="/<?php echo get_page_uri( 21 ); ?>" class="btn-default">Все кейсы</a>
		</div>      
	</div>	
</section>

<?php
get_footer();
