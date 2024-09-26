<?php
/**
 * Plugin Name: Books Plugin
 * Description: This is a book plugin for adding books with author, publication date, and ISBN.
 * Version: 1.0
 * Author: Tirtha Ray
 */

// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include necessary files
require_once plugin_dir_path( __FILE__ ) . 'includes/post-type.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/taxonomy.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/meta-boxes.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/shortcode.php';

// Enqueue styles for the plugin
function bp_enqueue_styles() {
    wp_enqueue_style( 'books-plugin-styles', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'bp_enqueue_styles' );
