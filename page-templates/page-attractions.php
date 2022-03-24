<?php
/**
 * Template Name: Attractions Page Template
 *
 * The template for displaying attractions archive posts
 */

get_header();

$args      = array(
	'posts_per_page' => 4,
	'post_type'      => 'attractions',
	'nopaging'       => true,
	'order'          => 'DESC',
	'orderby'        => 'date',
);
$the_query = new WP_Query( $args ); ?>
	<!--- <h1 class="screen-reader-text"><?php //the_title(); ?></h1> -->
	<?php do_action( 'wrapper_open' ); ?>
		<div class="col-12">
			<h1 class="page-title-example"><?php the_title(); ?></h1>
		</div>
		<?php do_action( 'before_main_content' ); ?>

			<div class="row">
				<?php
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
								<article class="block-image">
									<?php if ( get_field( 'banner_check' ) ) : ?>
										<span class="block-image__badge"><?php the_field( 'banner_content' ); ?></span>
									<?php endif; ?>
									<a href="<?php the_field( 'details_button_link' ); ?>">
										<?php the_post_thumbnail( 'main-block-thumbnail' ); ?>
									</a>
									<div class="block-image__content">
										<h2 class="block-image__title"><?php the_title(); ?></h2>
										<span class="block-image__subtitle" ><?php the_field( 'subtitle' ); ?></span>
										<p class="block-image__text"><?php the_field( 'description' ); ?></p>
										<a class="block-image__btn" href="<?php the_field( 'details_button_link' ); ?>" target="_blank"><?php the_field( 'details_button' ); ?></a>
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
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 px-15">
					<section class="google-maps-wrapper">
						<?php if ( have_rows( 'locations' ) ) : ?>
							<div class="acf-map map-attractions" data-zoom="16">
								<?php while ( have_rows( 'locations' ) ) : the_row();
									$location  = get_sub_field( 'attractions_map' );
									$map_title = get_sub_field( 'title' );
									?>
									<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
											<h4><?php echo esc_html( $map_title ); ?></h4>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</section>
				</div>
			</div>
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
