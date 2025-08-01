<?php
/**
 * Header file for Kreuz Theme.
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<meta name="gloreftag" content="itJt7UcYMpzD+2wZQUQVoA=="/>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-K6NMG4G6');</script>
		<!-- End Google Tag Manager -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-X4WP8TJ1PD"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('set', {
					'linker': {
							'accept_incoming': true,
							'domains': ['www.simplebooking.it']
					},
					'anonymize_ip': true,
							'transport_type': 'beacon'
			});
			gtag('config', 'UA-110180671-1');
			gtag('config', 'G-X4WP8TJ1PD');
		</script>
		<!-- GLOBONET Tracking Code GA4 -->
		<script>
			var _paq = _paq || [];
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			(function() {
				var u="//tracking.globonet.ch/";
				_paq.push(['setTrackerUrl', u+'piwik.php']);
				_paq.push(['setSiteId', '609']);
				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
				g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
			})();
		</script>
		<noscript><p><img src="//tracking.globonet.ch/piwik.php?idsite=609" style="border:0;" alt="" /></p></noscript>
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-9DQMVM4NY1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-9DQMVM4NY1');
		</script>
		<!-- End GLOBONET Tracking Code GA4 -->

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	<?php do_action( 'wp_body_open' ); ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6NMG4G6"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="site" id="page">

		<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

				<nav class="navbar navbar-expand-xl navbar-dark bg-primary">

							<!-- Your site title as branding in the menu -->
							<?php if ( ! has_custom_logo() ) { ?>

								<?php if ( is_front_page() && is_home() ) : ?>

									<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

								<?php else : ?>

									<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

								<?php endif; ?>


							<?php } else {
								echo '<h1 class="screen-reader-text">' . get_the_title() . '</h1>';
								the_custom_logo();
							} ?><!-- end custom logo -->

							<button id="opener" type="button" class="navbar-toggle" onclick="menuMobile()">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						<!-- The WordPress Menu goes here -->
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav ml-auto',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 2,
								'walker'          => '',
							)
						);
						?>
						<?php do_action( 'wpml_add_language_selector' ); ?>
						<?php
						$simple_booking_link = '';
						if ( 'de' === ICL_LANGUAGE_CODE ) :
							$simple_booking_link = 'https://www.simplebooking.it/ibe2/hotel/3565?lang=DE&cur=CHF';
						endif;

						if ( 'en' === ICL_LANGUAGE_CODE ) :
							$simple_booking_link = 'https://www.simplebooking.it/ibe2/hotel/3565?lang=EN&cur=CHF';
						endif;

						if ( 'fr' === ICL_LANGUAGE_CODE ) :
							$simple_booking_link = 'https://www.simplebooking.it/ibe2/hotel/3565?lang=FR&cur=CHF';
						endif;
						?>
						<a href="<?php echo esc_url( $simple_booking_link ); ?>" target="_blank" class="button button__blue button__booking button__desktop"><?php esc_html_e( 'BUCHEN', 'kreuz-bern' ); ?></a>
						<?php get_template_part( 'template-parts/menu-mobile' ); ?>
				</nav><!-- .site-navigation -->

			</div><!-- #wrapper-navbar end -->
