<?php
//  theme function 


include_once('inc/default.php');


// css theme and jquery file calling
include_once('inc/enqueue.php');


// theme function 
include_once('inc/theme_function.php');


// menu register 
register_nav_menu('main_menu', __('main menu'));