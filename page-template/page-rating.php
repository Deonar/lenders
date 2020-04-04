<?php
/**
 * Template Name: Рейтинг
 */

get_header();
?>
<div id="content-wrapper">
	<section class="banner banner-rating">
		<div class="container banner__wrapper">
			<img class="banner__img_desc" src="<?php bloginfo('template_url')?>/assets/img/banner-rating.png" alt="#">
			<div class="phone-form">
				<h1 class="title">
					Узнай свой кредитный рейтинг бесплатно
				</h1>
				<p class="phone-form__text">
					а мы подберем лучшие предложения согласно результатам
				</p>
				<form action="#" class="banner-form">
					<img class="banner__img_mob" src="<?php bloginfo('template_url')?>/assets/img/banner-rating.png" alt="#">
					<div class="phone-form__input form-input">
						<input type="text" class="mask-phone" placeholder="+7 (   )" id="client-phone">
						<label>Мобильный телефон *</label>
					</div>
					<div class="phone-form__btn">
						<button class="btn btn_hover btn-accent" id="action-btn">Узнать бесплатно</button>
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

	<section class="rating">
		<div class="container">
			<div class="rating__wrapper">
				
					<div class="rating__block order-1 order-lg-1">
						<h4 class="rating-title">
							Что это такое кредитный рейтинг?
						</h4>
						<p class="rating-description">
							Рейтинг, или, как его называют банки, «скоринговый балл» – это число, показывающее, насколько высоки шансы получить кредит в банке.
						</p>
					</div>
				
					<div class="rating__block rating__block_img text-center order-0 order-lg-2">
						<div class="grafik text-center mb-20">
							<img src="<?php bloginfo('template_url')?>/assets/img/grafik.png" alt="">
						</div>
						<p>
							Ваш кредитный рейтинг:<br> 
							<span>Нужно уточнить</span>
						</p>
					</div>

				
					<div class="rating__block order-2 order-lg-3">
						<h4 class="rating-title">
							Когда понадобится
						</h4>
						<div class="rating-description">
							<ul>
								<li>
									Если вы собираетесь оформить кредит или ипотеку и хотите узнать, одобрит ли банк.
								</li>
								<li>
									Если вам отказали в кредите
								</li>
							</ul>
						</div>
					</div>
			</div>
		</div>
	</section>

	<div class="rating-slider">
		<div class="container">
			<h2 class="rating-title text-center">
				Как работает сервис?
			</h2>
			<div class="rating-slider__wrapper" id="rating-slider">
				<div class="rating-slider__item">
					<div class="rating-slider__icon">
						<img src="<?php bloginfo('template_url')?>/assets/img/note.svg" alt="">
					</div>
					<div class="rating-slider__text">
						<p>
							Заполните анкету о себе, чтобы мы точно смогли определить ваш кредитный рейтинг
						</p>
					</div>
				</div>

				<div class="rating-slider__item">
					<div class="rating-slider__icon">
						<img src="<?php bloginfo('template_url')?>/assets/img/note.svg" alt="">
					</div>
					<div class="rating-slider__text">
						<p>
							Мы составим ваш персональный рейтинг
						</p>
					</div>
				</div>

				<div class="rating-slider__item">
					<div class="rating-slider__icon">
						<img src="<?php bloginfo('template_url')?>/assets/img/note.svg" alt="">
					</div>
					<div class="rating-slider__text">
						<p>
							Мы предложим вам рекомендации по тому, как улучшить рейтинг
						</p>
					</div>
				</div>

				<div class="rating-slider__item">
					<div class="rating-slider__icon">
						<img src="<?php bloginfo('template_url')?>/assets/img/note.svg" alt="">
					</div>
					<div class="rating-slider__text">
						<p>
							Дополнительный бонус для клиентов с хорошим рейтингом – кредитное решение от банков онлайн
						</p>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="rating-partners">
		<div class="container">
			<div class="rating-partners__wrapper">
				<div class="rating-partners__item">
					<h3 class="rating-partners__title">
						Рейтинг рассчитывается совместно с нашими партнёрами
					</h3>
				</div>
				<div class="rating-partners__item rating-partners__item_1">
					<div class="rating-partners__icon">
						<img src="<?php bloginfo('template_url')?>/assets/img/partners/partner8.png" alt="">
						<span>
							Объединённое<br>Кредитное Бюро
						</span>
					</div>
				</div>
				<div class="rating-partners__item rating-partners__item_2">
					<div class="rating-partners__icon">
						<img src="<?php bloginfo('template_url')?>/assets/img/partners/partner9.png" alt="">
						<span>
							Национальное Бюро Кредитных Историй
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="steps-form hidden" id="forms-wrapper">
	<div class="steps-form">
		<div class="steps-form__container">
			<div class="progress progress_35 mb-20" id="rating-progress">
				<p class="progress__text">
					Шаг 1/3
				</p>
			</div>
			<form action="#" class="steps-form__wrapper" id="steps-form_1">

				<div class="steps-form__title mt-30 mb-20">
					Заполните анкету о себе, чтобы мы могли определить ваш рейтинг
				</div>

				<div class="form-input validate">
					<input type="text" id="client-name" name="client-name" class="uppercase" data-validate="text">
					<label>Фамилия, имя, отчество *</label>
				</div>

				<div class="form-input validate">
					<input type="email" id="client-email" name="client-email" data-validate="email">
					<label>Электронная почта *</label>
				</div>
				
				<div class="checkbox__input checkbox__personal-selection">
					<input type="checkbox" checked id="personal" name="personal">
					<label for="personal">
					Персональный подбор предложений
					</label>
					<p>
					нашии специалисты подберут наиболее подходящие Вам кредитные продукты с высоким процентом одобрения
					</p>
				</div>

				<div class="btn-next mb-30">
					<button class="btn btn_hover btn-accent">
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
</div>

