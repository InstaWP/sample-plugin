<?php
/**
 * InstaWP Sample Plugin
 *
 * @package       INSTAWPPRI
 * @author        Vikas
 * @version       1.0.4
 *
 * @wordpress-plugin
 * Plugin Name:   InstaWP Dark Theme Plugin
 * Plugin URI:    https://instawp.com
 * Description:   InstaWP Git Deployment testing
 * Version:       1.2.0
 * Author:        Vikas
 * Author URI:    https://instawp.com
 * Text Domain:   instawp-sample-plugin
 * Domain Path:   /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Include your custom code here.
function black_theme_scripts() {
    wp_enqueue_style( 'black-theme', plugins_url( 'black-theme.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'black_theme_scripts' );
