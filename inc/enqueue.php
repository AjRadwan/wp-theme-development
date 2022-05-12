<?php
 function css_js_file_calling(){

    wp_enqueue_style('ali-style', get_stylesheet_uri( ));
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all' );
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );
 
 
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
 
 
 
   //  jquery loading 
    wp_enqueue_script('jquery');  
    wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_register_script('main', get_template_directory_uri().'/css/main.css', array(), '1.0.0', 'true' );
 }
 
 add_action('wp_enqueue_scripts', 'css_js_file_calling');
 
 
 // google fonts loading  
 function goolge_fonts(){
   wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
 }
 
 add_action('wp_register_script', 'google_fonts');