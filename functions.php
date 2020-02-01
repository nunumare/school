<?php

function whatever(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_register_style('stylesheet', get_stylesheet_uri() . 'style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'whatever');
function themeSetup(){
    //Navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));
    // Add featured image support    
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 210, true);
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));

}
add_action('after_setup_theme', 'themeSetup'); 



//Customize excerpt word coutn length 

function custom_excerpt_length(){
    return 10;
}
add_filter('excerpt_length', 'custom_excerpt_length');