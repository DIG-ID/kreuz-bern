<?php
/**
 * The template for displaying rooms single posts
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
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
								<?php icl_link_to_element( 40, 'post', esc_html__( 'ZURÜCK ZUR ÜBERSICHT', 'kreuz-bern' ) ); ?>
								<!--<a class="block-image__btn" href=""><?php esc_html_e( 'ZURÜCK ZUR ÜBERSICHT', 'kreuz-bern' ); ?></a>-->
								<a class="block-image__btn block-image__btn--dark" href="<?php the_field( 'book_button_link' ); ?>" target="_blank"><?php the_field( 'book_button' ); ?></a>
							</div>
						</div>
					</article>
				</div>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
				<div class="block">
					<h3 class="block__title"><?php esc_html_e( 'Ausstattung', 'kreuz-bern' ); ?></h3>
					<p class="block__text"><?php the_field( 'amenities' ); ?></p>
				</div>
			</div>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
