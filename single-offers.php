<?php
/**
 * The template for displaying offers single posts
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
								<article class="block-image block-image--two-btns block-image--wide">
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
											<a class="block-image__btn" href="<?php ?>"><?php esc_html_e( 'ZURÜCK ZUR ÜBERSICHT', 'kreuz-bern' ); ?></a>
											<a class="block-image__btn block-image__btn--dark" href="<?php the_field( 'book_button_link' ); ?>"><?php the_field( 'book_button' ); ?></a>
										</div>
									</div>
								</article>
							</div>
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
