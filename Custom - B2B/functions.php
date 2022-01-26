<?php 
/**
 * Font Awesome CDN Setup Webfont
 * 
 * This will load Font Awesome from the Font Awesome Free or Pro CDN.
 */
if (! function_exists('fa_custom_setup_cdn_webfont') ) {
    function fa_custom_setup_cdn_webfont($cdn_url = '', $integrity = null) {
      $matches = [];
      $match_result = preg_match('|/([^/]+?)\.css$|', $cdn_url, $matches);
      $resource_handle_uniqueness = ($match_result === 1) ? $matches[1] : md5($cdn_url);
      $resource_handle = "font-awesome-cdn-webfont-$resource_handle_uniqueness";
  
      foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
        add_action(
          $action,
          function () use ( $cdn_url, $resource_handle ) {
            wp_enqueue_style( $resource_handle, $cdn_url, [], null );
          }
        );
      }
  
      if($integrity) {
        add_filter(
          'style_loader_tag',
          function( $html, $handle ) use ( $resource_handle, $integrity ) {
            if ( in_array( $handle, [ $resource_handle ], true ) ) {
              return preg_replace(
                '/\/>$/',
                'integrity="' . $integrity .
                '" crossorigin="anonymous" />',
                $html,
                1
              );
            } else {
              return $html;
            }
          },
          10,
          2
        );
      }
    }
  }

fa_custom_setup_cdn_webfont(
    'https://pro.fontawesome.com/releases/v5.10.0/css/all.css',
    'sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p'
);


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
            const smartScroll = (elementid) => {
                let element = document.querySelector(elementid).scrollIntoView({ behavior: 'smooth', block: 'end'});
            }

            const pricing_button = document.createElement('button');
            pricing_button.className = 'pricing-button';
            pricing_button.innerHTML = 'VIEW PRICES';
            pricing_button.addEventListener('click', () => smartScroll("#pricing-section"));

            document.addEventListener('DOMContentLoaded', () => {
                document.body.appendChild(pricing_button);
                document.querySelector("#hero-button").addEventListener('click', () => smartScroll("#pricing-section"));
            });
        </script>
    <?php
}
add_action('wp_head', 'art_load_pricing_button');

function art_load_order_overlay() {
  ?>
      <script>
          const openOverlay = () => {
            const overlay = document.createElement('div');
            overlay.className = 'order-overlay'

            const overlay_inner = document.createElement('div');
            overlay_inner.className = 'overlay-inner'
            const close_btn = document.createElement('span')
            close_btn.innerHTML = "&#10006"
            close_btn.addEventListener('click', () => { document.body.removeChild(document.querySelector(".order-overlay")) })

            overlay_inner.appendChild(close_btn)
            overlay.appendChild(overlay_inner)
            document.body.insertAdjacentElement('afterbegin', overlay);
          }

          document.addEventListener('DOMContentLoaded', () => {
              document.querySelectorAll(".ticket-button").forEach(item => {
                item.addEventListener('click', () => openOverlay());
              });
          });
      </script>
  <?php
}
add_action('wp_head', 'art_load_order_overlay');