<?php
/**
 * Template Name: Contacts Page Template
 *
 * The template for displaying all contact page
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<div class="col-md-12">
					<section class="google-maps-wrapper">
						<img src="https://via.placeholder.com/958x628/fff.png?text=The+Map+Goes+Here" alt="">
					</section>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="block block-large">
						<h3 class="block__title"><?php the_field( 'location_block_title' ); ?></h3>
						<p class="block__text"><?php the_field( 'location_block_description' ); ?></p>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="block block-large">
						<h3 class="block__title"><?php the_field( 'howto_block_title_copy' ); ?></h3>
						<p class="block__text"><?php the_field( 'howto_block_description_copy' ); ?></p>
					</div>
				</div>
			</div>
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<div class="block block-inverted">
				<h3 class="block__title"><?php the_field( 'contact_block_title' ); ?></h3>
				<p class="block__text"><?php the_field( 'contact_block_content' ); ?></p>
				<a class="block__btn" href="mailto:<?php the_field( 'contact_block_button_url' ); ?>"><?php the_field( 'contact_block_button_text' ); ?></a>
			</div>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
