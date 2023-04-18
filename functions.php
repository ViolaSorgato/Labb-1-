<?php
//Adding support for certain functionalities, title, images and widgets.
function labb1viola_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}

add_action('after_setup_theme', 'labb1viola_theme_support');

function labb1_sidebars() {

    register_sidebar(array(
        'name' => 'Sidebar-sök',
        'description' => 'A simple sidebar',
        'id' => 'sidebar-sök',
        'class' => 'searchform',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-sidor',
        'description' => 'A simple sidebar',
        'id' => 'sidebar-sidor',
        'class' => 'navigation',
        'before_widget' =>'<li>',
        'after_widget' => '</li>'
    ));

    register_sidebar(array(
        'name' => 'Sidebar-arkiv',
        'description' => 'A simple sidebar',
        'id' => 'sidebar-arkiv',
        'class' => 'navigation',
        'before_widget' => '<li>',
        'after_widget' => '</li>'
    ));

    register_sidebar(array(
        'name' => 'Sidebar-kategorier',
        'description' => 'A simple sidebar',
        'id' => 'sidebar-kategorier',
        'class' => 'navigation',
        'before_widget' => '<li>',
        'after_widget' => '</li>'
    ));

    register_sidebar( array(
        'name' => 'Footer1',
        'description' => 'Left widget in the footer',
        'id' => 'footer1',
        'before_widget' => '',
        'after_widget' => ''
    ));

    register_sidebar( array(
        'name' => 'Footer2',
        'description' => 'Center widget in the footer',
        'id' => 'footer2',
        'before_widget' => '',
        'after_widget' => ''
    ));

    register_sidebar( array(
        'name' => 'Footer3',
        'description' => 'Right widget in the footer',
        'id' => 'footer3',
        'before_widget' => '',
        'after_widget' => ''
    ));
}

add_action('widgets_init', 'labb1_sidebars');



function labb1_menus() {

    $locations = array(
        'primary' => "Primary Header Menu",
        'footer' => "Footer Menu",
        'sidebar' => "Sidebar Menu",
        'undersida' => "Undersida Menu"
    );

    register_nav_menus($locations);
};

add_action('init','labb1_menus');



function viola_register_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('labb-bootstrap', get_template_directory_uri()."/assets/css/bootstrap.css", array(), '3.3.7', 'all');
    wp_enqueue_style('labb-style', get_template_directory_uri()."/assets/css/main.css", array('labb-bootstrap'), $version, 'all');
    wp_enqueue_style('labb-fontawesome', get_template_directory_uri()."/assets/css/font-awesome.css", array(), '4.0.3', 'all');

}

add_action( 'wp_enqueue_scripts', 'viola_register_styles');

function viola_register_scripts() {

    wp_enqueue_script('labb-jquery', get_template_directory_uri()."/assets/js/jquery.js", array(), '1.0', true);
    wp_enqueue_script('labb-script', get_template_directory_uri()."/assets/js/script.js", array(), '1.0', true);

}

add_action( 'wp_enqueue_scripts', 'viola_register_scripts');

?>