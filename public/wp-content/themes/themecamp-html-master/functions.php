<?php
function css_js_load(){
  
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');

    wp_enqueue_style('owl',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_enqueue_style('slicknav',get_template_directory_uri().'/assets/css/slicknav.css');
   
   
    wp_enqueue_style('fontwesome',get_template_directory_uri().'/assets/css/fontawesome-all.min.css');

    wp_enqueue_style('slick',get_template_directory_uri().'/assets/css/css/slick.cs');
    wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css');



    // js here
    wp_enqueue_script('popper',get_template_directory_uri().'/assets/js/popper.min.js',array('jequery'),'1.0',true);
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jequery'),'1.0',true );
    wp_enqueue_script('jequery_slicknav',get_template_directory_uri().'/assets/js/jquery.slicknav.min.js',array('jequery'),'1.0',true );

    wp_enqueue_script('sticky',get_template_directory_uri().'./assets/js/jquery.sticky.js',array('jequery'),'1.0',true );

    wp_enqueue_script('owl',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array('jequery'),'1.0',true);
 wp_enqueue_script('slick',get_template_directory_uri().'/assets/js/slick.min.js',array('jequery'),'1.0',true);
    wp_enqueue_script('js',get_template_directory_uri().'/assets/js/main.js',array('jequery'),'1.0',true);
}

add_action('wp_enqueue_scripts',' css_js_load');


