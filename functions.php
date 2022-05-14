<?php
 


include_once('inc/default.php');

//shortcode
include_once('inc/shortCode.php');


// css theme and jquery file calling register
include_once('inc/enqueue.php');

// custom post
include_once('inc/custom_post.php');

// theme register funcion
include_once('inc/theme_function.php');

// widget register 
include_once('inc/widgets.php');


// menu register 
register_nav_menu('main_menu', __('main menu'));
 