<?php
/**
 * Template Name: Кредитные карты
 */

get_header();?>

<div id="content-wrapper">
	<section class="banner">
		<div class="container banner__wrapper">
			<img class="banner__img_desc" src="<?php bloginfo('template_url')?>/assets/img/banner-card.png" alt="#">
			<div class="phone-form">
				<h1 class="title">
					Персональный подбор кредитных карт
				</h1>
				<p class="phone-form__text">
					Подберите лучшую карту на рынке!
				</p>
				<form action="#" class="banner-form">
					<img class="banner__img_mob" src="<?php bloginfo('template_url')?>/assets/img/banner-card.png" alt="#">
					<div class="phone-form__input form-input">
						<input type="text" id='client-phone' class="mask-phone" placeholder="+7 (   )" >
						<label>Мобильный телефон *</label>
					</div>
					<div class="phone-form__btn">
						<button id="action-btn" class="btn btn_hover btn-accent">Бесплатный подбор</button>
					</div>
					<div class="privacy-form">
					    <input type="checkbox" id="check" checked name="check" />
					    <label for="check">Я принимаю <a href="#">условия передачи информации</a></label>
					</div>
				</form>
				<div class="swipe-down">
					<p>
						Посмотреть лучшие предложения банков!
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="cards">
		<div class="container">
			<div class="cards-select">
				<div class="cards-select__item">
					<a href="/<?php echo get_page_uri( 15 ); ?>" class="active">
						Кредитные карты
					</a>
				</div>
				<div class="cards-select__item">
					<a href="/<?php echo get_page_uri( 17 ); ?>">
						Дебетовые карты
					</a>
				</div>
			</div>
			<div class="tab-title">
				Фильтр:
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
				<div class="microloan__wrapper col-12 col-lg-8">
					<?php $args = array(
					'post_type' => 'credit',
					);
					$query = new WP_Query($args);
					$coordinates = array();
					if ($query->have_posts()) :
					  while ($query->have_posts()) : $query->the_post(); ?>	
					<div class="microloan-card">
						
						<div class="cards-img_mob">
							<?php the_post_thumbnail('',array('class' => 'img-responsive')); ?>
						</div>

						<div class="offer-card__top">
							<div class="card-single__license">
								лиц. № <?php the_field('license');?>
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
						
						<div class="cards__head">
							<h2>
								<?php the_title(); ?>
							</h2>
							<p class="bank-name">
								<?php the_field('bank-name');?>
							</p>
						</div>

						<div class="cards__conditions row">

							<div class="col-12 col-md-6">

								<div  class="cards__text">
									<?php
									$percent = get_field('percent');
									if( $percent ): ?>
									<span>
										Льготный период:
									</span>
									<p class="range range-percent">
										<?php echo $percent['percent_number']; ?> дней
									</p>
									<p class="range-description">
										<?php echo $percent['percent_text']; ?>
									</p>
									<?php endif; ?>
								</div>
								<div  class="cards__text">
									<?php
									$sum = get_field('sum');
									if( $sum ): ?>
									<span>
										Кредитный лимит
									</span>
									<p class="range range-percent">
										до 500 000 ₽
									</p>
									<p class="range-description">
										Лимит на снятие наличных: до 300 000 ₽/мес.
									</p>
									<?php endif; ?>
								</div>
								<div  class="cards__text">
									<span>
										Обслуживание
									</span>
									<p class="range range-percent">
										Бесплатно
									</p>
									<p class="range-description">
										первый год, со второго года 1490 ₽/год
									</p>
								</div>
								
							</div>

							<div class="col-12 col-md-6">
								<div class="cards__img">
									<?php the_post_thumbnail('',array('class' => 'img-responsive')); ?>
								</div>
							</div>

						</div>
						<div class="microloan-card__description accordion-js">
							<div>
								<?php the_content(); ?>
							</div>
							<a href="" class="show-more mb-20 accordion-btn-js">Развернуть</a>

							<div class="accordion-contant mb-20 accordion-contant-js">
								
								<div class="tab-wrapper">
									<div class="tab mb-20">
										<div class="tab__wrapper">
											<?php if( have_rows('tabs') ):
												$dataCount = 0;
								                while( have_rows('tabs') ): the_row(); 
								                  $dataCount++;?>
												<?php if( get_sub_field('tabs_title') ): ?>
												<div class="tab__item">
													<a href="#" data-tab="<?php echo $dataCount;?>" class="<?php if($dataCount == 1){ echo 'active';};?>">
														<?php echo get_sub_field('tabs_title'); ?>
													</a>
												</div>
												<?php endif; ?>
												<?php endwhile; ?>
											<?php endif; ?>
										</div>
									</div>

									<?php if( have_rows('tabs') ):
										$dataCount2 = 0;
						                while( have_rows('tabs') ): the_row(); 
						                  $dataCount2++;?>
										<?php if( get_sub_field('tabs_table') ): ?>		
											<div class="tab-content <?php if($dataCount2 == 1){ echo 'active';};?>" data-tab="<?php echo $dataCount2;?>">
												
												<?php 
													$table = get_sub_field('tabs_table'); 
													if ( ! empty ( $table ) ) {
												    echo '<table border="0">';

												        if ( ! empty( $table['caption'] ) ) {

												            echo '<caption>' . $table['caption'] . '</caption>';
												        }

												        if ( ! empty( $table['header'] ) ) {

												            echo '<thead>';

												                echo '<tr>';

												                    foreach ( $table['header'] as $th ) {

												                        echo '<th>';
												                            echo $th['c'];
												                        echo '</th>';
												                    }

												                echo '</tr>';

												            echo '</thead>';
												        }

												        echo '<tbody>';

												            foreach ( $table['body'] as $tr ) {

												                echo '<tr>';

												                    foreach ( $tr as $td ) {

												                        echo '<td>';
												                            echo $td['c'];
												                        echo '</td>';
												                    }

												                echo '</tr>';
												            }

												        echo '</tbody>';

												    echo '</table>';
												}?>

											</div>
										<?php endif; ?>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>

							</div>
						</div>
						
						<div class="cards__btn mb-20">
							<a href="<?php the_permalink();?>" class="btn-default">
						 		Подробнее
						 	</a>
							<a href="<?php the_field('bank-link');?>" class="btn btn_hover btn-more uppercase">
						 		Перейти на сайт
						 	</a>
						</div>
						
						
						<div class="offer-card__bottom">
							<?php $tags = get_categories( [
								'taxonomy'     => 'credit_tag',
								'type'         => 'credit',
								'child_of'     => 0,
								'parent'       => '',
								'orderby'      => 'name',
								'order'        => 'ASC',
								'hide_empty'   => 1,
								'hierarchical' => 1,
								'exclude'      => '',
								'include'      => '',
								'number'       => 0,
								'pad_counts'   => false,
							] );

							if( $tags ){
								foreach( $tags as $tag ){ ?>
								<a href="/tag/<?php echo $tag->taxonomy;?>"> <?php echo $tag->name;?> </a>
							<?php 	}
							} ?>
						</div>

					</div>
					<?php  endwhile;
					endif; ?>
					<?php  wp_reset_postdata();?>
					
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
							<div class="widget-article">
								<h3 class="widget__title">
									Вопросы и ответы
								</h3>
								<a href="single.html" class="article__item">
									<div class="article__img">
										<img src="<?php bloginfo('template_url')?>/assets/img/article.jpg" alt="">
									</div>
									<p class="article__text">
										Какие риски у сбора банками биометрических данных?
									</p>
									<div class="article__comment">
										1 ответ
									</div>
									<div class="article__views">
										439
									</div>
								</a>

								<a href="single.html" class="article__item">
									<div class="article__img">
										<img src="<?php bloginfo('template_url')?>/assets/img/article.jpg" alt="">
									</div>
									<p class="article__text">
										Какие риски у сбора банками биометрических данных?
									</p>
									<div class="article__comment">
										1 ответ
									</div>
									<div class="article__views">
										439
									</div>
								</a>
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
</div>

