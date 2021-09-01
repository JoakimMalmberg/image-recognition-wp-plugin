<?php

/*
 * Plugin Name:       Image Recognition
 * Author:            JM
 * Text Domain:       imagerec
 */

if(!defined('ABSPATH')){
    exit;
}

require_once(plugin_dir_path(__FILE__).'inc/imagerec-scripts.php');
require_once(plugin_dir_path(__FILE__).'inc/imagerec-class.php');

function register_imagerec() {
    register_widget( 'Imagerec_Widget' );
}


add_action('widgets_init', 'register_imagerec');