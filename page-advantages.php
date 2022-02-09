<?php
/**
 * Template Name: Advantages Page Template
 *
 * The template for displaying advantages archive posts
 */

get_header();

$advantages_args  = array(
	'post_type' => 'advantages',
	'nopaging'  => true,
	'order'     => 'ASC',
	'orderby'   => 'date',
);
$advantages_query = new WP_Query( $advantages_args ); ?>

	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
				<div class="row">
					<?php
					if ( $advantages_query->have_posts() ) :
						while ( $advantages_query->have_posts() ) :
							$advantages_query->the_post();
							?>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
								<article class="block-image">
									<a href="<?php echo esc_url( get_permalink() ); ?>">
										<?php the_post_thumbnail( 'main-block-thumbnail' ); ?>
									</a>
									<div class="block-image__content">
										<h2 class="block-image__title"><?php the_title(); ?></h2>
										<div class="block-image__text"><?php the_content(); ?></div>
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
