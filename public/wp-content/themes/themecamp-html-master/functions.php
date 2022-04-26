<?php

function megakit_mek(){

    load_theme_textdomain('themecamp',get_template_directory_uri() .'/languages');
    register_nav_menus(array(
        'primary' => __('primary','themecamp')
    ));
}

add_action('after_setup_theme','megakit_mek');

function megakit_mega(){
  
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.0','all');

    wp_enqueue_style('owl',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'1.0','all');
    wp_enqueue_style('slicknav',get_template_directory_uri().'/assets/css/slicknav.css',array(),'1.0','all');
   
   
    wp_enqueue_style('fontwesome',get_template_directory_uri().'/assets/css/fontawesome-all.min.css',array(),'1.0','all');

    wp_enqueue_style('slick',get_template_directory_uri().'/assets/css/css/slick.cs',array(),'1.0','all');
    wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css',array(),'1.0','all');
    wp_enqueue_style( 'min-css', get_stylesheet_uri() );


    // js here
    wp_enqueue_script('popper',get_template_directory_uri().'/assets/js/popper.min.js',array('jquery'),'1.0',true);
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'),'1.0',true );
    wp_enqueue_script('jquery_slicknav',get_template_directory_uri().'/assets/js/jquery.slicknav.min.js',array('jquery'),'1.0',true );

    wp_enqueue_script('sticky',get_template_directory_uri().'./assets/js/jquery.sticky.js',array('jquery'),'1.0',true );

    wp_enqueue_script('owl',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array('jquery'),'1.0',true);
 wp_enqueue_script('slick',get_template_directory_uri().'/assets/js/slick.min.js',array('jquery'),'1.0',true);
    wp_enqueue_script('js',get_template_directory_uri().'/assets/js/main.js',array('jquery'),'1.0',true);
}

add_action('wp_enqueue_scripts','megakit_mega');


