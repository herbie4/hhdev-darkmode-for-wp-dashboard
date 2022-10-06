<?php
/**
 * Plugin Name: HHdev Dark Mode Scheme for WP Dashboard
 * Plugin URI: https://haha.nl/wordpress-plug-in-op-maat/
 * Description: Add dark mode scheme for the WordPress dashboard user profile. Based on the Dark Mode for WP Dashboard CSS file.
 * Author: herbert hoekstra - haha.nl - hrbrt.dev
 * Author URI: https://haha.nl
 * Version: 1.0.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
     die();
 }

 define('HHDEV_DARK_MODE_DASHBOARD_PLUGIN_PATH', plugin_dir_url(__FILE__));


// add the darkmode color scheme
function hhdev_additional_admin_color_schemes() {

  //Get the theme directory
  $theme_dir = get_stylesheet_directory_uri();
  //Ocean
  wp_admin_css_color( 'darkmode', __( 'Dark Mode' ),
    $theme_dir . '/admin-colors/dark-mode-dashboard.css',
    array( '#aa9d88', '#9ebaa0', '#738e96', '#f2fcff' )
  );
}
add_action('admin_init', 'hhdev_additional_admin_color_schemes');

// set default color scheme to darkmode

function hhdev_update_user_option_admin_color( $color_scheme ) {
    $color_scheme = 'darkmode';

    return $color_scheme;
}
//add_filter( 'get_user_option_admin_color', 'hhdev_update_user_option_admin_color', 5 );
