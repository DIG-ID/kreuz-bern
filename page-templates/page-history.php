<?php
/**
 * Template Name: History Page Template
 *
 * The template for displaying the history page content
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>
		<div class="col-12 px-15">
			<h1 class="page-title-example"><?php the_title(); ?></h1>
		</div>
		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 px-15">
					<article class="block-image block-image--slider">
						<?php
						$history_sliders = get_field( 'history_slider' );
						if ( $history_sliders ) :
							?>
							<div class="swiper-container-history">
								<div class="swiper-wrapper">
									<?php foreach ( $history_sliders as $history_slider ) : ?>
										<div class="swiper-slide">
											<img class="main-block__tpic" alt="zimmer picture" src="<?php echo esc_url( $history_slider['url'] ); ?>">
										</div>
									<?php endforeach; ?>
								</div>
								<div class="swiper-button-prev swiper-button__history"></div>
								<div class="swiper-button-next swiper-button__history"></div>
								<div class="swiper-pagination"></div>
							</div>
							<?php
						endif;
						?>
						<div class="block-image__content">
							<h1 class="block-image__title"><?php the_field( 'history_title' ); ?></h1>
							<p class="block-image__subtitle"><?php the_field( 'history_subtitle' ); ?></p>
							<div class="block-image__text"><?php the_content(); ?></div>
						</div>
					</article>
				</div>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
				<div class="block block-inverted block-timeline">
					<h3 class="block__title"><?php the_field( 'timeline_title' ); ?></h3>
					<p class="block__text"><?php the_field( 'timeline_content' ); ?></p>
				</div>
			</div>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
