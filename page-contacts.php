<?php
/**
 * Template Name: Contacts Page Template
 *
 * The template for displaying all contact page
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<section id="main-content" class="col-md-9 col-sm-9 col-xs-12">
					<div id="main-content__wrapper" >
						<div class="row">
							<div class="col-md-12">
								<section class="google-maps-wrapper">
									<img src="https://via.placeholder.com/958x628/fff.png?text=The+Map+Goes+Here" alt="">
								</section>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="block block-large">
									<h3 class="block__title"><?php the_field( 'location_block_title' ); ?></h3>
									<p class="block__text"><?php the_field( 'location_block_description' ); ?></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="block block-large">
									<h3 class="block__title"><?php the_field( 'howto_block_title_copy' ); ?></h3>
									<p class="block__text"><?php the_field( 'howto_block_description_copy' ); ?></p>
								</div>
							</div>
						</div>
					</div><!-- #main-section__wrapper -->
				</section><!-- #main-content -->
				<aside id="main-sidebar" class="col-md-3 col-sm-4 col-xs-12">
					<div class="block block-inverted">
						<h3 class="block__title"><?php the_field( 'contact_block_title' ); ?></h3>
						<p class="block__text"><?php the_field( 'contact_block_content' ); ?></p>
						<a class="block__btn" href="mailto:<?php the_field( 'contact_block_button_url' ); ?>"><?php the_field( 'contact_block_button_text' ); ?></a>
					</div>
					<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
				</aside><!-- #main-sidebar -->
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
