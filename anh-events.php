<?php
/**
 * Plugin Name:       anh events
 * Description:       A event management puling.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Mohibbulla Munshi
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       anhevents
 */

add_action( 'admin_menu', 'anh_events_init_menu' );
function anh_events_init_menu(){
  add_menu_page( __( 'ANH Events', 'anhevents'), __( 'ANH Events', 'anhevents'), 'manage_options', 'anhevents', 'anhevents_admin_page', 'dashicons-admin-post', '2.1' );
  
}

function anhevents_admin_page(){
  require_once plugin_dir_path(__FILE__).'templates/app.php';
}

add_action('admin_enqueue_scripts', 'anhevents_admin_enqueue_scripts');

function anhevents_admin_enqueue_scripts(){
  wp_enqueue_style( 'anhevents-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
  wp_enqueue_script( 'anhevents-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
}