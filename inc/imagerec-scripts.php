<?php

function ir_add_scripts() {
    wp_enqueue_style('ir-main-style', plugins_url(). '/imagerec/css/style.css');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('ir-main-script', plugins_url(). '/imagerec/js/main.js');
    wp_localize_script('ir-main-script', 'get_imagerec', [
        'ajax_url' => admin_url('ajax-actions.php'),
    ]);
}

add_action('wp_enqueue_scripts', 'ir_add_scripts');
