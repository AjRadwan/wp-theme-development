<?php
// theme title 
add_theme_support('title-tag');


//thumbnail immage area 
add_theme_support('post-thumbnails', array('page', 'post'));
add_image_size('post-thumbnails', 970, 350, true);


// read more option 

function excerpts_more($more){
      return '<br> <br> <a class="btn-read" href="'.get_permalink( $post ) . '">' . 'Read More' . '</a>';
}

add_filter('excerpt_more', 'excerpts_more');


function read_excerpts_length($length) {
    return 40;
}

add_filter('excerpt_length', 'read_excerpts_length', 999);

