<?php
/**
 * Template Name: Rooms Page Template
 *
 * The template for displaying all content of the rooms page archive
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<?php
				$rooms_query_args = array(
					'post_type' => 'rooms',
					'nopaging'  => true,
					'order'     => 'DESC',
					'orderby'   => 'date',
				);
				$rooms_query = new WP_Query( $rooms_query_args );
				if ( $rooms_query->have_posts() ) :
					while ( $rooms_query->have_posts() ) :
						$rooms_query->the_post();
						?>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
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
											<?php foreach ( $room_sliders as $room_slider ) : ?>
												<a href="<?php echo esc_url( get_permalink() ); ?>" class="swiper-slide">
													<?php echo wp_get_attachment_image( $room_slider, 'main-block-thumbnail' ); ?>
												</a>
											<?php endforeach; ?>
										</div>
										<div class="swiper-button-prev swiper-button__rooms"></div>
										<div class="swiper-button-next swiper-button__rooms"></div>
									</div>
									<?php
								endif;
								?>
								<div class="main-block__content">
									<h2 class="main-block__title"><?php the_title(); ?></h2>
									<p class="main-block__text"><?php the_field( 'page_description' ); ?></p>
									<div class="main-block__btn--wrapper">
										<a href="<?php the_permalink(); ?>" class="main-block__btn "><?php esc_html_e( 'Details', 'kreuz-bern' ); ?></a>
										<a href="<?php the_field( 'book_button_link' ); ?>" class="main-block__btn main-block__btn--dark"><?php the_field( 'book_button' ); ?></a>
									</div>
								</div>
							</article>
						</div>
						<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 px-15">
					<div class="main-block main-block__informations main-block--inverted">
						<div class="main-block__content">
							<h2 class="main-block__title"><?php the_field( 'informations_title' ); ?></h2>
							<?php the_field( 'informations_content' ); ?>
						</div>
					</div>
				</div>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
