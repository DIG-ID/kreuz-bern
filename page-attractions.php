<?php
/**
 * Template Name: Attractions Template
 *
 * The template for displaying attractions archive posts
 */

get_header();

$args      = array(
	'posts_per_page' => 4,
	'post_type'      => 'attractions',
);
$the_query = new WP_Query( $args );
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<section id="main-content" class="col-md-9 col-sm-9 col-xs-12">
					<div id="main-content__wrapper">
						<div class="row">
							<?php
							if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) :
									$the_query->the_post();
									?>
										<div class="col-md-6">
											<article class="block-image">
												<?php if ( get_field( 'banner_check' ) ) : ?>
													<span class="block-image__badge"><?php the_field( 'banner_content' ); ?></span>
												<?php endif; ?>
												<a href="<?php the_field( 'details_button_link' ); ?>">
													<?php the_post_thumbnail( 'main-block-thumbnail' ); ?>
												</a>
												<div class="block-image__content">
													<h2 class="block-image__title"><?php the_field( 'title' ); ?></h2>
													<span class="block-image__subtitle" ><?php the_field( 'subtitle' ); ?></span>
													<p class="block-image__text"><?php the_field( 'description' ); ?></p>
													<a class="block-image__btn" href="<?php the_field( 'details_button_link' ); ?>"><?php the_field( 'details_button' ); ?></a>
												</div>
											</article><!-- .block-image -->
										</div><!-- .col -->
									<?php
								endwhile;
							endif;
							wp_reset_postdata();
							?>
						</div><!-- .row -->
						<div class="row">
							<div class="col-12">
								<section class="google-maps-wrapper">
									<img src="https://via.placeholder.com/958x628/fff.png?text=The+Map+Goes+Here" alt="">
								</section>
							</div>
						</div>
					</div><!-- #main-content__wrapper -->
				</section><!-- #main-content -->
				<aside id="main-sidebar" class="col-md-3 col-sm-4 col-xs-12">
					<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
				</aside><!-- #main-sidebar -->
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
