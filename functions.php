<?php

function viola_register_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('labb-bootstrap', get_template_directory_uri()."/assets/css/bootstrap.css", array(), '3.3.7', 'all');
    wp_enqueue_style('labb-style', get_template_directory_uri()."/assets/css/main.css", array('labb-bootstrap'), $version, 'all');
    wp_enqueue_style('labb-fontawesome', get_template_directory_uri()."/assets/css/font-awesome.css", array(), '4.0.3', 'all');

}

add_action( 'wp_enqueue_scripts', 'viola_register_styles')

function viola_register_scripts() {

    wp_enqueue_script('labb-jquery', get_template_directory_uri()."/assets/js/jquery.js", array(), '1.0')
    wp_enqueue_script('labb-script', get_template_directory_uri().)
}

add_action( 'wp_enqueue_scripts', 'viola_register_scripts')

?>