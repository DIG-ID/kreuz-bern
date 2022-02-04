<?php
/**
 * Template Name: History Page Template
 *
 * The template for displaying the history page content
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
					</div><!-- #main-content__wrapper -->
				</section><!-- #main-content -->
				<aside id="main-sidebar" class="col-md-3 col-sm-4 col-xs-12">
					<div class="block block-inverted block-timeline">
						<h3 class="block__title"><?php the_field( 'timeline_title' ); ?></h3>
						<p class="block__text"><?php the_field( 'timeline_content' ); ?></p>
					</div>
					<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
				</aside><!-- #main-sidebar -->
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
