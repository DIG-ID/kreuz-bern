<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package kreuzbern
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<footer id="footer-wrapper">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</div><!-- row end -->
	</div><!-- container end -->
</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
</body>

</html>
