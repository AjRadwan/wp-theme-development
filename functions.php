<?php
//  theme function 


// theme title 
add_theme_support('title-tag');


// css theme and jquery file calling

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


// theme function 
function ali_customizer_register($wp_customize){
   $wp_customize->add_section('ali_header_area', array(
      'title' =>__('Header Area', 'procoder'),
      'description' => 'update header area from here',
   ));

   $wp_customize->add_setting('ali_logo', array(
      'default' => get_bloginfo('template_directory') . '/img/logo.png',
   ));

   $wp_customize-> add_control(new Wp_Customize_Image_Control($wp_customize, 'ali_logo', array(
     'label' => 'Logo Upload',
     'setting' => 'ali_logo',
     'section' => 'ali_header_area',
  )));



  // footer  
  $wp_customize->add_section('footer_area', array(
    'title' =>__('Footer area', 'procoder'),
    'description' => 'update Footer Area from here',
  ));
  
  $wp_customize->add_setting('footer_area', array(
    'default' => '&copy; Aowar J Radwan | ProCoder'
 ));

 $wp_customize-> add_control('footer_area', array(
      'label' => 'footer Position',
       'description' => 'select your footer position',
      'setting' => 'footer_area',
      'section' => 'footer_area',
 ));
}



add_action('customize_register', 'ali_customizer_register', 'procoder');


// menu register 
register_nav_menu('main_menu', __('main menu'));