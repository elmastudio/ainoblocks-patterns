<?php
/**
 * Registers block patterns and categories.
 */

function abpatterns_register_block_patterns() {

	$block_pattern_categories = array(
		'heroes'       => array( 'label' => __( 'Heroes', 'abpatterns' ) ),
		'features'     => array( 'label' => __( 'Features', 'abpatterns' ) ),
		'accordions'   => array( 'label' => __( 'Accordions', 'abpatterns' ) ),
		'ctas'         => array( 'label' => __( 'CTAs', 'abpatterns' ) ),
		'headings'     => array( 'label' => __( 'Headings', 'abpatterns' ) ),
		'texts'        => array( 'label' => __( 'Texts', 'abpatterns' ) ),
		'pricing'      => array( 'label' => __( 'Pricing', 'abpatterns' ) ),
		'stats'        => array( 'label' => __( 'Stats', 'abpatterns' ) ),
		'testimonials' => array( 'label' => __( 'Testimonials', 'abpatterns' ) ),
		'galleries'    => array( 'label' => __( 'Galleries', 'abpatterns' ) ),
		'headers'      => array( 'label' => __( 'Headers', 'abpatterns' ) ),
		'footers'      => array( 'label' => __( 'Footers', 'abpatterns' ) ),
	);

	$block_pattern_categories = apply_filters( 'abpatterns_block_patterns_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

		$block_patterns = array(
			'headers/default/001',
			'headers/variant/001',
			'footers/default/002',
			'footers/variant/002',
			'heroes/default/003',
			'heroes/variant/003',
			'headings/default/004',
			'headings/variant/004',
			'headings/default/005',
			'headings/variant/005',
			'pricing/default/006',
			'pricing/variant/006',
			'pricing/default/007',
			'pricing/variant/007',
			'pricing/default/008',
			'pricing/variant/008',
			'accordions/default/009',
			'accordions/variant/009',
			'accordions/default/010',
			'accordions/variant/010',
			'headers/default/060',
		);

	$block_patterns = apply_filters( 'abpatterns_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'abpatterns/' . $block_pattern,
			require __DIR__ . '/patterns/' . $block_pattern . '.php'
		);
	}
}

add_action( 'init', 'abpatterns_register_block_patterns', 9 );