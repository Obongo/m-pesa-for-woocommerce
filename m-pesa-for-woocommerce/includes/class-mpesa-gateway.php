<?php

class WC_Mpesa_Gateway extends WC_Payment_Gateway {

    public function __construct() {
        $this->id = 'mpesa';
        $this->icon = ''; // You can set the M-Pesa icon here
        $this->has_fields = false;
        $this->method_title = 'M-Pesa';
        $this->method_description = 'Allows payments via M-Pesa';

        // Load the settings
        $this->init_form_fields();
        $this->init_settings();

        // Define user settings
        $this->title = $this->get_option('title');
        $this->description = $this->get_option('description');

        // Actions
        add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
    }

    // Initialize form fields for admin settings
    public function init_form_fields() {
        $this->form_fields = array(
            'enabled' => array(
                'title'   => 'Enable/Disable',
                'type'    => 'checkbox',
                'label'   => 'Enable M-Pesa Payment',
                'default' => 'yes'
            ),
            'title' => array(
                'title'       => 'Title',
                'type'        => 'text',
                'description' => 'Payment method title shown to customers during checkout.',
                'default'     => 'M-Pesa',
                'desc_tip'    => true,
            ),
            'description' => array(
                'title'       => 'Description',
                'type'        => 'textarea',
                'description' => 'Payment method description that the customer will see during checkout.',
                'default'     => 'Pay with M-Pesa.',
            ),
            'consumer_key' => array(
                'title'       => 'Consumer Key',
                'type'        => 'text',
                'description' => 'Enter your M-Pesa API consumer key.',
                'default'     => '',
            ),
            'consumer_secret' => array(
                'title'       => 'Consumer Secret',
                'type'        => 'password',
                'description' => 'Enter your M-Pesa API consumer secret.',
                'default'     => '',
            ),
            'passkey' => array(
                'title'       => 'Passkey',
                'type'        => 'text',
                'description' => 'Enter your M-Pesa passkey.',
                'default'     => '',
            ),
        );
    }

    // Payment process
    public function process_payment($order_id) {
        global $woocommerce;
        $order = wc_get_order($order_id);

        // Call M-Pesa API here to process the payment

        // Example response
        $payment_successful = true;  // Example, replace with actual API response

        if ($payment_successful) {
            // Payment was successful, mark the order as complete
            $order->payment_complete();
            $woocommerce->cart->empty_cart();

            // Return thank you page redirect
            return array(
                'result'   => 'success',
                'redirect' => $this->get_return_url($order),
            );
        } else {
            // Payment failed
            wc_add_notice('M-Pesa payment failed. Please try again.', 'error');
            return;
        }
    }
}
