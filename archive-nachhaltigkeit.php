<?php
/**
 * The template for displaying the Nachhaltigkeitsbereiche archive
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>
		<div class="col-12">
			<h1 class="page-title"><?php post_type_archive_title(); ?></h1>
		</div>
		<?php do_action( 'before_main_content' ); ?>
				<div class="row">
					<div class="col-12 px-15">
						<div class="main-block main-block__informations main-block--inverted">
							<div class="main-block__content">
								<p class="main-block__text"><?php the_field( 'nachhaltigkeit_intro_text', 'option' ); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							?>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
								<article class="block-image">
									<a href="<?php echo esc_url( get_permalink() ); ?>">
										<?php the_post_thumbnail( 'nachhaltigkeit-thumbnail' ); ?>
									</a>
									<div class="block-image__content">
										<h2 class="block-image__title"><?php the_title(); ?></h2>
										<p class="block-image__text"><?php the_field( 'teaser_text' ); ?></p>
										<div class="block-image__btn--wrapper">
											<a class="block-image__btn" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Mehr erfahren', 'kreuz-bern' ); ?></a>
										</div>
									</div>
								</article><!-- .block-image -->
							</div><!-- .col -->
							<?php
						endwhile;
					endif;
					?>
				</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php
			$sidebar_blocks = get_field( 'nachhaltigkeit_sidebar_blocks_cf', 'option' );

			if ( $sidebar_blocks ) :
				foreach ( $sidebar_blocks as $post ) :
					setup_postdata( $post );

					$block_template = 'block';

					if ( 'dark' === get_field( 'block_template' ) ) :
						$block_template = 'block block-inverted';
					endif;

					$block_button_url  = get_field( 'block_button_url' );
					$block_button_text = get_field( 'block_button_text' );
					?>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
						<div class="<?php echo $block_template; ?>">
							<?php if ( get_field( 'block_banner_check' ) ) : ?>
								<span class="block__badge"><?php the_field( 'block_banner_content' ); ?></span>
							<?php endif; ?>
							<?php if ( get_field( 'block_image_banner_check' ) ) : ?>
								<span class="block__badge block__badge--image"><?php echo wp_get_attachment_image( get_field( 'block_image_banner_content' ), 'full' ); ?></span>
							<?php endif; ?>
							<h3 class="block__title"><?php the_title(); ?></h3>
							<p class="block__text"><?php the_field( 'block_text' ); ?></p>
							<?php if ( $block_button_url && $block_button_text ) : ?>
								<?php
								$block_link_in_new_window = '';
								if ( get_field( 'block_open_in_a_new_window' ) ) :
									$block_link_in_new_window = 'target=_blank';
								endif;
								?>
								<a class="block__btn" href="<?php echo esc_url( $block_button_url ); ?>" <?php echo esc_attr( $block_link_in_new_window ); ?>><?php echo $block_button_text; ?></a>
							<?php endif; ?>
						</div>
					</div>
					<?php
				endforeach;
				wp_reset_postdata();
			endif;
			?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
