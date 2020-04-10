<?php 

function bm_theme_styles() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/template.css');
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.5.0.min.js');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js');
}

function bm_after_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    register_nav_menu('primary', 'Menu Primário');
    register_nav_menu('top', 'Menu Superior');
}

function bm_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar Lateral',
        'id' => 'bm_sidebar',
        'description' => 'Sidebar Lateral do Tema MiniMag',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Sidebar Rodapé',
        'id' => 'bm_footersidebar',
        'description' => 'Sidebar Rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));
}
