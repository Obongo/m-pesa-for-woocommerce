# M-Pesa and PayPal Payment Gateway for WooCommerce

A WooCommerce plugin that integrates **M-Pesa** and **PayPal** as payment options. This plugin allows your customers to make payments directly through M-Pesa (a popular mobile payment solution in Kenya) and PayPal, a global online payment platform.

## Features

- **M-Pesa Integration**: Accept mobile payments via Safaricom M-Pesa.
- **PayPal Integration**: Secure global payment processing with PayPal.
- Supports **WooCommerce** checkout integration for seamless user experience.
- Fully configurable in the WordPress admin panel.
- Secure storage of API credentials with encryption.

## Prerequisites

- WordPress 5.5 or higher.
- WooCommerce 4.0 or higher.
- PHP 7.0 or higher.
- An M-Pesa API account (with valid Consumer Key, Consumer Secret, and Passkey) [Safaricom Developer Portal](https://developer.safaricom.co.ke/APIs).
- A PayPal business account.

## Installation

1. Download the plugin zip or clone this repository to your WordPress `/wp-content/plugins/` directory:

    ```bash
    git clone https://github.com/your-repo/m-pesa-paypal-woocommerce.git
    ```

2. Activate the plugin via the **Plugins** menu in WordPress.
   
3. Go to **WooCommerce > Settings > Payments** to configure the payment gateways.

## Configuration

### M-Pesa Configuration

1. Go to **WooCommerce > Settings > Payments > M-Pesa**.
2. Enter your M-Pesa credentials:
   - Consumer Key
   - Consumer Secret
   - Passkey
   - Shortcode
3. Enable M-Pesa payments and save the changes.

### PayPal Configuration

1. Go to **WooCommerce > Settings > Payments > PayPal**.
2. Enter your PayPal business email.
3. Enable PayPal payments and save the changes.

## Security Features

- **Encrypted API Credentials**: All M-Pesa and PayPal API credentials are securely encrypted in the database.
- **Nonce & CSRF Protection**: Nonce verification is added to all form submissions to prevent CSRF attacks.
- **Input Sanitization**: All inputs, including API keys and user data, are sanitized and validated before saving.
- **Webhook Security**: Webhook endpoints for payment notifications are protected and verified.
  
## Usage

After configuring the plugin:
- Your customers will see **M-Pesa** and **PayPal** as payment options during checkout.
- Upon successful payment, orders will automatically update in WooCommerce with the correct status.

## Security Notes

- Ensure your website uses **HTTPS** for secure API communication.
- Disable debugging (`WP_DEBUG`) in production environments to avoid exposing sensitive information.

## Contributing

Feel free to submit issues, feature requests, or pull requests to improve this plugin. Contributions are always welcome!

1. Fork this repository.
2. Create a new branch for your feature or fix: `git checkout -b my-new-feature`.
3. Commit your changes: `git commit -am 'Add some feature'`.
4. Push to the branch: `git push origin my-new-feature`.
5. Create a pull request.

## Author

- [Elvin Obongo](https://github.com/Obongo)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
