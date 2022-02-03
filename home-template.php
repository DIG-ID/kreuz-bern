<?php /* Template Name: Kreuz-homepage-template */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<section class="home-banner">
		<video class="home-banner__video" playsinline="playsinline" loop="" autoplay="autoplay" muted="muted">
			<source src="<?php echo the_field( 'video_link' ); ?>" type="video/mp4">
		</video>
	</section>
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
			comments_template();
			}
			// End of the loop.
		endwhile;
		?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9 col-xs-12 main__section">
						<div class="main__section--wrapper">
							<div class="row">
								<div class="col-md-6">
									<div class="main-block" id="home__box--1">
										<img class="tpic" alt="zimmer picture" src="<?php the_field( 'zimmer_block_image' ); ?>" width="461" height="327">
										<p class="main-block__title"><?php the_field( 'zimmer_block_title' ); ?></p>
										<p class="main-block__text"><?php the_field( 'zimmer_block_text' ); ?></p>
										<div class="main-block__btn-wrapper">
											<a href="<?php the_field( 'zimmer_block_details_button_link' ); ?>"><button class="main-block__btn button button__white"><?php the_field( 'zimmer_block_details_button' ); ?></button></a>
											<a href="<?php the_field( 'zimmer_block_book_button_link' ); ?>"><button class="main-block__btn button button__blue"><?php the_field( 'zimmer_block_book_button' ); ?></button></a>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="main-block" id="home__box--2">
										<img class="tpic" alt="hotel picture" src="<?php the_field( 'hotel_block_image' ); ?>" width="461" height="327">
										<p class="main-block__title"><?php the_field( 'hotel_block_title' ); ?></p>
										<p class="main-block__text"><?php the_field( 'hotel_block_text' ); ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="main-block" id="home__box--3">
										<img class="tpic" alt="offers picture" src="<?php the_field( 'offers_block_image' ); ?>" width="461" height="327">
										<p class="main-block__title"><?php the_field( 'offers_block_title' ); ?></p>
										<p class="main-block__text"><?php the_field( 'offers_block_text' ); ?></p>
										<div class="main-block__btn-wrapper">
											<a href="<?php the_field( 'offers_block_details_button_link' ); ?>"><button class="main-block__btn button button__white"><?php the_field( 'offers_block_details_button' ); ?></button></a>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="main-block" id="home__box--4">
										<img class="tpic" alt="zimmer picture" src="<?php the_field( 'restaurant_block_image' ); ?>" width="461" height="327">
										<p class="main-block__title"><?php the_field( 'restaurant_block_title' ); ?></p>
										<p class="main-block__text"><?php the_field( 'restaurant_block_text' ); ?></p>
										<div class="main-block__btn-wrapper">
											<a href="<?php the_field( 'restaurant_block_details_button_link' ); ?>"><button class="main-block__btn button button__white"><?php the_field( 'restaurant_block_details_button' ); ?></button></a>
										</div>
									</div>
								</div>
							</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-1 sidebar float__right">
						<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</section>

	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
