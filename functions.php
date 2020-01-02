<?php 

function simple_theme_setup(){
    //featured Image Support
    add_theme_support('post-thumbnails');

    //menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'simple_theme_setup');

function set_excerpt_length(){
    return 50;
}

add_filter('excerpt_length', 'set_excerpt_length');

?>