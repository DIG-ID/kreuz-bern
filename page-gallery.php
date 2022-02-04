<?php
/**
 * Template Name: Gallery Page Template
 *
 * The template for displaying the galerie images
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container px-0">
			<div class="row">
				<section id="main-content" class="col-md-9 col-sm-9 col-xs-12">
					<div id="main-content__wrapper">
						<div class="row">
						<?php
						$gallery_images = get_field( 'gallery_images' );
						if ( $gallery_images ) : ?>
								<?php foreach ( $gallery_images as $image_id ) : ?>
									<div class="col-sm-6 col-md-6 gallery-image-wrapper">
										<a href="<?php echo esc_url( wp_get_attachment_image_url( $image_id, 'full' ) ); ?>" class="gallery-image" data-fancybox="gallery">
											<?php echo wp_get_attachment_image( $image_id, 'gallery-thumbnail-image' ); ?>
										</a>
									</div>
								<?php endforeach; ?>
						<?php endif; ?>
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
