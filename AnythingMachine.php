<?php
/*
 Plugin Name: Anything Machine
 Plugin URI: http://customrayguns.com/
 Description:
 Version: 1.0
 Author: Jim Maguire
 Author URI:
 */

namespace AnythingMachine;

//die('AnythingMachine is working!');

require_once 'src/AnythingMachine/AnythingMachinePlugin.class.php';

$AnythingMachinePlugin= new AnythingMachinePlugin();
$AnythingMachinePlugin->enableMetaboxPathway();
$AnythingMachinePlugin->enableFeaturesLink();

//$AnythingMachinePlugin->enqueueJSscripts();

//register_activation_hook( __FILE__, array( $AnythingMachinePlugin, 'doPluginActivationActions' ) );
//register_deactivation_hook( __FILE__, array( $AnythingMachinePlugin, 'doPluginDeactivationActions' ) );


function check_new_vs_update( $post_id ){
}
add_action('save_post', 'AnythingMachine\check_new_vs_update' );

function do_anything() {
    //do stuff
}
add_action('wp_login', 'wpse113069_email_me');

/**
 * Send a different email based on if a visitor is signed into the site.
 */
function whoisWatchinMe() {
    add_action('init', 'AnythingMachine\sendEmail');
}

function whoisWatchingMe(){
    $email = "jiminac@aol.com";
    wp_mail( $email, 'You had a visitor...', 'Woopty do!' );
}

add_action( 'wp_login', 'AnythingMachine\whoisWatchingMe' );