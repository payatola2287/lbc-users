<?php
/**
 * Plugin Name: Life|Brand Collective User List Add on
 * Description: Add-on for beaver builder to display members.
 * Version: 1.0
 * Author: Paolo Gallardo
 * Author URI: http://www.paologallardo.com
 */

 require 'plugin-update-checker/plugin-update-checker.php';
 $myUpdateChecker = Puc_v4p3_Factory::buildUpdateChecker(
 	'https://github.com/payatola2287/lbc-users',
 	__FILE__,
 	'lbc-users'
 );

define( 'LBCU_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'LBCU_MODULES_URL', plugins_url( '/', __FILE__ ) );


/*
*  Load the necessary module if Beaver Builder is enabled or installed
*  @hook init
*/
function lbcu_load_module_examples() {
    require_once 'class-settings.php';
    if ( class_exists( 'FLBuilder' ) ) {
        // Include your custom modules here.
        include 'module/class-lbc-users.php';
    }
}
add_action( 'init', 'lbcu_load_module_examples' );
