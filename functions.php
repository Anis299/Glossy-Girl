<?php

add_action ('after_setup_theme', 'ourThemeSetup');

function ourThemeSetup(){

    add_theme_support('menus');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats',['audio', 'video', 'gallery']);
    
    register_nav_menus([
    
        'primaryMenu'      => 'Primary Menu',
        'footerMenu'       => 'Footer Menu',
    ]);
    
    register_post_type('Notice', [
    
        'public'        => true,
        'labels'        => [
    
            'name'              => 'Notice',
            'all_items'         => 'All Notices',
            'add_new'           => 'Add New Notice',
            'add_item'          => 'Add New Notice',
            'featured_image'    => 'Notice Image',
            'set_featured_image'=> 'Set Notice Image',
    
        ],
    
        'supports'              => ['title'],
        'menu_icon'             => 'dashicons-pressthis'
    ]);
    
    register_post_type('Slider', [
    
        'public'        => true,
        'labels'        => [
    
            'name'              => 'Slider',
            'all_items'         => 'All Slides',
            'add_new'           => 'Add New Slides',
            'add_item'          => 'Add New Slide',
            'featured_image'    => 'Slider Image',
            'set_featured_image'=> 'Set Slider Image',
    
        ],
    
        'supports'              => ['thumbnail'],
        'menu_icon'             => 'dashicons-slides'
    ]);
    
    register_post_type('Services', [
    
        'public'        => true,
        'labels'        => [
    
            'name'              => 'Services',
            'all_items'         => 'All Services',
            'add_new'           => 'Add New Service',
            'add_item'          => 'Add New Service',
            'featured_image'    => 'Service Image',
            'set_featured_image'=> 'Set Service Image',
    
        ],
    
        'supports'              => ['thumbnail', 'title', 'editor'],
        'menu_icon'             => 'dashicons-pressthis'
    ]);

}

add_action('widgets_init', 'sidebarSet');

function sidebarSet(){

    register_sidebar([
    
        'name'          => 'Right Sidebar',
        'description'   => 'This is right sidebar',
        'id'            => 'rightSidebar',
    ]);

}

add_action('wp_enqueue_scripts', 'styleConnect');

function styleConnect(){

    wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.css');
    wp_enqueue_style('transitions',get_template_directory_uri().'/css/owl.transitions.css');
    wp_enqueue_style('mainCss',get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script('owl_carousel',get_template_directory_uri().'/js/owl.carousel.min.js');

    wp_enqueue_script('slider',get_template_directory_uri().'/js/slider.js');

}


require_once "opt/redux-core/framework.php";
require_once "opt/sample/config.php";



























?>