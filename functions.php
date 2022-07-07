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