<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Lawyer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Lawyer
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_LAWYER_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_LAWYER_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_LAWYER_VERSION', '2.0.0' );
define( 'PATTERNS_LAWYER_THEME_NAME', 'patterns-lawyer' );
define( 'PATTERNS_LAWYER_OPTION_NAME', 'patterns-lawyer' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_LAWYER_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_lawyer_run() {
	new Patterns_Lawyer();
}
patterns_lawyer_run();
