<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package hypebiz
 */
namespace Hypebiz;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package hypebiz
 */
class Asset_Enqueue {
	/**
	 * Class constructor.
	 */
	public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 20 );
		add_action( 'enqueue_block_assets', array( $this, 'enqueue_scripts' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ), 20 );
	}

    /**
	 * Enqueue scripts and styles.
	 */
	public function enqueue_scripts() {
		wp_register_style(
			'hypebiz-style',
			get_stylesheet_uri(),
			array(),
			HYPEBIZ_VERSION
		);

		wp_style_add_data( 'hypebiz-style', 'path', HYPEBIZ_DIR );
		
		wp_enqueue_style( 'hypebiz-style' );

				wp_register_style( 'hypebiz-presset', trailingslashit( get_template_directory_uri() ) . 'assets/css/hypebiz-presset.css', array(), HYPEBIZ_VERSION );
		if ( file_exists( trailingslashit( get_template_directory() ) . 'assets/css/hypebiz-presset.css' ) && filesize( trailingslashit( get_template_directory() ) . 'assets/css/hypebiz-presset.css' ) < 51200 ) {
			wp_style_add_data( 'hypebiz-presset', 'path', trailingslashit( get_template_directory() ) . 'assets/css/hypebiz-presset.css' );
		}
		wp_enqueue_style( 'hypebiz-presset' );
		wp_register_script( 'hypebiz-animation-script', trailingslashit( get_template_directory_uri() ) . 'assets/js/hypebiz-animation-script.js', array(), HYPEBIZ_VERSION, true );
		wp_enqueue_script( 'hypebiz-animation-script' );
		wp_register_style( 'hypebiz-custom-styling', trailingslashit( get_template_directory_uri() ) . 'assets/css/hypebiz-custom-styling.css', array(), HYPEBIZ_VERSION );
		if ( file_exists( trailingslashit( get_template_directory() ) . 'assets/css/hypebiz-custom-styling.css' ) && filesize( trailingslashit( get_template_directory() ) . 'assets/css/hypebiz-custom-styling.css' ) < 51200 ) {
			wp_style_add_data( 'hypebiz-custom-styling', 'path', trailingslashit( get_template_directory() ) . 'assets/css/hypebiz-custom-styling.css' );
		}
		wp_enqueue_style( 'hypebiz-custom-styling' );


        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
    }

	/**
	 * Enqueue admin scripts and styles.
	 */
	public function admin_scripts() {
		
    }
}
