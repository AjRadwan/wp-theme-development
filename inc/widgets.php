<?php
// widgets register function

function widget_register(){
    register_sidebar(array(
      'name'	=> __('Main widgets Area', 'procoder'),
       'id'	=>  'sidebar-1',
       'description'	=> __('your widgets here', 'procoder'),

       'before_widget'	=> '<div class="child_sidebar">',
       'after_widget'	=> '</div>',

       'before_title'	=> '<h2 class="title">',
       'after_title'	=> '</h2>',
       
    ));
}
add_action('widgets_init', 'widget_register');