<div class="steps-form hidden" id="forms-wrapper">
	<div class="steps-form__container">
		<div class="progress progress_35 mb-50" id="rating-progress">
			<p class="progress__text">
				Шаг 1/3
			</p>
		</div>
		<form action="#" class="steps-form__wrapper" id="steps-form_1">
			
			<div class="steps-form__title mt-30 mb-20">
				Подобрать кредитную карту
			</div>

			<div class="form-range">
				<input type="text" id="card-credit-limit" name="card-credit-limit" readonly>
				<label>Какой кредитный лимит вам нужен?</label>
				<div id="card-credit-limit-range"></div>
			</div>
			
			<div class="form-input validate">
				<input type="text" id="loan-purpose" name="loan-purpose" data-validate="text">
				<label>Цель кредита</label>
			</div>
	
			<div class="form-input validate">
				<input type="text" id="client-name" name="client-name" class="uppercase" data-validate="text">
				<label>Фамилия, имя, отчество *</label>
			</div>

			<div class="form-input validate">
				<input type="email" id="client-email" name="client-email" data-validate="email">
				<label>Электронная почта *</label>
			</div>
			
			<div class="form-accordion">
							
				<div class="show-more mb-20 accordion-btn-js">Дополнительные параметры</div>

				<div class="accordion-contant mb-20 accordion-contant-js">
					<div class="form-input">
						<select class="custom-select" id="select-pay-system" name="select-pay-system">
							<option value="" disabled selected hidden>Платежная система</option>
							<option value="mastercard">Mastercard</option>
							<option value="visa">VISA</option>
						</select>
					</div>
					<div class="checkbox__wrapper">
			        	<div class="checkbox__input">
						    <input checked type="checkbox" id="additional-1" name="additional-1" value="Бесплатное обслуживание">
						    <label for="additional-1">Бесплатное обслуживание</label>
						</div>
						<div class="checkbox__input">
						    <input type="checkbox" id="additional-2" name="additional-2" value="Без справок о доходах">
						    <label for="additional-2">Без справок о доходах</label>
						</div>
						<div class="checkbox__input">
						    <input type="checkbox" id="additional-4" name="additional-3" value="Льготный период на снитие наличных">
						    <label for="additional-4">Льготный период на снитие наличных</label>
						</div>
			        </div>
				</div>
			</div>

			<div class="btn-next mb-30 mt-30">
				<button type="submit" class="btn btn_hover btn-accent">
					Далее
				</button>
			</div>	
			
		</form>
		<form action="#" class="steps-form__wrapper hidden" id="steps-form_2">
	      <div class="steps-form__title mb-20">
	        Паспортные данные
	      </div>
	      <div class="form-input validate">
	        <input type="text" class="mask-pass-number" id="pasport-number" name="pasport-number" data-validate="text">
	        <label>Серия и номер *</label>
	      </div>
	      
	      <div class="form-input validate">
	        <input type="text" id="birthday" class="mask-date input-datepicker" name="birthday" data-validate="text">
	        <label>Дата рождения*</label>
	      </div>

	      <div class="form-input validate">
	        <input type="text" class="uppercase" id="birthday-city" name="birthday-city"  data-validate="text">
	        <label>Место рождения *</label>
	      </div>

	      <div class="form-input validate">
	        <input type="text" id="department-code" class="mask-department-code" name="department-code" data-validate="text">
	        <label>Код подразделения *</label>
	      </div>

	      <div class="form-input validate">
	        <input type="text" id="pasport-issue" class="input-datepicker mask-date" name="pasport-issue" data-validate="text">
	        <label>Дата выдачи *</label>
	      </div>

	      <div class="form-input validate">
	        <input type="text" id="pasport-subdivision" class="uppercase" name="pasport-subdivision" data-validate="text">
	        <label>Кем выдан *</label>
	      </div>
	      
	      <div class="btn-next mb-30">
	        <button type="submit" class="btn btn_hover btn-accent">
	          Далее
	        </button>
	      </div>  
	      
	    </form>

	    <form action="#" method="post" class="steps-form__wrapper hidden" id="steps-form_3">
	      <p class="steps-form__title mb-20">
	        Адрес постоянной регистрации
	      </p>
	      <div class="form-input validate">
	        <input type="text" name="addressIndex" id="adress-index" class="mask-index" data-validate="text">
	        <label>Индекс *</label>
	      </div>
	      
	      <div class="form-input validate ajax-search">
	        <input type="text" name="addressRegion" id="adress-region" data-validate="text">
	        <label>Регион *</label>
			<ul class="ajax-search__list scrollbar" id="adress-region-list">
			</ul>
	      </div>

	      <div class="form-input validate ajax-search">
	        <input type="text" name="addressCity" id="adress-city" data-validate="text">
	        <label>Район или город *</label>
	        <ul class="ajax-search__list scrollbar" id="adress-cities-list">
			</ul>
	      </div>

	      <div class="form-input validate">
	        <input type="text" name="addressStreet" id="adress-street" data-validate="text">
	        <label>Улица *</label>
	      </div>

	      <div class="row">
	        <div class="col-6">
	          <div class="form-input">
	            <input type="text" name="addressHouse" id="adress-hous">
	            <label>Дом *</label>
	          </div>
	        </div>
	        <div class="col-6">
	          <div class="form-input">
	            <input type="text" name="addressCorps" id="adress-corps">
	            <label>Корпус</label>
	          </div>
	        </div>
	      </div>
	      
	      <div class="row">
	        <div class="col-6">
	          <div class="form-input">
	            <input type="text" name="addressBuilding" id="adress-building">
	            <label>Строение</label>
	          </div>
	        </div>
	        <div class="col-6">
	          <div class="form-input">
	            <input type="text" name="addressApartment" id="adress-apartment">
	            <label>Квартира</label>
	          </div>
	        </div>
	      </div>

	      <p class="steps-form__title mb-20">
	        Адрес фактического проживания
	      </p>
	      
	      <div class="privacy-form mb-20">
	          <input type="checkbox" id="check-registration" name="check-registration" checked/>
	          <label for="check-registration">Совпадает с адресом регистрации</label>
	      </div>
			
		  <div class="additional-forms mt-30 hidden" id="additional-forms">
		      <div class="form-input">
		        <input type="text" name="addressIndex2" id="adress-index2" class="mask-index">
		        <label>Индекс *</label>
		      </div>
		      
		      <div class="form-input ajax-search">
		        <input type="text" name="addressRegion2" id="adress-region2">
		        <label>Регион *</label>
				<ul class="ajax-search__list scrollbar" id="adress-region-list">
				</ul>
		      </div>

		      <div class="form-input ajax-search">
		        <input type="text" name="addressCity2" id="adress-city2">
		        <label>Район или город *</label>
		        <ul class="ajax-search__list scrollbar" id="adress-cities-list">
				</ul>
		      </div>

		      <div class="form-input">
		        <input type="text" name="addressStreet2" id="adress-street2">
		        <label>Улица *</label>
		      </div>

		      <div class="row">
		        <div class="col-6">
		          <div class="form-input">
		            <input type="text" name="addressHouse2" id="adress-hous2">
		            <label>Дом *</label>
		          </div>
		        </div>
		        <div class="col-6">
		          <div class="form-input">
		            <input type="text" name="addressCorps2" id="adress-corps2">
		            <label>Корпус</label>
		          </div>
		        </div>
		      </div>
		      
		      <div class="row">
		        <div class="col-6">
		          <div class="form-input">
		            <input type="text" name="addressBuilding2" id="adress-building2">
		            <label>Строение</label>
		          </div>
		        </div>
		        <div class="col-6">
		          <div class="form-input">
		            <input type="text" name="addressApartment2" id="adress-apartment2">
		            <label>Квартира</label>
		          </div>
		        </div>
		      </div>
		  </div>	
			

	      <div class="mb-30">
	        <button class="btn btn_hover btn-accent" id="send-form">
	          Подобрать карту
	        </button>
	      </div>  

	      <?php wp_nonce_field( 'orderCreate', 'checkField'); ?>
	      
	    </form>
	</div>
