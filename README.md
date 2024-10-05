M-Pesa and PayPal Payment Gateway for WooCommerce

A WooCommerce plugin that integrates M-Pesa and PayPal as payment options. This plugin allows your customers to make payments directly through M-Pesa (a popular mobile payment solution in Kenya) and PayPal, a global online payment platform.

Features
M-Pesa Integration: Accept mobile payments via Safaricom M-Pesa.
PayPal Integration: Secure global payment processing with PayPal.
Supports WooCommerce checkout integration for seamless user experience.
Fully configurable in the WordPress admin panel.
Secure storage of API credentials with encryption.
Validated and sanitized inputs to prevent security vulnerabilities.
HTTPS required for all payment-related actions.
Prerequisites
WordPress 5.5 or higher.
WooCommerce 4.0 or higher.
PHP 7.0 or higher.
An M-Pesa API account (with valid Consumer Key, Consumer Secret, and Passkey) Safaricom Developer Portal.
A PayPal business account.
Installation
Download the plugin zip or clone this repository to your WordPress /wp-content/plugins/ directory:

git clone https://github.com/your-repo/m-pesa-paypal-woocommerce.git

Activate the plugin via the Plugins menu in WordPress.

Go to WooCommerce > Settings > Payments to configure the payment gateways.

Configuration
M-Pesa Configuration
Go to WooCommerce > Settings > Payments > M-Pesa.
Enter your M-Pesa credentials:
Consumer Key
Consumer Secret
Passkey
Shortcode
Enable M-Pesa payments and save the changes.
PayPal Configuration
Go to WooCommerce > Settings > Payments > PayPal.
Enter your PayPal business email.
Enable PayPal payments and save the changes.
Security Features
Encrypted API Credentials: All M-Pesa and PayPal API credentials are securely encrypted in the database.
Nonce & CSRF Protection: Nonce verification is added to all form submissions to prevent CSRF attacks.
Input Sanitization: All inputs, including API keys and user data, are sanitized and validated before saving.
Webhook Security: Webhook endpoints for payment notifications are protected and verified.
Usage
After configuring the plugin:

Your customers will see M-Pesa and PayPal as payment options during checkout.
Upon successful payment, orders will automatically update in WooCommerce with the correct status.
Security Notes
Ensure your website uses HTTPS for secure API communication.
Disable debugging (WP_DEBUG) in production environments to avoid exposing sensitive information.
Contributing
Feel free to submit issues, feature requests, or pull requests to improve this plugin. Contributions are always welcome!

Fork this repository.
Create a new branch for your feature or fix: git checkout -b my-new-feature.
Commit your changes: git commit -am 'Add some feature'.
Push to the branch: git push origin my-new-feature.
Create a pull request.
License
This project is licensed under the MIT License - see the LICENSE file for details.
