<?php
/**
 * The template for displaying all single posts
 *
 */
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?> 

<div class="breadcrumb">
	<div class="container">
        <ul class="breadcrumb__wrapper">
            <li class="breadcrumb__item"><a href="/<?php echo get_page_uri( 15 ); ?>">Кредитные карты</a></li>
            <li class="breadcrumb__item active"><?php the_title(); ?></li>
        </ul>
    </div>
</div>

<section class="credit-cards-single">
	<div class="container">
		
		<div class="card-single__wrapper">
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
			<div class="card-single__head">
				<div class="card-single__head_left">
					<h1>
						<?php the_title(); ?>
					</h1>
					<p class="bank-name">
						<?php the_field('bank-name');?>
					</p>
					<div class="bank-logo">
						<?php 
						$bankLogo = get_field('bank-logo');	
						if ($bankLogo): ?>
							<img src="<?php echo $bankLogo;?>" alt="#">
						<?php endif ?>
					</div>
				</div>
				<div class="card-single__head_right">
					<div class="cards__img">
						<?php the_post_thumbnail('',array('class' => 'img-responsive')); ?>
					</div>
					<a href="<?php the_field('bank-link');?>" class="btn btn_hover btn-more w-100 uppercase" tabindex="-1">
			 			Перейти на сайт
			 		</a>
				</div>
			</div>
			<div class="card-single__conditions row">

				<div  class="offer-card__text col-12 col-lg-4">
					<?php
					$percent = get_field('percent');
					if( $percent ): ?>
						<span>
							Ставка
						</span>
						<p class="range range-percent">
							<span><?php echo $percent['percent_number']; ?></span> <span></span> %
						</p>
						<p class="range-description">
							<?php echo $percent['percent_text']; ?>
						</p>
					<?php endif; ?>
				</div>

				<div class="offer-card__text col-12 col-lg-4">
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
				
				<div class="col-4">
					
				</div>

				<div class="offer-card__text col-12 col-lg-4">
					<?php
					$term = get_field('term');
					if( $term ): ?>
					<span>
						Скрок
					</span>
					<p class="range range-day">
						<span><?php echo $term['term_from'];?></span> - <span><?php echo $term['term_to'];?></span> дня
					</p>
					<p class="range-description">
						<?php echo $term['term_text'];?>
					</p>
					<?php endif; ?>
				</div>
			</div>
			<div class="card-single__description mb-20">
				<?php the_content(); ?>
			</div>
			
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
		<div class="text-center text-bottom">
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

</section>

<?php endwhile; ?>
<?php
get_footer();