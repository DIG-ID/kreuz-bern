<?php
/**
 * Template Name: Home Page Template
 *
 * The template for displaying all content of the homepage
 */

get_header(); ?>
<div id="primary" class="content-area">
	<section class="home-banner">
		<video class="home-banner__video" playsinline="playsinline" loop="" autoplay="autoplay" muted="muted">
			<source src="<?php the_field( 'video_link' ); ?>" type="video/mp4">
		</video>
		<div class="booking-bar__container">
			<?php
			if ( 'de' === ICL_LANGUAGE_CODE ) :
				?>
				<a href="https://www.simplebooking.it/ibe/hotelbooking/search?hid=3565&lang=DE" target="_blank" class="button button__blue button__booking button__mobile"><?php esc_html_e( 'BUCHEN', 'kreuz-bern' ); ?></a>
				<div id="sb-container"></div>
				<?php
			elseif ( 'en' === ICL_LANGUAGE_CODE ) :
				?>
				<a href="https://www.simplebooking.it/ibe/hotelbooking/search?hid=3565&lang=EN" target="_blank" class="button button__blue button__booking button__mobile"><?php esc_html_e( 'BUCHEN', 'kreuz-bern' ); ?></a>
				<div id="sb-container-en"></div>
				<?php
			elseif ( 'fr' === ICL_LANGUAGE_CODE ) :
				?>
				<a href="https://www.simplebooking.it/ibe/hotelbooking/search?hid=3565&lang=FR" target="_blank" class="button button__blue button__booking button__mobile"><?php esc_html_e( 'BUCHEN', 'kreuz-bern' ); ?></a>
				<div id="sb-container-fr"></div>
				<?php
			endif;
			?>
		</div>
	</section>
	<main id="main" class="site-main" role="main">
		<h1 class="screen-reader-text"><?php echo esc_html( get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ) ); ?></h1>
		<div class="container">
			<div class="row">
				<?php do_action( 'before_main_content' ); ?>
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
							<div class="main-block" id="home__box--1">
								<?php if ( get_field( 'zimmer_block_banner_check' ) ) : ?>
									<div class="banner__circle"><?php the_field( 'zimmer_block_banner_content' ); ?></div>
								<?php endif; ?>
								<a href="<?php the_field( 'zimmer_block_details_button_link' ); ?>">
									<img class="main-block__tpic" alt="zimmer picture" src="<?php the_field( 'zimmer_block_image' ); ?>">
								</a>
								<div class="main-block__content">
									<h2 class="main-block__title"><?php the_field( 'zimmer_block_title' ); ?></h2>
									<p class="main-block__text"><?php the_field( 'zimmer_block_text' ); ?></p>
									<div class="main-block__btn--wrapper">
										<a href="<?php the_field( 'zimmer_block_details_button_link' ); ?>" class="main-block__btn"><?php the_field( 'zimmer_block_details_button' ); ?></a>
										<a href="<?php the_field( 'zimmer_block_book_button_link' ); ?>" target="_blank" class="main-block__btn main-block__btn--dark"><?php the_field( 'zimmer_block_book_button' ); ?></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
							<div class="main-block" id="home__box--2">
								<?php if ( get_field( 'hotel_block_banner_check' ) ) : ?>
									<div class="banner__circle"><?php the_field( 'hotel_block_banner_content' ); ?></div>
								<?php endif; ?>
								<img class="main-block__tpic" alt="hotel picture" src="<?php the_field( 'hotel_block_image' ); ?>">
								<div class="main-block__content">
									<h2 class="main-block__title"><?php the_field( 'hotel_block_title' ); ?></h2>
									<p class="main-block__text"><?php the_field( 'hotel_block_text' ); ?></p>
								</div>
							</div>
						</div>
					</div><!-- .row -->
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
							<div class="main-block" id="home__box--3">
								<?php if ( get_field( 'offers_block_banner_check' ) ) : ?>
									<div class="banner__circle"><?php the_field( 'offers_block_banner_content' ); ?></div>
								<?php endif; ?>
								<a href="<?php the_field( 'offers_block_details_button_link' ); ?>">
									<img class="main-block__tpic" alt="offers picture" src="<?php the_field( 'offers_block_image' ); ?>">
								</a>
								<div class="main-block__content">
									<h2 class="main-block__title"><?php the_field( 'offers_block_title' ); ?></h2>
									<p class="main-block__text"><?php the_field( 'offers_block_text' ); ?></p>
									<div class="main-block__btn--wrapper">
										<a href="<?php the_field( 'offers_block_details_button_link' ); ?>" class="main-block__btn "><?php the_field( 'offers_block_details_button' ); ?></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
							<div class="main-block" id="home__box--4">
								<?php if ( get_field( 'resturant_block_banner_check' ) ) : ?>
									<div class="banner__circle"><?php the_field( 'resturant_block_banner_content' ); ?></div>
								<?php endif; ?>
								<a href="<?php the_field( 'restaurant_block_details_button_link' ); ?>">
									<img class="main-block__tpic" alt="restaurant picture" src="<?php the_field( 'restaurant_block_image' ); ?>">
								</a>
								<div class="main-block__content">
									<h2 class="main-block__title"><?php the_field( 'restaurant_block_title' ); ?></h2>
									<p class="main-block__text"><?php the_field( 'restaurant_block_text' ); ?></p>
									<div class="main-block__btn--wrapper">
										<a href="<?php the_field( 'restaurant_block_details_button_link' ); ?>" class="main-block__btn"><?php the_field( 'restaurant_block_details_button' ); ?></a>
									</div>
								</div>

							</div>
						</div>
					</div><!-- .row -->
				<?php do_action( 'after_main_content' ); ?>
				<?php do_action( 'before_main_sidebar' ); ?>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
						<div class="block block-inverted percentages__block">
							<?php echo do_shortcode( '[percentages-ca]' ); ?>
							<p class="block__text percentages__text"><?php the_field( 'satisfaction_ratio_block_text' ); ?></p>
						</div>
					</div>
					<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
				<?php do_action( 'after_main_sidebar' ); ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer();
