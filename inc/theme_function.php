<?php
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


//   theme color       

   $wp_customize->add_section('color_setting', array(
      'title' =>__('Theme color', 'procoder'),
      'description' => 'change your theme color',
   ));
   
   $wp_customize->add_setting('bg_color', array(
      'default' => '#ffff',
   ));

   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bg_color', array(
   
       'label' => 'primary color',
       'section' => 'color_setting',
       'setting' => 'bg_color',
    )));

   $wp_customize->add_setting('link_color', array(
      'default' => '#ea1a70',
   ));

   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
   
       'label' => 'Background color',
       'section' => 'color_setting',
       'setting' => 'link_color',
    )));

 }
 
 add_action('customize_register', 'ali_customizer_register', 'procoder');


 function theme_color_cus(){
   ?>
   <style>
     body{background: <?php echo get_theme_mod('bg_color'); ?>}
     :root{ --pink:<?php echo get_theme_mod('link_color'); ?>}
   </style>
   <?php 
 }
 add_action('wp_head', 'theme_color_cus');
 