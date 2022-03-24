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
$offers_query = new WP_Query( $offers_args ); ?>
	<!-- <h1 class="screen-reader-text"><?php //the_title(); ?></h1> -->
	<?php do_action( 'wrapper_open' ); ?>
		<div class="col-12">
			<h1 class="page-title-example"><?php the_title(); ?></h1>
		</div>
		<?php do_action( 'before_main_content' ); ?>
				<div class="row">
					<?php
					if ( $offers_query->have_posts() ) :
						while ( $offers_query->have_posts() ) :
							$offers_query->the_post();
							?>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
								<article class="block-image block-image--two-btns">
									<a href="<?php echo esc_url( get_permalink() ); ?>">
										<?php the_post_thumbnail( 'main-block-thumbnail' ); ?>
									</a>
									<div class="block-image__content">
										<h2 class="block-image__title"><?php the_title(); ?></h2>
										<p class="block-image__text"><?php the_field( 'description' ); ?></p>
										<div class="block-image__btn--wrapper">
											<a class="block-image__btn" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Details', 'kreuz-bern' ); ?></a>
											<a class="block-image__btn block-image__btn--dark" href="<?php the_field( 'book_button_link' ); ?>" target="_blank"><?php the_field( 'book_button' ); ?></a>
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
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
