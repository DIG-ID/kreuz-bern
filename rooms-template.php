<?php /* Template Name: Kreuz-roomspage-template */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div id="main-content" class="col-md-9 col-sm-9 col-xs-12">
					<section id="main-content__wrapper" class="main__section--wrapper">
						<div class="row">
							<?php $tournament_query_args = array(
	              'post_type' => 'rooms',
	              'nopaging' => true,
	              'order' => 'ASC',
	              'orderby' => 'date' )
		          ?>
							<?php $tournament_query = new WP_Query( $tournament_query_args );
							if ( $tournament_query->have_posts() ) :
							while ( $tournament_query->have_posts() ) : $tournament_query->the_post(); ?>
							<div class="col-md-6">
								<div class="main-block" id="home__box--1">
									<?php $room_sliders = get_field('gallery_slider');
									if( $room_sliders ): ?>
									<div class="swiper-container-rooms">
									  <div class="swiper-wrapper">
											<?php foreach( $room_sliders as $room_slider ): ?>
									    	<div class="swiper-slide"><img class="main-block__tpic" alt="zimmer picture" src="<?php echo esc_url($room_slider['url']); ?>"></div>
											<?php endforeach; ?>
									  </div>
										<div class="swiper-button-prev swiper-button__rooms"></div>
										<div class="swiper-button-next swiper-button__rooms"></div>
									</div>
									<?php endif; ?>
									<p class="main-block__title"><?php the_field( 'title' ); ?></p>
									<p class="main-block__text"><?php the_field( 'page_description' ); ?></p>
									<div class="main-block__btn-wrapper">
										<a href="<?php the_permalink(); ?>"><button class="main-block__btn button button__white">Details</button></a>
										<a href="<?php the_field( 'book_button_link' ); ?>"><button class="main-block__btn button button__blue"><?php the_field( 'book_button' ); ?></button></a>
									</div>
								</div>
							</div>
						<?php endwhile;wp_reset_postdata();endif; ?>
						</div><!-- .row -->
					</section><!-- #main-content__wrapper -->
				</div><!-- #main-content-->
				<aside id="main-sidebar" class="col-md-3 col-sm-4 col-xs-12">
					<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
				</aside><!-- #main-sidebar -->
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
