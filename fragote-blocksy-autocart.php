<?php
/**
 * Plugin Name: FraGoTe Blocksy AutoOpenClose Cart Added Cart
 * Description: Enfoca automáticamente el carrito en el header de Blocksy cuando se añade un producto con AJAX en WooCommerce, y lo desenfoca luego de 3 segundos.
 * Version: 1.0.0
 * Author: FraGoTe Software Factory SAC
 * License: GPL2
 */

defined('ABSPATH') || exit;

add_action('wp_footer', function () {
    ?>
    <script>
    (function() {
        document.addEventListener('DOMContentLoaded', function () {
            document.body.addEventListener('added_to_cart', function () {
                const cartButton = document.querySelector('.ct-cart-item');
                if (cartButton) {
                    cartButton.focus(); // abre
                    setTimeout(() => {
                        cartButton.blur(); // cierra
                    }, 3000);
                }
            });
        });
    })();
    </script>
    <?php
});
