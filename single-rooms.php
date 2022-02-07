<?php
/**
 * The template for displaying rooms single posts
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container px-0">
			<div class="row">
				<section id="main-content" class="col-md-9 col-sm-9 col-xs-12">
					<div id="main-content__wrapper">
						<div class="row">
							<div class="col-12">
								<article class="block-image block-image--slider">
									<?php
									$single_room_sliders = get_field( 'gallery_slider' );
									if ( $single_room_sliders ) :
										?>
										<div class="swiper-container-single-room">
											<div class="swiper-wrapper">
												<?php foreach ( $single_room_sliders as $single_room_slider ) : ?>
													<div class="swiper-slide">
														<?php echo wp_get_attachment_image( $single_room_slider, 'full' ); ?>
													</div>
												<?php endforeach; ?>
											</div>
											<div class="swiper-button-prev swiper-button__single-room"></div>
											<div class="swiper-button-next swiper-button__single-room"></div>
											<div class="swiper-pagination"></div>
										</div>
										<?php
									endif;
									?>
									<div class="block-image__content">
										<h1 class="block-image__title"><?php the_title(); ?></h1>
										<p class="block-image__subtitle"><?php the_field( 'subtitle' ); ?></p>
										<div class="block-image__text"><?php the_content(); ?></div>
										<div class="block-image__btn--wrapper">
											<?php //get_page_link(40); ?>
											<?php //icl_link_to_element( 40, 'post', esc_html__( 'ZURÜCK ZUR ÜBERSICHT', 'kreuz-bern' ) ); ?>
											<a class="block-image__btn" href=""><?php esc_html_e( 'ZURÜCK ZUR ÜBERSICHT', 'kreuz-bern' ); ?></a>
											<a class="block-image__btn block-image__btn--dark" href="<?php the_field( 'book_button_link' ); ?>" target="_blank"><?php the_field( 'book_button' ); ?></a>
										</div>
									</div>
								</article>
							</div>
						</div><!-- .row -->
					</div><!-- #main-content__wrapper -->
				</section><!-- #main-content -->
				<aside id="main-sidebar" class="col-md-3 col-sm-4 col-xs-12">
					<div class="block">
						<h3 class="block__title"><?php esc_html_e( 'Ausstattung', 'kreuz-bern' ); ?></h3>
						<p class="block__text"><?php the_field( 'amenities' ); ?></p>
					</div>
					<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
				</aside><!-- #main-sidebar -->
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
