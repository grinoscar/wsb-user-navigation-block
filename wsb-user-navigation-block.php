<?php
/**
 * Plugin Name:       Wsb User Navigation Block
 * Description:       Combine Fictional University user nav menu items and WSB.
 * Version:           0.0.4
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Glenn Howald
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wsb-event
 *
 * @package           wsb-user-navigation-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function wsb_user_navigation_block_init() {
	register_block_type_from_metadata( __DIR__ . '/build' );
}
add_action( 'init', 'wsb_user_navigation_block_init' );
