<?php
/**
 * Template Name: About Us Template
 *
 * The template for displaying all about us page
 */

get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div id="main-content" class="col-md-9 col-sm-9 col-xs-12">
					<section id="main-content__wrapper">
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
								<div class="block block-large block-image">
									<h2 class="block__title"><?php the_field( 'history_block_title' ); ?></h3>
									<p class="block__text"><?php the_field( 'history_block_description' ); ?></p>
									<a class="block__btn" href="<?php the_field( 'history_block_button_link' ); ?>"><?php the_field( 'history_block_button' ); ?></a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="block block-large block-image">
										<h2 class="block__title"><?php the_field( 'team_block_title' ); ?></h3>
										<p class="block__text"><?php the_field( 'team_block_description' ); ?></p>
									</div>
							</div>
						</div>
					</section><!-- #main-content__wrapper -->
				</div>
				<aside id="main-sidebar" class="col-md-3 col-sm-4 col-xs-12">
					<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
				</aside><!-- #main-sidebar -->
			</div><!-- .row -->
		</div><!-- .container -->
	</main>
</div><!-- #primary -->
<?php
get_footer();
