<?php 

function art_load_style_scripts(){
    wp_enqueue_style('main.css', get_template_directory_uri() . '/css/thema.css');
}

add_action('wp_enqueue_scripts', 'art_load_style_scripts');

function art_init_menu() {
    register_nav_menus(
        array(
            'main-menu'  => __( 'hoofdmenu')          
        )
    );
}
add_action( 'init', 'art_init_menu' );
