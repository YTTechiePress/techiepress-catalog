<?php
/**
 * Plugin Name: TechiePress Catalog
 * Plugin URI: https://github.com/yttechiepress/techiepress-catalog
 * Author: TechiePress
 * Author URI: https://github.com/yttechiepress/techiepress-catalog
 * Description: This plugin makes your woocommerce site into a catalog/brochure.
 * Version: 0.1.0
 * License: GPL2 or later
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: techiepress-catalog
*/

// Basic security.
defined( 'ABSPATH' ) or die;

// Remove the add to cart button.
add_action( 'woocommerce_after_shop_loop_item_title',  'techiepress_remove_price_cart_button' );

function techiepress_remove_price_cart_button() {
    global $product;

    // remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

}

add_action( 'woocommerce_single_product_summary', 'techiepress_single_remove_price_cart_button', 1 );

function techiepress_single_remove_price_cart_button() {
    global $product;
    
    // remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
}