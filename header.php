<?php
/**
 * Header file for Keno Theme.
 *
 *
 *
 * @package Keno
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link href="/wp-content/themes/kreuz-bern/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	<?php do_action( 'wp_body_open' ); ?>
	<div class="site" id="page">
