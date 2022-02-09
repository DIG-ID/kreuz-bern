<?php
/**
 * The template for displaying the footer.
 *
 * @package kreuzbern
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
		<footer id="footer-wrapper">
			<div class="container">
				<div class="row">
					<?php
					for ( $x = 1; $x <= 5; $x++ ) {
						if ( $x != 3 ) :
							echo '<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-2 px-15 footer-block">' . wp_kses_post( get_theme_mod( 'block-' . $x ) ) . '</div>';
						else :
							echo '<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-2 offset-xl-1 px-15 footer-block">' . wp_kses_post( get_theme_mod( 'block-' . $x ) ) . '</div>';
						endif;
					}
					?>
				</div><!-- row end -->
				<div class="row justify-content-center">
					<div class="col-1">
						<a class="scrollToTop" href="javascript:void(0);">
							<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-up" class="svg-inline--fa fa-chevron-up fa-w-14 back-to-top" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#fff" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg>
						</a>
					</div>
				</div>
			</div><!-- container end -->
		</footer><!-- wrapper end -->

		</div><!-- #page we need this extra closing tag here -->
		<?php get_template_part( 'template-parts/simple-booking-script' ); ?>
		<?php get_template_part( 'template-parts/google-maps' ); ?>
		<?php wp_footer(); ?>
	</body>

</html>
