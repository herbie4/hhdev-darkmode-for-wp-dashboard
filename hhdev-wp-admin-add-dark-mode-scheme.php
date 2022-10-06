<?php
/**
 * Plugin Name: HHdev Dark Mode Scheme for WP Dashboard
 * Plugin URI: https://haha.nl/wordpress-plug-in-op-maat/
 * Description: Add dark mode scheme for the WordPress dashboard user profile. Based on the Dark Mode for WP Dashboard CSS file.
 * Author: herbert hoekstra - haha.nl - hrbrt.dev
 * Author URI: https://haha.nl
 * Version: 1.0.2
 */

 if ( ! defined( 'ABSPATH' ) ) {
     die();
 }

// add the darkmode color scheme
function hhdev_additional_admin_color_schemes() {

  //Darkmode
  wp_admin_css_color( 'darkmode', __( 'Dark Mode' ),
    esc_url( plugins_url('css/dark-mode-dashboard.css',__FILE__)),
    array( '#23282d', '#191f25', '#d54e21', '#3858e9' )
  );
}
add_action('admin_init', 'hhdev_additional_admin_color_schemes');

// force set default color scheme to darkmode
// SET OFF
function hhdev_update_user_option_admin_color( $color_scheme ) {
    $color_scheme = 'darkmode';

    return $color_scheme;
}
//add_filter( 'get_user_option_admin_color', 'hhdev_update_user_option_admin_color', 5 );

/*
change log
1.0.1 initial relaease
1.0.2 color array update 
*/
