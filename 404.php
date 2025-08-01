<?php
/**
 * The template for displaying the 404 error page.
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container px-0">
			<div class="row">
				<section id="main-content" class="col-md-12 col-sm-12 col-xs-12">
					<div id="main-content__wrapper">
						<div class="not-found">
							<div class="not-found__title">
								<h1>404!<br><span>Error</span></h1>
							</div>
							<div class="not-found__content">
								<p class="not-found__subtitle"><?php esc_html_e( 'Entschuldigung!', 'kreuz-bern' ); ?></p>
								<p class="not-found__description"><?php _e( 'DIE SEITE, DIE SIE SUCHEN,<br>KONNTE NICHT GEFUNDEN WERDEN.', 'kreuz-bern' ); ?></p>
								<a href="<?php echo esc_url( apply_filters( 'wpml_home_url', get_home_url() ) ); ?>" class="not-found__back-to-home">
									<?php esc_html_e( 'Startseite', 'kreuz-bern' ); ?>
								</a>
							</div>
						</div>
					</div><!-- #main-content__wrapper -->
				</section><!-- #main-content -->
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
