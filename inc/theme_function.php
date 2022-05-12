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
 }
 
 add_action('customize_register', 'ali_customizer_register', 'procoder');
 