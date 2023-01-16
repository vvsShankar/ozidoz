<?php



function ozidoz_script_enqueue() {
    
    wp_enqueue_style('customestyle', get_template_directory_uri(). '/css/ozidoz.css', array(), '1.0.0','all');
    wp_enqueue_style('bootstap', get_template_directory_uri(). '/css/boootstrap.min.css', array(), '1.0.0','all');
    wp_enqueue_script('customejs', get_template_directory_uri(). '/js/ozidoz.js',array(),'1.0.0',true);
}

add_action('wp_enqueue_scripts','ozidoz_script_enqueue');



function ozidoz_theme_setup(){

    add_theme_support('menus');
    register_nav_menu('Primary', 'Primary menu navigation');
    register_nav_menu('Secondary','Secondary menu navigation');
}

add_action('init','ozidoz_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image'));


// sidebar functions

function ozidoz_widget_setup() {
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'sidebar-custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="%2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widgeet-title">',
            'after_title' => '</h1>',
        )
        );


}

add_action('widgets_init','ozidoz_widget_setup');