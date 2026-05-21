<?php
/**
 * Template Name: FAQ Page Template
 *
 * The template for displaying the FAQ page with schema markup
 */

$faq_groups = get_field( 'faq_groups' );

if ( $faq_groups ) :
	$schema_items = array();
	foreach ( $faq_groups as $group ) :
		foreach ( $group['faq_items'] as $item ) :
			$schema_items[] = array(
				'@type' => 'Question',
				'name'  => wp_strip_all_tags( $item['question'] ),
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text'  => wp_strip_all_tags( $item['answer'] ),
				),
			);
		endforeach;
	endforeach;

	$schema = array(
		'@context'   => 'https://schema.org',
		'@type'      => 'FAQPage',
		'mainEntity' => $schema_items,
	);

	add_action( 'wp_head', function() use ( $schema ) {
		echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>';
	} );
endif;

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>
		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<div class="col-12">
					<article class="block-image block-image--wide">
						<div class="block-image__content">
							<?php if ( $faq_groups ) : ?>
								<div class="faq">
									<?php foreach ( $faq_groups as $group ) : ?>
										<div class="faq__group">
											<?php if ( $group['title'] ) : ?>
												<h2 class="faq__group-title"><?php echo wp_kses_post( $group['title'] ); ?></h2>
											<?php endif; ?>
											<?php foreach ( $group['faq_items'] as $item ) : ?>
												<div class="faq__item">
													<p class="faq__question"><strong><?php echo wp_kses_post( $item['question'] ); ?></strong></p>
													<div class="faq__answer"><?php echo wp_kses_post( $item['answer'] ); ?></div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</div>
					</article>
				</div>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
