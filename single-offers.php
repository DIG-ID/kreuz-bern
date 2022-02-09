<?php
/**
 * The template for displaying offers single posts
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<div class="col-12">
					<article class="block-image block-image--two-btns">
						<?php
						$offers_banner      = get_field( 'image' );
						$offers_banner_size = 'offers-banner-block-image';
						if ( $offers_banner ) :
							echo wp_get_attachment_image( $offers_banner, $offers_banner_size );
						endif;
						?>
						<div class="block-image__content">
							<h1 class="block-image__title"><?php the_title(); ?></h1>
							<div class="block-image__text"><?php the_content(); ?></div>
							<div class="block-image__btn--wrapper">
								<?php icl_link_to_element( 42, 'post', esc_html__( 'ZURÜCK ZUR ÜBERSICHT', 'kreuz-bern' ) ); ?>
								<!--<a class="block-image__btn" href="<?php ?>"><?php esc_html_e( 'ZURÜCK ZUR ÜBERSICHT', 'kreuz-bern' ); ?></a>-->
								<a class="block-image__btn block-image__btn--dark" href="<?php the_field( 'book_button_link' ); ?>" target="_blank"><?php the_field( 'book_button' ); ?></a>
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
