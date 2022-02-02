<?php

$sidebar_blocks = get_field( 'sidebar_blocks' );

if ( $sidebar_blocks ) :
	foreach ( $sidebar_blocks as $post ) :
		// Setup this post for WP functions (variable must be named $post).
		setup_postdata( $post );
		$block_template = get_field( 'block_template' );
		if ( $block_template === 'light') :
			echo 'light';
		endif;
		?>
			<div class="block">
				<h3 class="block__title"><?php the_title(); ?></h3>
				<p class="block__text"><?php the_field( 'block-text' ); ?></p>
				<a class="block__btn" href="<?php the_field( 'block_button_url' ); ?>"><?php the_field( 'block_button_text' ); ?></a>
			</div>
		<?php
	endforeach;
	// Reset the global post object so that the rest of the page works correctly.
	wp_reset_postdata();
endif;
