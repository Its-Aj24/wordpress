<?php

function include_css()
{
    wp_enqueue_style('aos-css',get_template_directory_uri().'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',array(),'1.0','all');
    wp_enqueue_style('aos-css',get_template_directory_uri().'/assets/vendor/aos/aos.css',array(),'1.0','all');
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css',array(),'1.0','all');
    wp_enqueue_style('bootstrap-icons-css',get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css',array(),'1.0','all');
    wp_enqueue_style('boxicons-css',get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css',array(),'1.0','all');
    wp_enqueue_style('glightbox-css',get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css',array(),'1.0','all');
    wp_enqueue_style('swiper-css',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css',array(),'1.0','all');
    wp_enqueue_style('style-css',get_template_directory_uri().'/assets/css/style.css',array(),'1.0','all');
    wp_enqueue_script('purecounter-js',get_template_directory_uri().'/assets/vendor/purecounter/purecounter_vanilla.js',array(),'1.0','all');
    wp_enqueue_script('aos-js',get_template_directory_uri().'/assets/vendor/aos/aos.js',array(),'1.0','all');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),'1.0','all');
    wp_enqueue_script('glightbox-js',get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js',array(),'1.0','all');
    wp_enqueue_script('isotope-js',get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js',array(),'1.0','all');
    wp_enqueue_script('swiper-js',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',array(),'1.0','all');
    wp_enqueue_script('typed-js',get_template_directory_uri().'/assets/vendor/typed.js/typed.umd.js',array(),'1.0','all');
    wp_enqueue_script('waypoints-js',get_template_directory_uri().'/assets/vendor/waypoints/noframework.waypoints.js',array(),'1.0','all');
    wp_enqueue_script('php-email-form-js',get_template_directory_uri().'/assets/vendor/php-email-form/validate.js',array(),'1.0','all');
    wp_enqueue_script('main-js',get_template_directory_uri().'/assets/js/main.js',array(),'1.0','all');
}
add_action('wp_enqueue_scripts','include_css');
?>