<?php
/**
 * Template Name: Микрозаймы
 */

get_header();
?>
<div id="content-wrapper">
	<section class="banner">
		<div class="container banner__wrapper">
			<img class="banner__img_desc" src="<?php bloginfo('template_url')?>/assets/img/banner-microloan.png" alt="#">
			<div class="phone-form">
				<h1 class="title">
					Персональный подбор микрозайма
				</h1>
				<p class="phone-form__text">
					Подбери лучшее кредитное предложение на рынке!
				</p>
				<form action='#' class="banner-form">
					<img class="banner__img_mob" src="<?php bloginfo('template_url')?>/assets/img/banner-microloan.png" alt="#">
					<div class="phone-form__input form-input">
						<input id='client-phone' type="text" class="mask-phone" placeholder="+7 (   )" >
						<label>Мобильный телефон *</label>
					</div>

					<div class="phone-form__btn">
						<button class="btn btn_hover btn-accent" id="action-btn">Бесплатный подбор</button>
					</div>

					<div class="privacy-form">
					    <input type="checkbox" id="check" checked name="check" />
					    <label for="check" class="">Я принимаю <a href="">условия передачи информации</a></label>
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

	<section class="microloan">
		<div class="container">
			<h2 class="title">
				Микрозаймы<br>в Москве
			</h2>

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
					'post_type' => 'microloan',
					);
					$query = new WP_Query($args);
					$coordinates = array();
					if ($query->have_posts()) :
					  while ($query->have_posts()) : $query->the_post(); ?>	
						
						<div class="microloan-card">

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
							
							<div class="microloan-card__conditions">

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
							
							<a href="<?php the_permalink();?>" class="btn btn_hover btn-more mb-20 uppercase">
						 		Перейти
						 	</a>
							<div class="offer-card__bottom">
								<?php $tags = get_categories( [
									'taxonomy'     => 'microloan_tag',
									'type'         => 'microloan',
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

<div class="steps-form microloan-forms hidden" id="forms-wrapper">
  <div class="steps-form__container">
    <div class="progress progress_35 mb-20" id="progress">
      <p class="progress__text">
        Получите <b>35% к вероятности одобрения,</b> заполнив 1й шаг
      </p>
    </div>
    
    <form action="#" class="steps-form__wrapper" id="steps-form_1">
      <input type="hidden" name="login_nonce" value="<?= wp_create_nonce('submitOrder'); ?>"/>
      <p class="text-center">
        <b>+16%</b> за заполнение поля <b>ФИО</b>
      </p>

      <div class="form-input">
        <select class="custom-select" id="select-microloan" name="select-microloan">
          <option value="" disabled selected hidden>Для чего вам нужен микрозайм *</option>
          <option value="Покупки">Покупки</option>
          <option value="Погашения кредита">Погашения кредита</option>
          <option value="Покупки прочие">Покупки прочие</option>
        </select>
      </div>

      <div class="form-range">
        <input type="text" id="credit-limit" readonly name="credit-limit">
        <label>Желаемый кредитный лимит *</label>
        <div id="credit-limit-range"></div>
      </div>

      <div class="form-range">
        <input type="text" id="credit-term" readonly name="credit-term">
        <label>Желаемый срок кредита *</label>
        <div id="credit-term-range"></div>
      </div>

      <div class="form-input validate">
        <input type="text" id="client-name" class="uppercase" name="client-name"  data-validate="text">
        <label>Фамилия, имя, отчество *</label>
      </div>

      <div class="form-input validate">
        <input type="email" id="client-email" name="client-email"  data-validate="email">
        <label>Электронная почта *</label>
      </div>
      
      <div class="btn-next mb-30">
        <button type="submit" class="btn btn_hover btn-accent">
          Далее
        </button>
      </div>  
      
    </form>

    <form action="#" class="steps-form__wrapper hidden" id="steps-form_2">
      <p class="text-center">
        <b>+1%</b> за заполнение поля <b>Серия и номер</b>
      </p>
      
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
      <p class="text-center">
        <b>+1%</b> за заполнение поля <b>Серия и номер</b>
      </p>
      
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
          Оформить
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
	<section class="microloan">
		<div class="container">
			<h2 class="title">
				Лучшие предложения банков!
			</h2>

			<div class="row">
				<div class="microloan__wrapper col-12 col-lg-8">
					<?php $args = array(
					'post_type' => 'microloan',
					);
					$query = new WP_Query($args);
					$coordinates = array();
					if ($query->have_posts()) :
					  while ($query->have_posts()) : $query->the_post(); ?>	
						
						<div class="microloan-card">

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
							
							<div class="microloan-card__conditions">

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
							
							<a href="<?php the_permalink();?>" class="btn btn_hover btn-more mb-20 uppercase">
						 		Перейти
						 	</a>
							<div class="offer-card__bottom">
								<?php $tags = get_categories( [
									'taxonomy'     => 'microloan_tag',
									'type'         => 'microloan',
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

<?php
get_footer();
