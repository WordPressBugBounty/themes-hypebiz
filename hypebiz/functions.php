<?php
/**
 * Theme Functions
 *
 * @author Jegstudio
 * @package hypebiz
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'HYPEBIZ_VERSION' ) || define( 'HYPEBIZ_VERSION', '1.2.0' );
defined( 'HYPEBIZ_DIR' ) || define( 'HYPEBIZ_DIR', trailingslashit( get_template_directory() ) );

defined( 'GUTENVERSE_COMPANION_REQUIRED_VERSION' ) || define( 'GUTENVERSE_COMPANION_REQUIRED_VERSION', '2.3.3' );
defined( 'GUTENVERSE_LIBRARY_SERVER' ) || define( 'GUTENVERSE_LIBRARY_SERVER', 'https://gutenverse.com' );

require get_parent_theme_file_path( 'inc/autoload.php' );

Hypebiz\Init::instance();
