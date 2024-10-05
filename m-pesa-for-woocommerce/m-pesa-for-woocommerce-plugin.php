<?php
/*
 * Plugin Name: M-Pesa and PayPal for WooCommerce
 * Description: WooCommerce plugin to integrate M-Pesa and PayPal payment gateways.
 * Version: 1.0
 * Author: Obong'o Elvin
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Include the payment gateway classes
add_action('plugins_loaded', 'register_my_custom_gateways');

function register_my_custom_gateways() {
    // Check if WooCommerce is active
    if (!class_exists('WC_Payment_Gateway')) {
        return;
    }

    // Include gateway classes
    require_once plugin_dir_path(__FILE__) . 'includes/class-mpesa-gateway.php';
    require_once plugin_dir_path(__FILE__) . 'includes/class-paypal-gateway.php';

    // Add custom gateways to WooCommerce
    add_filter('woocommerce_payment_gateways', 'add_my_custom_gateways');

    function add_my_custom_gateways($gateways) {
        $gateways[] = 'WC_Mpesa_Gateway';   // M-Pesa gateway
        $gateways[] = 'WC_Paypal_Gateway';  // PayPal gateway
        return $gateways;
    }
}
