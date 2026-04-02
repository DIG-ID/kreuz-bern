<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue SimpleBooking SBSyncroBox for the current language only.
 * Initialises the widget once per language, avoiding "no container" console
 * errors that occur when all language instances are loaded simultaneously.
 */
add_action( 'wp_enqueue_scripts', function () {

	$map = [
		'de' => 'DE',
		'en' => 'EN',
		'fr' => 'FR',
	];

	$lang = $map[ ICL_LANGUAGE_CODE ] ?? 'DE';
	$l    = esc_js( $lang );

	// DE uses the default container (no MainContainerId); EN/FR use named ones.
	$main_container    = $lang === 'DE' ? null : 'sb-container-' . strtolower( $lang );
	$main_container_js = $main_container ? "MainContainerId: '" . esc_js( $main_container ) . "'," : '';

	// Bar container: always named, checked for existence before init.
	$bar_container = esc_js( 'sb-container-bar-' . strtolower( $lang ) );

	$styles = "
		FontFamily: '\"WalsheimThin\", cursive, sans-serif',
		Theme: 'light-pink',
		CustomColor: '#000000',
		CustomLabelColor: '#000000',
		CustomBGColor: '#FFF',
		CustomButtonColor: '#FFF',
		CustomButtonBGColor: '#263a54',
		CustomIntentSelectionDaysBGColor: '#263a54',
		CustomIntentSelectionColor: '#263a54',
		CustomIconColor: '#263a54',
		CustomButtonHoverBGColor: '#263a54'
	";

	$bar_styles = "
		FontFamily: '\"WalsheimThin\", cursive, sans-serif',
		Theme: 'light-pink',
		CustomColor: '#263a54',
		CustomLabelColor: '#263a54',
		CustomBGColor: '#FFFFFF',
		CustomButtonColor: '#FFF',
		CustomButtonBGColor: '#263a54',
		CustomIntentSelectionDaysBGColor: '#263a54',
		CustomIntentSelectionColor: '#263a54',
		CustomIconColor: '#263a54',
		CustomButtonHoverBGColor: '#263a54',
		CustomLabelHoverColor: '#263a54',
		CustomLinkColor: '#263a54',
		CustomBoxShadowColor: '#263a54',
		CustomBoxShadowColorFocus: '#263a54',
		CustomAddRoomBoxShadowColor: '#263a54',
		CustomAccentColor: '#263a54',
		CustomFieldBackgroundColor: '#FFFFFF',
		CustomWidgetBGColor: '#FFFFFF',
		CustomSelectedDaysColor: '#FFFFFF',
		CustomCalendarBackgroundColor: '#FFFFFF'
	";

	$inline = "
		(function (i, s, o, g, r, a, m) {
			i['SBSyncroBoxParam'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://cdn.simplebooking.it/search-box-script.axd?IDA=3565', 'SBSyncroBox');

		SBSyncroBox({
			CodLang: '{$l}',
			Currency: 'CHF',
			{$main_container_js}
			Styles: { {$styles} }
		});

		(function() {
			var barId = '{$bar_container}';
			if ( document.getElementById(barId) ) {
				SBSyncroBox({
					CodLang: '{$l}',
					Currency: 'CHF',
					MainContainerId: barId,
					Styles: { {$bar_styles} }
				});
			}
		})();
	";

	wp_register_script( 'simplebooking-syncrobox', false, [], null, true );
	wp_enqueue_script( 'simplebooking-syncrobox' );
	wp_add_inline_script( 'simplebooking-syncrobox', $inline, 'after' );

}, 20 );