</div>

<div class="hidden" id="best-offers">

	<div class="thank-message" id="thank-message">
		<div class="container">
			<div class="thank-message__wrapper text-center">
				<div class="thank-message__icon">
					<img src="<?php bloginfo('template_url')?>/assets/img/icon/icon-thank.svg" alt="">
				</div>
				<div class="thank-message__title">
					Благодарим<br>за оставленные данные!
				</div>
				<div class="thank-message__sub-title">
					по готовности предложений мы пришлём вам СМС, спасибо за уделённое время!
				</div>
			</div>
			<div class="swipe-down mb-30">
				<p>
					Посмотреть лучшие предложения банков!
				</p>
			</div>
		</div>
	</div>

	<section class="cards">
		<div class="container">
			<h2 class="title">
				Лучшие предложения банков!
			</h2>
			<div class="row">
				<div class="microloan__wrapper col-12 col-lg-8">
					<div class="microloan-card">
						
						<div class="cards-img_mob">
							<img src="<?php bloginfo('template_url')?>/assets/img/card.jpg" alt="">
						</div>

						<div class="offer-card__top">
							<div class="card-single__license">
								лиц. № 1326
							</div>
							<div class="offer-card__rating card-rating">
								<div class="card-rating-icon">
									<span class="card-rating-icon_fire"></span>
									<span class="card-rating-icon_crown"></span>
								</div>
								<div class="card-rating-number">
									10.0
								</div>
							</div>
						</div>
						
						<div class="cards__head">
							<h2>
								100 дней без<br>процентов
							</h2>
							<p class="bank-name">
								Альфа-Банк / MasterCard Standard
							</p>
						</div>

						<div class="cards__conditions row">

							<div class="col-12 col-md-6">

								<div  class="cards__text">
									<span>
										Льготный период:
									</span>
									<p class="range range-percent">
										100 дней
									</p>
									<p class="range-description">
										без процентов, далее 11.99% - 29.7%
									</p>
								</div>
								<div  class="cards__text">
									<span>
										Кредитный лимит
									</span>
									<p class="range range-percent">
										до 500 000 ₽
									</p>
									<p class="range-description">
										Лимит на снятие наличных: до 300 000 ₽/мес.
									</p>
								</div>
								<div  class="cards__text">
									<span>
										Обслуживание
									</span>
									<p class="range range-percent">
										Бесплатно
									</p>
									<p class="range-description">
										первый год, со второго года 1490 ₽/год
									</p>
								</div>
								
							</div>

							<div class="col-12 col-md-6">
								<div class="cards__img">
									<img src="<?php bloginfo('template_url')?>/assets/img/card.jpg" alt="">
								</div>
							</div>

						</div>
						<div class="microloan-card__description accordion-js">
							<p>
								Возраст заемщика: от 18 лет.<br> Получение займа: банковская карта, qiwi кошелек, платёжные системы, яндекс.деньги, банковский счет...
							</p>
							<a href="" class="show-more mb-20 accordion-btn-js">Развернуть</a>

							<div class="accordion-contant mb-20 accordion-contant-js">
								
								<div class="tab-wrapper">
									<div class="tab mb-20">
										<div class="tab__wrapper">
											<div class="tab__item">
												<a href="#" data-tab="1" class="active">
													Условия
												</a>
											</div>
											<div class="tab__item">
												<a href="#" data-tab="2">
													Снятие наличных
												</a>
											</div>
											<div class="tab__item">
												<a href="#" data-tab="3">
													Лимиты
												</a>
											</div>
										</div>
									</div>

									<div class="tab-content active" data-tab="1">
										<table>
											<tbody>
												<tr>
													<td>
														Кредитная ставка на покупки
													</td>
													<td>
														11.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитная ставка на наличные
													</td>
													<td>
														23.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитный лимит
													</td>
													<td>
														до 500 000 ₽

													</td>
												</tr>
												<tr>
													<td>
														Льготный период
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Льготный период на наличные
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Обслуживание
													</td>
													<td>
														
													</td>
												</tr>
												<tr>
													<td>
														SMS информирование
													</td>
													<td>
														
													</td>
												</tr>
												<tr>
													<td>
														Минимальный платеж
													</td>
													<td>
														
													</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="tab-content" data-tab="2">
										<table>
											<tbody>
												<tr>
													<td>
														Кредитная ставка на покупки
													</td>
													<td>
														11.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитная ставка на наличные
													</td>
													<td>
														23.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитный лимит
													</td>
													<td>
														до 500 000 ₽

													</td>
												</tr>
												<tr>
													<td>
														Льготный период
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Льготный период на наличные
													</td>
													<td>
														100 дней
													</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="tab-content" data-tab="3">
										<table>
											<tbody>
												<tr>
													<td>
														Кредитная ставка на покупки
													</td>
													<td>
														11.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитная ставка на наличные
													</td>
													<td>
														23.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитный лимит
													</td>
													<td>
														до 500 000 ₽

													</td>
												</tr>
												<tr>
													<td>
														Льготный период
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Льготный период на наличные
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Льготный период на наличные
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Льготный период на наличные
													</td>
													<td>
														100 дней
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

							</div>
						</div>
						
						<div class="cards__btn mb-20">
							<a href="credit-cards-single.html" class="btn-default">
						 		Подробнее
						 	</a>
							<a href="#" class="btn btn_hover btn-more uppercase">
						 		Перейти на сайт
						 	</a>
						</div>
						
						
						<p class="offer-card__bottom">
							Наличные бесплатно Бесплатные уведомления Без справок о доходах
						</p>

					</div>

					<div class="microloan-card">
						
						<div class="cards-img_mob">
							<img src="<?php bloginfo('template_url')?>/assets/img/card.jpg" alt="">
						</div>

						<div class="offer-card__top">
							<div class="card-single__license">
								лиц. № 1326
							</div>
							<div class="offer-card__rating card-rating">
								<div class="card-rating-icon">
									<span class="card-rating-icon_fire"></span>
									<span class="card-rating-icon_crown"></span>
								</div>
								<div class="card-rating-number">
									10.0
								</div>
							</div>
						</div>
						
						<div class="cards__head">
							<h2>
								100 дней без<br>процентов
							</h2>
							<p class="bank-name">
								Альфа-Банк / MasterCard Standard
							</p>
						</div>

						<div class="cards__conditions row">

							<div class="col-12 col-md-6">

								<div  class="cards__text">
									<span>
										Льготный период:
									</span>
									<p class="range range-percent">
										100 дней
									</p>
									<p class="range-description">
										без процентов, далее 11.99% - 29.7%
									</p>
								</div>
								<div  class="cards__text">
									<span>
										Кредитный лимит
									</span>
									<p class="range range-percent">
										до 500 000 ₽
									</p>
									<p class="range-description">
										Лимит на снятие наличных: до 300 000 ₽/мес.
									</p>
								</div>
								<div  class="cards__text">
									<span>
										Обслуживание
									</span>
									<p class="range range-percent">
										Бесплатно
									</p>
									<p class="range-description">
										первый год, со второго года 1490 ₽/год
									</p>
								</div>
								
							</div>

							<div class="col-12 col-md-6">
								<div class="cards__img">
									<img src="<?php bloginfo('template_url')?>/assets/img/card.jpg" alt="">
								</div>
							</div>

						</div>
						<div class="microloan-card__description accordion-js">
							<p>
								Возраст заемщика: от 18 лет.<br> Получение займа: банковская карта, qiwi кошелек, платёжные системы, яндекс.деньги, банковский счет...
							</p>
							<a href="" class="show-more mb-20 accordion-btn-js">Развернуть</a>

							<div class="accordion-contant mb-20 accordion-contant-js">
								
								<div class="tab-wrapper">
									<div class="tab mb-20">
										<div class="tab__wrapper">
											<div class="tab__item">
												<a href="#" data-tab="1" class="active">
													Условия
												</a>
											</div>
											<div class="tab__item">
												<a href="#" data-tab="2">
													Снятие наличных
												</a>
											</div>
											<div class="tab__item">
												<a href="#" data-tab="3">
													Лимиты
												</a>
											</div>
										</div>
									</div>

									<div class="tab-content active" data-tab="1">
										<table>
											<tbody>
												<tr>
													<td>
														Кредитная ставка на покупки
													</td>
													<td>
														11.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитная ставка на наличные
													</td>
													<td>
														23.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитный лимит
													</td>
													<td>
														до 500 000 ₽

													</td>
												</tr>
												<tr>
													<td>
														Льготный период
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Льготный период на наличные
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Обслуживание
													</td>
													<td>
														
													</td>
												</tr>
												<tr>
													<td>
														SMS информирование
													</td>
													<td>
														
													</td>
												</tr>
												<tr>
													<td>
														Минимальный платеж
													</td>
													<td>
														
													</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="tab-content" data-tab="2">
										<table>
											<tbody>
												<tr>
													<td>
														Кредитная ставка на покупки
													</td>
													<td>
														11.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитная ставка на наличные
													</td>
													<td>
														23.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитный лимит
													</td>
													<td>
														до 500 000 ₽

													</td>
												</tr>
												<tr>
													<td>
														Льготный период
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Льготный период на наличные
													</td>
													<td>
														100 дней
													</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="tab-content" data-tab="3">
										<table>
											<tbody>
												<tr>
													<td>
														Кредитная ставка на покупки
													</td>
													<td>
														11.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитная ставка на наличные
													</td>
													<td>
														23.99% - 29.7%
													</td>
												</tr>
												<tr>
													<td>
														Кредитный лимит
													</td>
													<td>
														до 500 000 ₽

													</td>
												</tr>
												<tr>
													<td>
														Льготный период
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Льготный период на наличные
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Льготный период на наличные
													</td>
													<td>
														100 дней
													</td>
												</tr>
												<tr>
													<td>
														Льготный период на наличные
													</td>
													<td>
														100 дней
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

							</div>
						</div>
						
						<div class="cards__btn mb-20">
							<a href="credit-cards-single.html" class="btn-default">
						 		Подробнее
						 	</a>
							<a href="#" class="btn btn_hover btn-more uppercase">
						 		Перейти на сайт
						 	</a>
						</div>
						
						
						<p class="offer-card__bottom">
							Наличные бесплатно Бесплатные уведомления Без справок о доходах
						</p>

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
							<div class="widget-article">
								<h3 class="widget__title">
									Вопросы и ответы
								</h3>
								<a href="single.html" class="article__item">
									<div class="article__img">
										<img src="<?php bloginfo('template_url')?>/assets/img/article.jpg" alt="">
									</div>
									<p class="article__text">
										Какие риски у сбора банками биометрических данных?
									</p>
									<div class="article__comment">
										1 ответ
									</div>
									<div class="article__views">
										439
									</div>
								</a>

								<a href="single.html" class="article__item">
									<div class="article__img">
										<img src="<?php bloginfo('template_url')?>/assets/img/article.jpg" alt="">
									</div>
									<p class="article__text">
										Какие риски у сбора банками биометрических данных?
									</p>
									<div class="article__comment">
										1 ответ
									</div>
									<div class="article__views">
										439
									</div>
								</a>
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

</div>

<?php
get_footer();
