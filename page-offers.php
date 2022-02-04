<?php
/**
 * Template Name: Offers Page Template
 *
 * The template for displaying offers archive posts
 */

get_header();

$offers_args  = array(
	'post_type' => 'offers',
	'nopaging'  => true,
	'order'     => 'DESC',
	'orderby'   => 'date',
);
$offers_query = new WP_Query( $offers_args );
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<section id="main-content" class="col-md-9 col-sm-9 col-xs-12">
					<div id="main-content__wrapper">
						<div class="row">
							<?php
							if ( $offers_query->have_posts() ) :
								while ( $offers_query->have_posts() ) :
									$offers_query->the_post();
									?>
									<div class="col-md-6">
										<article class="block-image block-image--two-btns">
											<?php the_post_thumbnail( 'main-block-thumbnail' ); ?>
											<div class="block-image__content">
												<h2 class="block-image__title"><?php the_field( 'title' ); ?></h2>
												<p class="block-image__text"><?php the_field( 'description' ); ?></p>
												<div class="block-image__btn--wrapper">
													<a class="block-image__btn" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Details', 'kreuz-bern' ); ?></a>
													<a class="block-image__btn block-image__btn--dark" href="<?php the_field( 'book_button_link' ); ?>"><?php the_field( 'book_button' ); ?></a>
												</div>
											</div>
										</article><!-- .block-image -->
									</div><!-- .col -->
									<?php
								endwhile;
							endif;
							wp_reset_postdata();
							?>
						</div><!-- .row -->
					</div><!-- #main-content__wrapper -->
				</section><!-- #main-content -->
				<aside id="main-sidebar" class="col-md-3 col-sm-4 col-xs-12">
					<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
				</aside><!-- #main-sidebar -->
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
