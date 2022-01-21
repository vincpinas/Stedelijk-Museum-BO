<?php 

function art_load_style_scripts(){
    wp_enqueue_style('main.css', get_template_directory_uri() . '/css/global.css');
    wp_enqueue_style('main.css', get_template_directory_uri() . '/css/style.css');
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

function art_load_pricing_button() {
    ?>
        <script>
            const pricing_button = document.createElement('button');
            pricing_button.className = 'pricing-button';
            pricing_button.innerHTML = 'VIEW PRICES';
            pricing_button.addEventListener('click', () => document.getElementById("pricing-section").scrollIntoView({ behavior: 'smooth', block: 'end'}));

            document.addEventListener('DOMContentLoaded', () => document.body.appendChild(pricing_button));
        </script>
    <?php
}
add_action('wp_head', 'art_load_pricing_button');