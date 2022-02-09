<?php
/**
 * Template Name: Gallery Page Template
 *
 * The template for displaying the galerie images
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<?php
				$gallery_images = get_field( 'gallery_images' );
				if ( $gallery_images ) : ?>
						<?php foreach ( $gallery_images as $image_id ) : ?>
							<div class="col-sm-6 col-md-6 gallery-image-wrapper">
								<a href="<?php echo esc_url( wp_get_attachment_image_url( $image_id, 'gallery-full-image' ) ); ?>" class="gallery-image" data-fancybox="gallery">
									<?php echo wp_get_attachment_image( $image_id, 'gallery-thumbnail-image' ); ?>
								</a>
							</div>
						<?php endforeach; ?>
				<?php endif; ?>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'before_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
