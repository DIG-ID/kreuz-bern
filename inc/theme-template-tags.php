<?php
/**
 * The custom theme tags file.
 */

/**
 * This function open the main content.
 */
function kreuz_before_main_content() {
	?>
	<div id="main-content" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 px-15">
		<section id="main-content__wrapper">
	<?php
}

add_action( 'before_main_content', 'kreuz_before_main_content' );

/**
 * This function closes the main content.
 */
function kreuz_after_main_content() {
	?>
		</section><!-- #main-content__wrapper -->
	</div><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'kreuz_after_main_content' );

/**
 * This function open the main sidebar content.
 */
function kreuz_before_main_sidebar() {
	?>
	<aside id="main-sidebar" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 px-15">
		<div class="row">
	<?php
}

add_action( 'before_main_sidebar', 'kreuz_before_main_sidebar' );

/**
 * This function closes the main sidebar content.
 */
function kreuz_after_main_sidebar() {
	?>
	</div>
	</aside><!-- #main-sidebar -->
	<?php
}

add_action( 'after_main_sidebar', 'kreuz_after_main_sidebar' );


/**
 * This function opens the wrapper of all the content. px-md-0
 */
function kreuz_open_wrapper() {
	?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container ">
				<div class="row equal">
	<?php
}

add_action( 'wrapper_open', 'kreuz_open_wrapper' );

/**
 * This function closes the wrapper of all the content.
 */
function kreuz_close_wrapper() {
	?>
					</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
}

add_action( 'wrapper_close', 'kreuz_close_wrapper' );

/**
 * Get our socials from the theme customizer and display them.
 */
function kreuz_socials() {
	echo '<div class="socials-wrapper">';
	$facebook_url  = get_theme_mod( 'facebook_url' );
	$linkedin_url  = get_theme_mod( 'linkedin_url' );
	$twitter_url   = get_theme_mod( 'twitter_url' );
	$youtube_url   = get_theme_mod( 'youtube_url' );
	$instagram_url = get_theme_mod( 'instagram_url' );
	if ( ! empty( $facebook_url ) ) :
		echo '<a href="' , esc_url( $facebook_url ) , '" target="_blank" class="social-link social-link__facebook"><i class="fa-brands fa-facebook-f"></i></a>';
	endif;
	if ( ! empty( $instagram_url ) ) :
		echo '<a href="' , esc_url( $instagram_url ) , '" target="_blank" class="social-link social-link__instagram"><i class="fa-brands fa-instagram"></i></a>';
	endif;
	if ( ! empty( $linkedin_url ) ) :
		echo '<a href="' , esc_url( $linkedin_url ) , '" target="_blank" class="social-link social-link__linkedin"><i class="fa-brands fa-linkedin"></i></a>';
	endif;
	if ( ! empty( $youtube_url ) ) :
		echo '<a href="' , esc_url( $youtube_url ) , '" target="_blank" class="social-link social-link__youtube"><i class="fa-brands fa-youtube"></i></a>';
	endif;
	if ( ! empty( $twitter_url ) ) :
		echo '<a href="' , esc_url( $twitter_url ) , '" target="_blank" class="social-link social-link__twitter"><i class="fa-brands fa-twitter"></i></a>';
	endif;
	echo '</div>';
}

add_action( 'socials', 'kreuz_socials' );
