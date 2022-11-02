<?php defined('ABSPATH') or die;
/*******************************************************************************
 * Plugin Name: Coders Trip Manager
 * Plugin URI: https://mnkcoders.com
 * Description: Manager of Experiences and Grupal activities
 * Version: 1.0.0
 * Author: coder#1
 * Author URI: 
 * License: GPLv2 or later
 * Text Domain: trip_manager
 * Class: CodersTesterApp
 * @author Coder#1 <coder1@mnkcoder.com>
 ******************************************************************************/
add_action('plugins_loaded',function(){
    if( class_exists('CodersApp') ){
        CodersApp::register( __DIR__ );
    }
});
register_activation_hook(__FILE__, function( ){
    if( class_exists('CodersApp') ){
        CodersApp::__install(__DIR__);
    }
});
register_deactivation_hook(__FILE__, function(){
    if( class_exists('CodersApp') ){
        CodersApp::__uninstall(__DIR__);
    }
});


