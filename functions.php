add_action( 'woocommerce_after_shop_loop_item', 'codeithub_show_free_shipping_loop', 5 );
 
function codeithub_show_free_shipping_loop() {
   echo '<p class="shop-badge">ADD TEXT HERE</p>';
}
