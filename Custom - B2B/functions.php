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
            pricing_button.innerHTML = 'BEKIJK PRIJZEN';
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
          const create_element = (type, classn, innerHTML = '') => {
            let element = document.createElement(type)
            element.className = classn, element.innerHTML = innerHTML

            return element;
          }

          const openOverlay = () => {
            const overlay = create_element('div', 'order-overlay');
            const overlay_inner = create_element('div', 'overlay-inner');
            const close_btn = create_element('span', 'overlay-close', '<i class="fas fa-times"></i>')
            const thankyoutitle = create_element('h2', 'overlay-title', 'BEDANKT!')
            const thankyoumsg = create_element('p', 'overlay-thanks', 'Je ticket is verwerkt en besteld.')
            const btn_container = create_element('div', 'overlay-btncontainer')
            const download = create_element('a', 'overlay-button special', 'DOWNLOAD TICKET')
            const backtosite = create_element('a', 'overlay-button', 'TERUG NAAR SITE')
            const followus = create_element('span', 'overlay-socials', 'Volg Ons: <a href="https://www.facebook.com/Stedelijk/"><i class="fab fa-facebook-square"></i></a><a href="https://www.instagram.com/stedelijkmuseum/"><i class="fab fa-instagram"></i></a><a href="https://twitter.com/Stedelijk"><i class="fab fa-twitter-square"></i></a><a href="https://www.youtube.com/c/StedelijkMuseumAmsterdam"><i class="fab fa-youtube"></i></a>')
            
            download.href = 'ticket.pdf'
            let date = new Date()
            download.download = `${date.getFullYear()}${date.getMonth()}${date.getDay()}_stedelijk_ticket.pdf`
            backtosite.href = 'https://stedelijk.nl/'
            close_btn.addEventListener('click', () => { document.body.removeChild(document.querySelector(".order-overlay")) })

            overlay_inner.appendChild(close_btn)
            overlay_inner.appendChild(thankyoutitle)
            overlay_inner.appendChild(thankyoumsg)
            btn_container.appendChild(download)
            btn_container.appendChild(backtosite)
            overlay_inner.appendChild(btn_container)
            overlay_inner.appendChild(followus)
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