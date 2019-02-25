<?php


function load_stylesheet()
{


    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'load_stylesheet');

function load_js()
{
    wp_register_script('custom', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('custom');
}



function load_jquery()
{


    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/j.js', '', '1', true);

    add_action('wp_enqueue_scripts','jquery');

}


add_action('wp_enqueue_scripts', 'load_jquery');

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');

register_nav_menus([
    "top-menu" => __('top menu', 'theme'),
    "footer-menu" => __('footer menu', 'theme'),
])


?>