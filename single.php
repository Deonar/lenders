<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
<?php $questions = get_field('questions');?> 
<div class="breadcrumb d-none d-md-block">
	<div class="container">
        <ul class="breadcrumb__wrapper">
            <li class="breadcrumb__item"><a href="/<?php echo get_page_uri( 23 ); ?>">Ворос - ответ</a></li>
            <li class="breadcrumb__item active">Подбор кредитных карт</li>
        </ul>
    </div>
</div>

<div class="breadcrumb-mob d-block d-md-none">
	<div class="container">
		<a href="/<?php echo get_page_uri( 23 ); ?>" class="breadcrumb-mob__link">
			Вернуться к вопросам
		</a>
	</div>
</div>

<section class="question-single">
	<div class="container">
		<div class="question-single__wrapper">
			<div class="question-single__meta">
				<div class="category">
					<span>
						Рубрика:
					</span>
					<a href="#">
						Кредитные карты
					</a>
				</div>
				<div>
					<div class="views">
						<?php echo get_post_meta ($post->ID,'views',true); ?>
					</div>
					<div class="data">
						<?php the_time('d.m.Y'); ?>
					</div>
				</div>
			</div>
			<h1 class="question-single__title title">
				<?php the_title(); ?>
			</h1>
			
			<div class="question-single__img">
				<?php the_post_thumbnail('',array('class' => 'img-responsive')); ?>
			</div>

		</div>
		<div class="answers">
			<div class="answers__wrapper">
				<div class="answers__list">
					<div class="answers__number">
						<?php echo count($questions); ?> ответ
					</div>

					<?php if( have_rows('questions') ): $counter = 0;
					while( have_rows('questions') ): the_row();?>
					<div class="answers__item">
						<div class="expert mb-20">
							<div class="expert__img">
								<img src="<?php the_sub_field('question_img'); ?>" alt="#">
							</div>
							<div class="expert__name">
								<?php echo the_sub_field('question_name'); ?><br>
								<span><?php echo the_sub_field('question_position'); ?></span>
							</div>
							<?php if( $counter == 0 ) { ?>
							<div class="expert__label">
								Ответ эксперта
							</div>
							<?php } ?>
						</div>
						
						<p class="question__description">
							<?php echo the_sub_field('question_content'); ?>
						</p>
						
						<!-- <a href="#" class="question__link">
							Предложить ваш ответ
						</a> -->
						
					</div>
					<?php $counter++; endwhile; ?>
					<?php endif; ?>

				</div>

				<div class="answers-form mt-50 mb-50">
					<div class="answers-form__wrapper">
						<div class="steps-form__title mb-20">
							Предложить свой ответ
						</div>
						<div class="form-input">
							<input type="text">
							<label>Фамилия, имя, отчество *</label>
						</div>
						<div class="form-input">
							<textarea name="" class="textarea mb-10" placeholder="Предложить свой ответ"></textarea>
						</div>
						<div class="answers-form__btn">
							<button class="btn btn_hover btn-more uppercase">
								Предложить ответ
							</button>
						</div>
					</div>
				</div>

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
		</div>
	</div>	
</section>
<?php endwhile; ?>
<?php get_footer();
