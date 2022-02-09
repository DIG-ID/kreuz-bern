<?php
/**
 * The custom theme tags file.
 */

/**
 * This function open the main content.
 */
function kreuz_before_main_content() {
	?>
	<div id="main-content" class="col-12 col-sm-12 col-md-12 col-lg-9 px-15">
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
	<aside id="main-sidebar" class="col-12 col-sm-12 col-md-12 col-lg-3 px-15">
	<?php
}

add_action( 'before_main_sidebar', 'kreuz_before_main_sidebar' );

/**
 * This function closes the main sidebar content.
 */
function kreuz_after_main_sidebar() {
	?>
	</aside><!-- #main-sidebar -->
	<?php
}

add_action( 'after_main_sidebar', 'kreuz_after_main_sidebar' );


/**
 * This function opens the wrapper of all the content.
 */
function kreuz_open_wrapper() {
	?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container px-md-0">
				<div class="row">
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

