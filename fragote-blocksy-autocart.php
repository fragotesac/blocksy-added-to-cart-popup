<?php
/**
 * Plugin Name: FraGoTe Blocksy AutoOpenClose Cart Added Cart
 * Description: Enfoca automáticamente el carrito en el header de Blocksy cuando se añade un producto con AJAX en WooCommerce, y lo desenfoca luego de 3 segundos.
 * Version: 1.0.0
 * Author: FraGoTe Software Factory
 * Author URI: https://www.fragote.com
 * License: GPL2
 */

defined('ABSPATH') || exit;

add_action('wp_footer', function () {
    ?>
    <script>

      jQuery(document).ready(function($) {
            $(document.body).on('added_to_cart', function() {
                const cartButton = document.querySelector('.ct-cart-item');
		// scroll down the cart
	          const miniCartElement = $('.ct-cart-content .woocommerce-mini-cart');
		  if (miniCartElement.length) {
    			// Animate the scrollTop property
    			miniCartElement.animate({
      			scrollTop: miniCartElement[0].scrollHeight
    			}, 800); // 800ms duration - adjust as needed
  		}



                if (cartButton) {
                    cartButton.focus(); // abre
                    setTimeout(() => {
                        cartButton.blur(); // cierra
                    }, 3000);
                }
            });
        });    


    </script>
    <?php
});
