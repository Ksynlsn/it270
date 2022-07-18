<?php
// functions page

//create function
function my_excerpt_length() {
    return 35;
}

// add filter
    // first arg:  NAME OF FILTER  ,   second arg: NAME OF FUNCTION
add_filter('excerpt_length', 'my_excerpt_length');

set_post_thumbnail_size(200, 200);
add_theme_support('post-thumbnails');

// register our navigation

register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu'
));

// this lets WP know we are communitcating with this file
    // enqueing my scripts

function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );