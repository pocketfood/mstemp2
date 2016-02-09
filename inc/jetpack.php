<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package MStemp
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function mstemp_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'mstemp_jetpack_setup' );
