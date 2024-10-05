<?php

class WC_Paypal_Gateway extends WC_Payment_Gateway {

    public function __construct() {
        $this->id = 'paypal_custom';
        $this->icon = ''; // Set the PayPal icon here
        $this->has_fields = false;
        $this->method_title = 'PayPal';
        $this->method_description = 'Allows payments via PayPal';

        // Load the settings
        $this->init_form_fields();
        $this->init_settings();

        // Define user settings
        $this->title = $this->get_option('title');
        $this->description = $this->get_option('description');

        // Actions
        add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
    }

    // Form fields for admin settings
    public function init_form_fields() {
        $this->form_fields = array(
            'enabled' => array(
                'title'   => 'Enable/Disable',
                'type'    => 'checkbox',
                'label'   => 'Enable PayPal Payment',
                'default' => 'yes'
            ),
            'title' => array(
                'title'       => 'Title',
                'type'        => 'text',
                'description' => 'Payment method title shown to customers during checkout.',
                'default'     => 'PayPal',
                'desc_tip'    => true,
            ),
            'description' => array(
                'title'       => 'Description',
                'type'        => 'textarea',
                'description' => 'Payment method description that the customer will see during checkout.',
                'default'     => 'Pay with PayPal.',
            ),
            'paypal_email' => array(
                'title'       => 'PayPal Email',
                'type'        => 'text',
                'description' => 'Enter your PayPal email address.',
                'default'     => '',
            ),
        );
    }

    // Payment process
    public function process_payment($order_id) {
        $order = wc_get_order($order_id);

        // Redirect to PayPal payment page
        return array(
            'result'   => 'success',
            'redirect' => 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=' . urlencode($this->get_option('paypal_email')),
        );
    }
}
