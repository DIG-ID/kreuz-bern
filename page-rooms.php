<?php
/**
 * Template Name: Rooms Page Template
 *
 * The template for displaying all content of the rooms page archive
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container px-0">
			<div class="row">
				<div id="main-content" class="col-md-9 col-sm-9 col-xs-12">
					<section id="main-content__wrapper">
						<div class="row">
							<?php
							$rooms_query_args = array(
								'post_type' => 'rooms',
								'nopaging'  => true,
								'order'     => 'ASC',
								'orderby'   => 'date',
							);
							$rooms_query = new WP_Query( $rooms_query_args );
							if ( $rooms_query->have_posts() ) :
								while ( $rooms_query->have_posts() ) :
									$rooms_query->the_post();
									?>
									<div class="col-12 col-md-6">
										<article class="main-block">
											<?php if ( get_field( 'specials_banner_check' ) ) : ?>
												<div class="banner__circle"><?php the_field( 'specials_banner_content' ); ?></div>
											<?php endif; ?>
											<?php
											$room_sliders = get_field( 'gallery_slider' );
											if ( $room_sliders ) :
												?>
												<div class="swiper-container-rooms">
													<div class="swiper-wrapper">
														<?php foreach( $room_sliders as $room_slider ): ?>
															<div class="swiper-slide"><img class="main-block__tpic" alt="zimmer picture" src="<?php echo esc_url($room_slider['url']); ?>"></div>
														<?php endforeach; ?>
													</div>
													<div class="swiper-button-prev swiper-button__rooms"></div>
													<div class="swiper-button-next swiper-button__rooms"></div>
												</div>
												<?php
											endif;
											?>
											<h2 class="main-block__title"><?php the_field( 'title' ); ?></h2>
											<p class="main-block__text"><?php the_field( 'page_description' ); ?></p>
											<div class="main-block__btn-wrapper">
												<a href="<?php the_permalink(); ?>"><button class="main-block__btn button button__white"><?php esc_html_e( 'Details', 'kreuz-bern' ); ?></button></a>
												<a href="<?php the_field( 'book_button_link' ); ?>"><button class="main-block__btn button button__blue"><?php the_field( 'book_button' ); ?></button></a>
											</div>
										</article>
									</div>
									<?php
								endwhile;
							endif;
							wp_reset_postdata();
							?>
							<div class="col-md-6">
								<div class="main-block informations-block">
									<h2 class="main-block__title inverted-color"><?php the_field( 'informations_title' ); ?></h2>
									<?php the_field( 'informations_content' ); ?>
								</div>
							</div>
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
<?php get_footer();
