<?php
/**
 * The template for displaying Nachhaltigkeit single posts
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 px-15">
					<article class="block-image">
						<?php
						$image      = get_field( 'image' );
						$image_size = 'offers-banner-block-image';
						if ( $image ) :
							echo wp_get_attachment_image( $image, $image_size );
						endif;
						?>
						<div class="block-image__content">
							<h1 class="block-image__title"><?php the_title(); ?></h1>
							<p class="block-image__subtitle"><?php the_field( 'subtitle' ); ?></p>
							<div class="block-image__text"><?php the_field( 'description' ); ?></div>
							<div class="block-image__btn--wrapper mt-5">
								<a class="block-image__btn" href="<?php echo esc_url( get_post_type_archive_link( 'nachhaltigkeit' ) ); ?>"><?php esc_html_e( 'ZURÜCK ZUR ÜBERSICHT', 'kreuz-bern' ); ?></a>
							</div>
						</div>
					</article>
				</div>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
