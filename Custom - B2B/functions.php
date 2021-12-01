<?php 

function art_load_style_scripts(){
    wp_enqueue_style('main.css', get_template_directory_url() . '/css/thema.css');
}

add_action('wp_enqueue_styles', 'art_load_style_scripts');

?>