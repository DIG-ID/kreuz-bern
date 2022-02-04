<?php
/**
 * Template Name: About Us Page Template
 *
 * The template for displaying all about us page
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container px-0">
			<div class="row">
				<section id="main-content" class="col-md-9 col-sm-9 col-xs-12">
					<div id="main-content__wrapper">
						<div class="row">
							<div class="col-md-12">
								<div class="block block-wide">
									<h1 class="block__title"><?php the_field( 'page_title' ); ?></h1>
									<p class="block__text"><?php the_field( 'page_description' ); ?></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="block-image">
									<?php
									$history_image = get_field( 'history_block_image' );
									$team_image    = get_field( 'team_block_image' );
									$size          = 'main-block-thumbnail';
									?>
									<a href="<?php the_field( 'history_block_button_link' ); ?>">
										<?php
										if ( $history_image ) :
											echo wp_get_attachment_image( $history_image, $size );
										endif;
										?>
									</a>
									<div class="block-image__content">
										<h2 class="block-image__title"><?php the_field( 'history_block_title' ); ?></h2>
										<p class="block-image__text"><?php the_field( 'history_block_description' ); ?></p>
										<a class="block-image__btn" href="<?php the_field( 'history_block_button_link' ); ?>"><?php the_field( 'history_block_button' ); ?></a>
									</div>
								</div><!-- .block-image -->
							</div><!-- .col -->
							<div class="col-md-6">
								<div class="block-image">
									<?php
									if ( $team_image ) :
										echo wp_get_attachment_image( $team_image, $size );
									endif;
									?>
									<div class="block-image__content">
										<h2 class="block-image__title"><?php the_field( 'team_block_title' ); ?></h2>
										<p class="block-image__text"><?php the_field( 'team_block_description' ); ?></p>
									</div>
								</div><!-- block-image -->
							</div><!-- .col -->
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
