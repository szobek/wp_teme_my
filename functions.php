<?php

if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}


function load_stylesheet()
{


    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'load_stylesheet');


function load_babel()
{
    wp_register_script('babel', get_template_directory_uri() . '/dist/bundle.js', '', 1, true);
    wp_enqueue_script('babel');
}





function load_jquery()
{


    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/res/j.js', '', '1', true);

    add_action('wp_enqueue_scripts','jquery');

}


add_action('wp_enqueue_scripts', 'load_jquery');

add_action('wp_enqueue_scripts', 'load_babel');




add_theme_support('menus');

register_nav_menus([
    "top-menu" => __('top menu', 'theme'),
    "footer-menu" => __('footer menu', 'theme'),
]);

add_theme_support('post-thumbnails');

add_image_size('smallest',100,100, true);


add_image_size('largest',800,800, true);


require_once "components/_shortcode.php"
?>