<div class="hidden" id="best-offers">
	<div class="rating-message" id="rating-message">
		<div class="container">
			<div class="rating-message__wrapper">
				<h2 class="rating-message__title">
					Мой персональный рейтинг
				</h2>

				<div class="rating-message__img">
					<div class="grafik text-center mb-20">
						<img src="<?php bloginfo('template_url')?>/assets/img/grafik.png" alt="">
					</div>
					<p>
						Ваш кредитный рейтинг:<br> 
						<span>Высокий</span>
					</p>
				</div>

				<p class="rating-message__sub-title">
					К сожалению, мы не нашли о Вас никакой информации в Объедененном кредитном бюро. Возможно, данные о вашем кредитном рейтинге отсутствуют или вы допустили ошибку при заполнении анкеты.
				</p>
				
				<div class="rating-partners__icon">
					<img src="<?php bloginfo('template_url')?>/assets/img/partners/partner8.png" alt="">
					<span>
						Объединённое<br>Кредитное Бюро
					</span>
				</div>

			</div>
		</div>
	</div>
	<section class="microloan">
		<div class="container">
			<h2 class="title">
				Мы подобрали для Вас лучшие предложения банков
			</h2>

			<div class="row">
				<div class="microloan__wrapper col-12 col-lg-8">
					<div class="microloan-card">

						<div class="offer-card__top">
							<div class="offer-card__logo">
								<img src="<?php bloginfo('template_url')?>/assets/img/partners/partner1.png" alt="">
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
						
						<div class="microloan-card__conditions">

							<div  class="offer-card__text">
								<span>
									Ставка
								</span>
								<p class="range range-percent">
									<span>0,00</span> <span></span> %
								</p>
							</div>

							<div class="offer-card__text">
								<span>
									Сумма
								</span>
								<p class="range range-limit">
									<span>1 000</span> - <span>200 000</span> ₽
								</p>
							</div>

							<div class="offer-card__text">
								<span>
									Скрок
								</span>
								<p class="range range-day">
									<span>7</span> - <span>12</span> дня
								</p>
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
						
						<a href="microloan-single.html" class="btn btn_hover btn-more mb-20 uppercase">
					 		Перейти
					 	</a>
						<p class="offer-card__bottom">
							Без % На долгий срок Лучшее предложение
						</p>

					</div>
					<div class="microloan-card">

						<div class="offer-card__top">
							<div class="offer-card__logo">
								<img src="<?php bloginfo('template_url')?>/assets/img/partners/partner1.png" alt="">
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
						
						<div class="microloan-card__conditions">

							<div  class="offer-card__text">
								<span>
									Ставка
								</span>
								<p class="range range-percent">
									<span>0,00</span> <span></span> %
								</p>
							</div>

							<div class="offer-card__text">
								<span>
									Сумма
								</span>
								<p class="range range-limit">
									<span>1 000</span> - <span>200 000</span> ₽
								</p>
							</div>

							<div class="offer-card__text">
								<span>
									Скрок
								</span>
								<p class="range range-day">
									<span>7</span> - <span>12</span> дня
								</p>
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
						
						<a href="microloan-single.html" class="btn btn_hover btn-more mb-20 uppercase">
					 		Перейти
					 	</a>
						<p class="offer-card__bottom">
							Без % На долгий срок Лучшее предложение
						</p>

					</div>
					<div class="microloan-card">

						<div class="offer-card__top">
							<div class="offer-card__logo">
								<img src="<?php bloginfo('template_url')?>/assets/img/partners/partner1.png" alt="">
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
						
						<div class="microloan-card__conditions">

							<div  class="offer-card__text">
								<span>
									Ставка
								</span>
								<p class="range range-percent">
									<span>0,00</span> <span></span> %
								</p>
							</div>

							<div class="offer-card__text">
								<span>
									Сумма
								</span>
								<p class="range range-limit">
									<span>1 000</span> - <span>200 000</span> ₽
								</p>
							</div>

							<div class="offer-card__text">
								<span>
									Скрок
								</span>
								<p class="range range-day">
									<span>7</span> - <span>12</span> дня
								</p>
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
						
						<a href="microloan-single.html" class="btn btn_hover btn-more mb-20 uppercase">
					 		Перейти
					 	</a>
						<p class="offer-card__bottom">
							Без % На долгий срок Лучшее предложение
						</p>

					</div>
				</div>
				<div class="col-12 col-lg-4 widget">
					<div class="widget__wrapper">
						
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
