<?php
/**
 * Template Name: About Us Page Template
 *
 * The template for displaying all about us page
 */

get_header(); ?>

	<?php do_action( 'wrapper_open' ); ?>
	<?php
		$sponsor_link  = get_field( 'sponsor_button' );
		$history_image = get_field( 'history_block_image' );
		$team_image    = get_field( 'team_block_image' );
		$sponsor_image = get_field( 'sponsor_image' );
		$size          = 'main-block-thumbnail';
	?>
		<div class="col-12">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
					<div class="block block-wide">
						<h2 class="block__title"><?php the_field( 'page_title' ); ?></h2>
						<p class="block__text"><?php the_field( 'page_description' ); ?></p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
					<div class="block-image">
						<?php
						if ( $team_image ) :
							echo wp_get_attachment_image( $team_image, $size );
						endif;
						?>
						<div class="block-image__content">
							<h2 class="block-image__title"><?php the_field( 'team_block_title' ); ?></h2>
							<p class="block-image__text"><?php the_field( 'team_block_description' ); ?></p>
						</div>
					</div><!-- block-image -->
				</div><!-- .col -->
			</div><!-- .row -->
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
					<div class="block-image">
						<a href="<?php the_field( 'history_block_button_link' ); ?>">
							<?php
							if ( $history_image ) :
								echo wp_get_attachment_image( $history_image, $size );
							endif;
							?>
						</a>
						<div class="block-image__content">
							<h2 class="block-image__title"><?php the_field( 'history_block_title' ); ?></h2>
							<p class="block-image__text"><?php the_field( 'history_block_description' ); ?></p>
							<a class="block-image__btn" href="<?php the_field( 'history_block_button_link' ); ?>"><?php the_field( 'history_block_button' ); ?></a>
						</div>
					</div><!-- .block-image -->
				</div><!-- .col -->
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
					<div class="block-image">
						<a href="<?php the_field( 'history_block_button_link' ); ?>">
							<?php
							if ( $sponsor_image) :
								echo wp_get_attachment_image( $sponsor_image, $size );
							endif;
							?>
						</a>
						<div class="block-image__content">
							<h2 class="block-image__title"><?php the_field( 'sponsor_title' ); ?></h2>
							<p class="block-image__text"><?php the_field( 'sponsor_description' ); ?></p>
							<?php
							if ( $sponsor_link ) :
								$link_url    = $sponsor_link['url'];
								$link_title  = $sponsor_link['title'];
								$link_target = $sponsor_link['target'] ? $sponsor_link['target'] : '_self';
								?>
								<a class="block-image__btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>
					</div><!-- block-image -->
				</div><!-- .col -->
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
