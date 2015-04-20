<?php

/*
Plugin Name: WP Basic Admin Theme
Plugin URI: 
Description: A basic, clean Wordpress admin theme 
Author: Luc Awater
Version: 1.0
Author URI: http://lucawater.nl
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function my_admin_theme_style() {
    wp_enqueue_style('wp-basic-admin', plugins_url('css/app.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

// // create custom plugin settings menu
// add_action('admin_menu', 'create_menu');
//
// class settings{
//   // Start up
//   public function __construct(){
//     add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
//     add_action( 'admin_init', array( $this, 'page_init' ) );
//   }
//
//   // Add options page
//   public function add_plugin_page(){
//     // This page will be under "Settings"
//     add_options_page(
//         'Settings Admin',
//         'WP Admin',
//         'manage_options',
//         'my-setting-admin',
//         array( $this, 'create_admin_page' )
//     );
//   }
//
//   // Register and add settings
//   public function page_init(){
//     register_setting(
//         'my_option_group', // Option group
//         'my_option_name', // Option name
//         array( $this, 'sanitize' ) // Sanitize
//     );
//
//     add_settings_section(
//         'setting_section_id', // ID
//         'My Custom Settings', // Title
//         array( $this, 'print_section_info' ), // Callback
//         'my-setting-admin' // Page
//     );
//
//     add_settings_field(
//         'id_number', // ID
//         'ID Number', // Title
//         array( $this, 'id_number_callback' ), // Callback
//         'my-setting-admin', // Page
//         'setting_section_id' // Section
//     );
//
//     add_settings_field(
//         'title',
//         'Title',
//         array( $this, 'title_callback' ),
//         'my-setting-admin',
//         'setting_section_id'
//     );
//   }
// }
//
// if( is_admin() ){
//   $my_settings_page = new settings();
// } ?>