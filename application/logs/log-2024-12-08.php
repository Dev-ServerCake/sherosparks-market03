<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2024-12-08 02:37:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 02:37:00 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 02:37:00 --> Razorpay IPN POST --> array (
  'entity' => 'event',
  'account_id' => 'acc_PNyts1CdoXXmj0',
  'event' => 'order.paid',
  'contains' => 
  array (
    0 => 'payment',
    1 => 'order',
  ),
  'payload' => 
  array (
    'payment' => 
    array (
      'entity' => 
      array (
        'id' => 'pay_PU86Xy1JqU00Qw',
        'entity' => 'payment',
        'amount' => 36645,
        'currency' => 'INR',
        'status' => 'captured',
        'order_id' => 'order_PU86DAzp5w4TXA',
        'invoice_id' => NULL,
        'international' => false,
        'method' => 'upi',
        'amount_refunded' => 0,
        'refund_status' => NULL,
        'captured' => true,
        'description' => NULL,
        'card_id' => NULL,
        'bank' => NULL,
        'wallet' => NULL,
        'vpa' => 'ggggg@okicici',
        'email' => 'test07@gmail.com',
        'contact' => '+919789976898',
        'notes' => 
        array (
        ),
        'fee' => 865,
        'tax' => 132,
        'error_code' => NULL,
        'error_description' => NULL,
        'error_source' => NULL,
        'error_step' => NULL,
        'error_reason' => NULL,
        'acquirer_data' => 
        array (
          'rrn' => '199950645688',
          'upi_transaction_id' => 'A3CEC83D7817998474AE25CBBE7C9F0E',
        ),
        'created_at' => 1733540312,
        'reward' => NULL,
        'upi' => 
        array (
          'vpa' => 'ggggg@okicici',
        ),
      ),
    ),
    'order' => 
    array (
      'entity' => 
      array (
        'id' => 'order_PU86DAzp5w4TXA',
        'entity' => 'order',
        'amount' => 36645,
        'amount_paid' => 36645,
        'amount_due' => 0,
        'currency' => 'INR',
        'receipt' => '16',
        'offer_id' => NULL,
        'status' => 'paid',
        'attempts' => 1,
        'notes' => 
        array (
        ),
        'created_at' => 1733540292,
      ),
    ),
  ),
  'created_at' => 1733540313,
)
ERROR - 2024-12-08 02:37:00 --> Razorpay IPN SERVER --> array (
  'PHP_INI_SCAN_DIR' => ':/home/sherosparks01/public_html',
  'LSPHP_ENABLE_USER_INI' => 'on',
  'PATH' => '/bin:/usr/bin',
  'HTTP_ACCEPT_ENCODING' => 'gzip',
  'CONTENT_TYPE' => 'application/json',
  'CONTENT_LENGTH' => '1064',
  'HTTP_HOST' => 'sherosparks.staunchpreview.com',
  'HTTP_USER_AGENT' => 'Razorpay-Webhook/v1',
  'HTTP_REQUEST_ID' => 'PU86a6M8TtqYOS',
  'HTTP_X_RAZORPAY_EVENT_ID' => 'PU86a6M8TtqYOS',
  'HTTP_X_RAZORPAY_SIGNATURE' => '30b10326f381662ba81b2f31a1443a5cffaa3a6474943fa62e305cb9bcbcd19e',
  'DOCUMENT_ROOT' => '/home/sherosparks01/public_html',
  'REMOTE_ADDR' => '52.66.76.63',
  'REMOTE_PORT' => '65321',
  'SERVER_ADDR' => '10.11.13.171',
  'SERVER_NAME' => 'sherosparks.staunchpreview.com',
  'SERVER_ADMIN' => 'support@servercake.in',
  'SERVER_PORT' => '443',
  'REQUEST_URI' => '/admin/webhook/razorpay',
  'REDIRECT_URL' => '/admin/webhook/razorpay',
  'HTTPS' => 'on',
  'REDIRECT_STATUS' => '200',
  'SSL_PROTOCOL' => 'TLSv1.3',
  'SSL_CIPHER' => 'TLS_AES_128_GCM_SHA256',
  'SSL_CIPHER_USEKEYSIZE' => '128',
  'SSL_CIPHER_ALGKEYSIZE' => '128',
  'LSWS_EDITION' => 'Openlitespeed 1.8.1',
  'X-LSCACHE' => 'on,crawler',
  'SCRIPT_FILENAME' => '/home/sherosparks01/public_html/index.php',
  'QUERY_STRING' => '',
  'SCRIPT_NAME' => '/index.php',
  'SERVER_PROTOCOL' => 'HTTP/1.1',
  'SERVER_SOFTWARE' => 'LiteSpeed',
  'REQUEST_METHOD' => 'POST',
  'PHP_SELF' => '/index.php',
  'REQUEST_TIME_FLOAT' => 1733605620.281055927276611328125,
  'REQUEST_TIME' => 1733605620,
  'argv' => 
  array (
    0 => '/admin/webhook/razorpay',
  ),
  'argc' => 1,
)
ERROR - 2024-12-08 02:37:00 --> razorpay Webhook | transaction order id --> '16'
DEBUG - 2024-12-08 02:37:00 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 02:37:00 --> Form_validation class already loaded. Second attempt ignored.
ERROR - 2024-12-08 02:37:00 --> Severity: 8192 --> trim(): Passing null to parameter #1 ($string) of type string is deprecated /home/sherosparks01/system/database/DB_query_builder.php 1204
ERROR - 2024-12-08 02:37:00 --> Severity: 8192 --> trim(): Passing null to parameter #1 ($string) of type string is deprecated /home/sherosparks01/system/database/DB_query_builder.php 1204
ERROR - 2024-12-08 02:37:00 --> Severity: 8192 --> json_decode(): Passing null to parameter #1 ($json) of type string is deprecated /home/sherosparks01/application/helpers/function_helper.php 4370
ERROR - 2024-12-08 02:37:00 --> Severity: Warning --> Undefined array key 3 /home/sherosparks01/application/helpers/function_helper.php 4452
ERROR - 2024-12-08 02:37:00 --> Severity: Warning --> Trying to access array offset on value of type null /home/sherosparks01/application/helpers/function_helper.php 4452
ERROR - 2024-12-08 02:37:00 --> Severity: 8192 --> strtotime(): Passing null to parameter #1 ($datetime) of type string is deprecated /home/sherosparks01/application/helpers/function_helper.php 4454
ERROR - 2024-12-08 02:37:00 --> Severity: 8192 --> json_decode(): Passing null to parameter #1 ($json) of type string is deprecated /home/sherosparks01/application/helpers/function_helper.php 4370
ERROR - 2024-12-08 02:37:00 --> Severity: Warning --> Undefined array key 3 /home/sherosparks01/application/helpers/function_helper.php 4452
ERROR - 2024-12-08 02:37:00 --> Severity: Warning --> Trying to access array offset on value of type null /home/sherosparks01/application/helpers/function_helper.php 4452
ERROR - 2024-12-08 02:37:00 --> Severity: 8192 --> strtotime(): Passing null to parameter #1 ($datetime) of type string is deprecated /home/sherosparks01/application/helpers/function_helper.php 4454
ERROR - 2024-12-08 02:37:00 --> Razorpay order -   data--> array (
  'total' => '1',
  'order_data' => 
  array (
    0 => 
    array (
      'id' => '16',
      'user_id' => '32',
      'address_id' => '5',
      'mobile' => '9789976898',
      'total' => '366.45',
      'delivery_charge' => '0',
      'is_delivery_charge_returnable' => '0',
      'wallet_balance' => '0',
      'promo_code' => ' ',
      'promo_discount' => '0',
      'discount' => '0',
      'total_payable' => '366.45',
      'final_total' => '366.45',
      'payment_method' => 'RazorPay',
      'is_cod_collected' => '0',
      'latitude' => '',
      'longitude' => '',
      'address' => '1-3, Keelamathur
Melakkal Main Road, Coimbatore, Tamil Nadu, India, 641042',
      'delivery_time' => 'Home',
      'status' => '',
      'delivery_date' => '2024-12-10',
      'date_added' => '2024-12-07 08:28:09',
      'otp' => '',
      'email' => 'test07@gmail.com',
      'notes' => '',
      'attachments' => 
      array (
      ),
      'is_pos_order' => '0',
      'is_shiprocket_order' => 0,
      'username' => 'SheroSparks',
      'user_profile' => 'https://sherosparks.staunchpreview.com/SheroSparks_Marketplace_Launch_Event_20241207_041008.jpg',
      'country_code' => '91',
      'name' => 'Eudwi Hair Regrowth Oil',
      'type' => 'simple_product',
      'download_allowed' => '0',
      'pickup_location' => ' ',
      'order_recipient_person' => 'Mathivathani',
      'special_price' => '349',
      'price' => '450',
      'seller_delivery_charge' => '0',
      'seller_promo_dicount' => '0',
      'courier_agency' => '',
      'tracking_id' => '',
      'url' => '',
      'is_returnable' => '0',
      'is_cancelable' => '0',
      'is_already_returned' => '0',
      'is_already_cancelled' => '0',
      'return_request_submitted' => '',
      'total_tax_percent' => '5',
      'total_tax_amount' => '17.45',
      'order_items' => 
      array (
        0 => 
        array (
          'id' => '30',
          'user_id' => '32',
          'order_id' => '16',
          'delivery_boy_id' => '',
          'seller_id' => '17',
          'is_credited' => '0',
          'otp' => NULL,
          'product_name' => 'Eudwi Hair Regrowth Oil',
          'variant_name' => '',
          'product_variant_id' => '109',
          'quantity' => '1',
          'price' => '366.45',
          'discounted_price' => '',
          'tax_ids' => '1',
          'tax_percent' => '5',
          'tax_amount' => 17.449999999999999289457264239899814128875732421875,
          'discount' => '0',
          'sub_total' => '366.45',
          'deliver_by' => '',
          'updated_by' => '0',
          'status' => 
          array (
            0 => 
            array (
              0 => 'received',
              1 => '07-12-2024 11:45:09pm',
            ),
          ),
          'admin_commission_amount' => '0',
          'seller_commission_amount' => '0',
          'active_status' => 'received',
          'hash_link' => 'NULL',
          'is_sent' => '0',
          'date_added' => '2024-12-07 08:28:09',
          'delivered_quantity' => '0',
          'product_id' => '108',
          'is_cancelable' => '0',
          'is_prices_inclusive_tax' => '0',
          'cancelable_till' => '',
          'type' => 'simple_product',
          'slug' => 'eudwi-hair-regrowth-oil',
          'download_allowed' => '0',
          'download_link' => '',
          'store_name' => 'Eudwi Organics',
          'seller_longitude' => '',
          'seller_mobile' => '6369865614',
          'seller_address' => '26/3, Quaidha Millatch st, \\\\r\\\\nAzad Nagar \\\\r\\\\nAmigikarai Chennai-29',
          'seller_latitude' => '',
          'delivery_boy_name' => '',
          'store_description' => '',
          'seller_rating' => '0.0',
          'seller_profile' => 'https://sherosparks.staunchpreview.com/uploads/seller/eudwi-organics.jpg',
          'courier_agency' => '',
          'tracking_id' => '',
          'awb_code' => NULL,
          'url' => '',
          'seller_name' => 'Mahin Taj',
          'is_returnable' => '1',
          'special_price' => '349',
          'main_price' => '450',
          'image' => 'https://sherosparks.staunchpreview.com/uploads/media/2024/Mahin_taj_product_8.jpg',
          'name' => 'Eudwi Hair Regrowth Oil',
          'pickup_location' => ' ',
          'weight' => '0',
          'seller_no_of_ratings' => '0',
          'product_rating' => '0',
          'user_rating' => '0',
          'user_rating_images' => 
          array (
          ),
          'user_rating_comment' => '',
          'order_counter' => '1',
          'order_cancel_counter' => '0',
          'order_return_counter' => '0',
          'net_amount' => 349.0,
          'varaint_ids' => '',
          'variant_values' => '',
          'attr_name' => '',
          'image_sm' => 'https://sherosparks.staunchpreview.com/uploads/media/2024/thumb-sm/Mahin_taj_product_8.jpg',
          'image_md' => 'https://sherosparks.staunchpreview.com/uploads/media/2024/thumb-md/Mahin_taj_product_8.jpg',
          'is_already_returned' => '0',
          'is_already_cancelled' => '0',
          'return_request_submitted' => '',
          'shiprocket_order_tracking_url' => '',
          'email' => 'test07@gmail.com',
          'is_consignment_created' => 0,
        ),
      ),
    ),
  ),
)
ERROR - 2024-12-08 02:37:00 --> Severity: Warning --> Undefined variable $rows /home/sherosparks01/application/views/admin/pages/view/email-template.php 413
ERROR - 2024-12-08 02:37:00 --> Severity: Warning --> foreach() argument must be of type array|object, null given /home/sherosparks01/application/views/admin/pages/view/email-template.php 413
ERROR - 2024-12-08 02:37:00 --> Severity: Warning --> Undefined array key "total_payable" /home/sherosparks01/application/views/admin/pages/view/email-template.php 534
DEBUG - 2024-12-08 02:37:00 --> Email class already loaded. Second attempt ignored.
ERROR - 2024-12-08 02:37:01 --> Severity: Warning --> fsockopen(): Unable to connect to ssl://smtp.googlemail.com:465 (Network is unreachable) /home/sherosparks01/system/libraries/Email.php 1917
ERROR - 2024-12-08 02:37:01 --> Severity: Warning --> Undefined array key 0 /home/sherosparks01/application/controllers/admin/Webhook.php 174
ERROR - 2024-12-08 02:37:01 --> Severity: Warning --> Trying to access array offset on value of type null /home/sherosparks01/application/controllers/admin/Webhook.php 174
ERROR - 2024-12-08 02:37:01 --> Severity: Warning --> Undefined array key 0 /home/sherosparks01/application/controllers/admin/Webhook.php 179
ERROR - 2024-12-08 02:37:01 --> Severity: Warning --> Trying to access array offset on value of type null /home/sherosparks01/application/controllers/admin/Webhook.php 179
ERROR - 2024-12-08 02:37:01 --> Severity: error --> Exception: Call to undefined function notify_event() /home/sherosparks01/application/controllers/admin/Webhook.php 199
DEBUG - 2024-12-08 02:55:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 02:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 02:55:08 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 02:55:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 02:55:08 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 02:55:08 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 08:25:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 08:25:08 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 08:25:08 --> Razorpay IPN POST --> array (
  'entity' => 'event',
  'account_id' => 'acc_PNyts1CdoXXmj0',
  'event' => 'order.paid',
  'contains' => 
  array (
    0 => 'payment',
    1 => 'order',
  ),
  'payload' => 
  array (
    'payment' => 
    array (
      'entity' => 
      array (
        'id' => 'pay_PU86Xy1JqU00Qw',
        'entity' => 'payment',
        'amount' => 36645,
        'currency' => 'INR',
        'status' => 'captured',
        'order_id' => 'order_PU86DAzp5w4TXA',
        'invoice_id' => NULL,
        'international' => false,
        'method' => 'upi',
        'amount_refunded' => 0,
        'refund_status' => NULL,
        'captured' => true,
        'description' => NULL,
        'card_id' => NULL,
        'bank' => NULL,
        'wallet' => NULL,
        'vpa' => 'ggggg@okicici',
        'email' => 'test07@gmail.com',
        'contact' => '+919789976898',
        'notes' => 
        array (
        ),
        'fee' => 865,
        'tax' => 132,
        'error_code' => NULL,
        'error_description' => NULL,
        'error_source' => NULL,
        'error_step' => NULL,
        'error_reason' => NULL,
        'acquirer_data' => 
        array (
          'rrn' => '199950645688',
          'upi_transaction_id' => 'A3CEC83D7817998474AE25CBBE7C9F0E',
        ),
        'created_at' => 1733540312,
        'reward' => NULL,
        'upi' => 
        array (
          'vpa' => 'ggggg@okicici',
        ),
      ),
    ),
    'order' => 
    array (
      'entity' => 
      array (
        'id' => 'order_PU86DAzp5w4TXA',
        'entity' => 'order',
        'amount' => 36645,
        'amount_paid' => 36645,
        'amount_due' => 0,
        'currency' => 'INR',
        'receipt' => '16',
        'offer_id' => NULL,
        'status' => 'paid',
        'attempts' => 1,
        'notes' => 
        array (
        ),
        'created_at' => 1733540292,
      ),
    ),
  ),
  'created_at' => 1733540313,
)
ERROR - 2024-12-08 08:25:08 --> Razorpay IPN SERVER --> array (
  'PHP_INI_SCAN_DIR' => ':/home/sherosparks01/public_html',
  'LSPHP_ENABLE_USER_INI' => 'on',
  'PATH' => '/bin:/usr/bin',
  'HTTP_ACCEPT_ENCODING' => 'gzip',
  'CONTENT_TYPE' => 'application/json',
  'CONTENT_LENGTH' => '1064',
  'HTTP_HOST' => 'sherosparks.staunchpreview.com',
  'HTTP_USER_AGENT' => 'Razorpay-Webhook/v1',
  'HTTP_REQUEST_ID' => 'PU86a6M8TtqYOS',
  'HTTP_X_RAZORPAY_EVENT_ID' => 'PU86a6M8TtqYOS',
  'HTTP_X_RAZORPAY_SIGNATURE' => '30b10326f381662ba81b2f31a1443a5cffaa3a6474943fa62e305cb9bcbcd19e',
  'DOCUMENT_ROOT' => '/home/sherosparks01/public_html',
  'REMOTE_ADDR' => '52.66.75.174',
  'REMOTE_PORT' => '45495',
  'SERVER_ADDR' => '10.11.13.171',
  'SERVER_NAME' => 'sherosparks.staunchpreview.com',
  'SERVER_ADMIN' => 'support@servercake.in',
  'SERVER_PORT' => '443',
  'REQUEST_URI' => '/admin/webhook/razorpay',
  'REDIRECT_URL' => '/admin/webhook/razorpay',
  'HTTPS' => 'on',
  'REDIRECT_STATUS' => '200',
  'SSL_PROTOCOL' => 'TLSv1.3',
  'SSL_CIPHER' => 'TLS_AES_128_GCM_SHA256',
  'SSL_CIPHER_USEKEYSIZE' => '128',
  'SSL_CIPHER_ALGKEYSIZE' => '128',
  'LSWS_EDITION' => 'Openlitespeed 1.8.1',
  'X-LSCACHE' => 'on,crawler',
  'SCRIPT_FILENAME' => '/home/sherosparks01/public_html/index.php',
  'QUERY_STRING' => '',
  'SCRIPT_NAME' => '/index.php',
  'SERVER_PROTOCOL' => 'HTTP/1.1',
  'SERVER_SOFTWARE' => 'LiteSpeed',
  'REQUEST_METHOD' => 'POST',
  'PHP_SELF' => '/index.php',
  'REQUEST_TIME_FLOAT' => 1733626508.0283000469207763671875,
  'REQUEST_TIME' => 1733626508,
  'argv' => 
  array (
    0 => '/admin/webhook/razorpay',
  ),
  'argc' => 1,
)
ERROR - 2024-12-08 08:25:08 --> razorpay Webhook | transaction order id --> '16'
DEBUG - 2024-12-08 08:25:08 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 08:25:08 --> Form_validation class already loaded. Second attempt ignored.
ERROR - 2024-12-08 08:25:08 --> Severity: 8192 --> trim(): Passing null to parameter #1 ($string) of type string is deprecated /home/sherosparks01/system/database/DB_query_builder.php 1204
ERROR - 2024-12-08 08:25:08 --> Severity: 8192 --> trim(): Passing null to parameter #1 ($string) of type string is deprecated /home/sherosparks01/system/database/DB_query_builder.php 1204
ERROR - 2024-12-08 08:25:08 --> Severity: 8192 --> json_decode(): Passing null to parameter #1 ($json) of type string is deprecated /home/sherosparks01/application/helpers/function_helper.php 4370
ERROR - 2024-12-08 08:25:08 --> Severity: Warning --> Undefined array key 3 /home/sherosparks01/application/helpers/function_helper.php 4452
ERROR - 2024-12-08 08:25:08 --> Severity: Warning --> Trying to access array offset on value of type null /home/sherosparks01/application/helpers/function_helper.php 4452
ERROR - 2024-12-08 08:25:08 --> Severity: 8192 --> strtotime(): Passing null to parameter #1 ($datetime) of type string is deprecated /home/sherosparks01/application/helpers/function_helper.php 4454
ERROR - 2024-12-08 08:25:08 --> Severity: 8192 --> json_decode(): Passing null to parameter #1 ($json) of type string is deprecated /home/sherosparks01/application/helpers/function_helper.php 4370
ERROR - 2024-12-08 08:25:08 --> Severity: Warning --> Undefined array key 3 /home/sherosparks01/application/helpers/function_helper.php 4452
ERROR - 2024-12-08 08:25:08 --> Severity: Warning --> Trying to access array offset on value of type null /home/sherosparks01/application/helpers/function_helper.php 4452
ERROR - 2024-12-08 08:25:08 --> Severity: 8192 --> strtotime(): Passing null to parameter #1 ($datetime) of type string is deprecated /home/sherosparks01/application/helpers/function_helper.php 4454
ERROR - 2024-12-08 08:25:08 --> Razorpay order -   data--> array (
  'total' => '1',
  'order_data' => 
  array (
    0 => 
    array (
      'id' => '16',
      'user_id' => '32',
      'address_id' => '5',
      'mobile' => '9789976898',
      'total' => '366.45',
      'delivery_charge' => '0',
      'is_delivery_charge_returnable' => '0',
      'wallet_balance' => '0',
      'promo_code' => ' ',
      'promo_discount' => '0',
      'discount' => '0',
      'total_payable' => '366.45',
      'final_total' => '366.45',
      'payment_method' => 'RazorPay',
      'is_cod_collected' => '0',
      'latitude' => '',
      'longitude' => '',
      'address' => '1-3, Keelamathur
Melakkal Main Road, Coimbatore, Tamil Nadu, India, 641042',
      'delivery_time' => 'Home',
      'status' => '',
      'delivery_date' => '2024-12-10',
      'date_added' => '2024-12-07 08:28:09',
      'otp' => '',
      'email' => 'test07@gmail.com',
      'notes' => '',
      'attachments' => 
      array (
      ),
      'is_pos_order' => '0',
      'is_shiprocket_order' => 0,
      'username' => 'SheroSparks',
      'user_profile' => 'https://sherosparks.staunchpreview.com/SheroSparks_Marketplace_Launch_Event_20241207_041008.jpg',
      'country_code' => '91',
      'name' => 'Eudwi Hair Regrowth Oil',
      'type' => 'simple_product',
      'download_allowed' => '0',
      'pickup_location' => ' ',
      'order_recipient_person' => 'Mathivathani',
      'special_price' => '349',
      'price' => '450',
      'seller_delivery_charge' => '0',
      'seller_promo_dicount' => '0',
      'courier_agency' => '',
      'tracking_id' => '',
      'url' => '',
      'is_returnable' => '0',
      'is_cancelable' => '0',
      'is_already_returned' => '0',
      'is_already_cancelled' => '0',
      'return_request_submitted' => '',
      'total_tax_percent' => '5',
      'total_tax_amount' => '17.45',
      'order_items' => 
      array (
        0 => 
        array (
          'id' => '30',
          'user_id' => '32',
          'order_id' => '16',
          'delivery_boy_id' => '',
          'seller_id' => '17',
          'is_credited' => '0',
          'otp' => NULL,
          'product_name' => 'Eudwi Hair Regrowth Oil',
          'variant_name' => '',
          'product_variant_id' => '109',
          'quantity' => '1',
          'price' => '366.45',
          'discounted_price' => '',
          'tax_ids' => '1',
          'tax_percent' => '5',
          'tax_amount' => 17.449999999999999289457264239899814128875732421875,
          'discount' => '0',
          'sub_total' => '366.45',
          'deliver_by' => '',
          'updated_by' => '0',
          'status' => 
          array (
            0 => 
            array (
              0 => 'received',
              1 => '08-12-2024 02:37:01am',
            ),
          ),
          'admin_commission_amount' => '0',
          'seller_commission_amount' => '0',
          'active_status' => 'received',
          'hash_link' => 'NULL',
          'is_sent' => '0',
          'date_added' => '2024-12-07 08:28:09',
          'delivered_quantity' => '0',
          'product_id' => '108',
          'is_cancelable' => '0',
          'is_prices_inclusive_tax' => '0',
          'cancelable_till' => '',
          'type' => 'simple_product',
          'slug' => 'eudwi-hair-regrowth-oil',
          'download_allowed' => '0',
          'download_link' => '',
          'store_name' => 'Eudwi Organics',
          'seller_longitude' => '',
          'seller_mobile' => '6369865614',
          'seller_address' => '26/3, Quaidha Millatch st, \\\\r\\\\nAzad Nagar \\\\r\\\\nAmigikarai Chennai-29',
          'seller_latitude' => '',
          'delivery_boy_name' => '',
          'store_description' => '',
          'seller_rating' => '0.0',
          'seller_profile' => 'https://sherosparks.staunchpreview.com/uploads/seller/eudwi-organics.jpg',
          'courier_agency' => '',
          'tracking_id' => '',
          'awb_code' => NULL,
          'url' => '',
          'seller_name' => 'Mahin Taj',
          'is_returnable' => '1',
          'special_price' => '349',
          'main_price' => '450',
          'image' => 'https://sherosparks.staunchpreview.com/uploads/media/2024/Mahin_taj_product_8.jpg',
          'name' => 'Eudwi Hair Regrowth Oil',
          'pickup_location' => ' ',
          'weight' => '0',
          'seller_no_of_ratings' => '0',
          'product_rating' => '0',
          'user_rating' => '0',
          'user_rating_images' => 
          array (
          ),
          'user_rating_comment' => '',
          'order_counter' => '1',
          'order_cancel_counter' => '0',
          'order_return_counter' => '0',
          'net_amount' => 349.0,
          'varaint_ids' => '',
          'variant_values' => '',
          'attr_name' => '',
          'image_sm' => 'https://sherosparks.staunchpreview.com/uploads/media/2024/thumb-sm/Mahin_taj_product_8.jpg',
          'image_md' => 'https://sherosparks.staunchpreview.com/uploads/media/2024/thumb-md/Mahin_taj_product_8.jpg',
          'is_already_returned' => '0',
          'is_already_cancelled' => '0',
          'return_request_submitted' => '',
          'shiprocket_order_tracking_url' => '',
          'email' => 'test07@gmail.com',
          'is_consignment_created' => 0,
        ),
      ),
    ),
  ),
)
ERROR - 2024-12-08 08:25:08 --> Severity: Warning --> Undefined variable $rows /home/sherosparks01/application/views/admin/pages/view/email-template.php 413
ERROR - 2024-12-08 08:25:08 --> Severity: Warning --> foreach() argument must be of type array|object, null given /home/sherosparks01/application/views/admin/pages/view/email-template.php 413
ERROR - 2024-12-08 08:25:08 --> Severity: Warning --> Undefined array key "total_payable" /home/sherosparks01/application/views/admin/pages/view/email-template.php 534
DEBUG - 2024-12-08 08:25:08 --> Email class already loaded. Second attempt ignored.
ERROR - 2024-12-08 08:25:09 --> Severity: Warning --> fsockopen(): Unable to connect to ssl://smtp.googlemail.com:465 (Network is unreachable) /home/sherosparks01/system/libraries/Email.php 1917
ERROR - 2024-12-08 08:25:09 --> Severity: Warning --> Undefined array key 0 /home/sherosparks01/application/controllers/admin/Webhook.php 174
ERROR - 2024-12-08 08:25:09 --> Severity: Warning --> Trying to access array offset on value of type null /home/sherosparks01/application/controllers/admin/Webhook.php 174
ERROR - 2024-12-08 08:25:09 --> Severity: Warning --> Undefined array key 0 /home/sherosparks01/application/controllers/admin/Webhook.php 179
ERROR - 2024-12-08 08:25:09 --> Severity: Warning --> Trying to access array offset on value of type null /home/sherosparks01/application/controllers/admin/Webhook.php 179
ERROR - 2024-12-08 08:25:09 --> Severity: error --> Exception: Call to undefined function notify_event() /home/sherosparks01/application/controllers/admin/Webhook.php 199
DEBUG - 2024-12-08 05:31:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:31:01 --> No URI present. Default controller set.
DEBUG - 2024-12-08 05:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:31:01 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:31:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:01 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "brands"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "quick_view"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:02 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:01:02 --> Total execution time: 0.2147
DEBUG - 2024-12-08 05:31:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:31:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:31:13 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:31:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:13 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:01:13 --> Total execution time: 0.0144
DEBUG - 2024-12-08 05:31:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:31:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:31:13 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:31:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:13 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:01:13 --> Total execution time: 0.0130
DEBUG - 2024-12-08 05:31:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:31:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:31:13 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:31:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:13 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:13 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:01:13 --> Total execution time: 0.0100
DEBUG - 2024-12-08 05:31:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:31:14 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:31:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:01:14 --> Total execution time: 0.0103
DEBUG - 2024-12-08 05:31:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:31:14 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:31:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:01:14 --> Total execution time: 0.0127
DEBUG - 2024-12-08 05:31:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:31:14 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:31:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:01:14 --> Total execution time: 0.0140
DEBUG - 2024-12-08 05:31:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:31:14 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:31:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:01:14 --> Total execution time: 0.0122
DEBUG - 2024-12-08 05:31:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:31:14 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:31:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:01:14 --> Total execution time: 0.0097
DEBUG - 2024-12-08 05:31:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:31:14 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:31:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:31:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:01:14 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "password"
ERROR - 2024-12-08 11:01:14 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:01:14 --> Total execution time: 0.0139
DEBUG - 2024-12-08 05:32:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:32:01 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:02:01 --> Total execution time: 0.0147
DEBUG - 2024-12-08 05:32:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:32:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:32:01 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
DEBUG - 2024-12-08 11:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:02:01 --> Total execution time: 0.0147
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:02:01 --> Total execution time: 0.0154
DEBUG - 2024-12-08 05:32:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:32:01 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:02:01 --> Total execution time: 0.0142
DEBUG - 2024-12-08 05:32:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:32:01 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:02:01 --> Total execution time: 0.0139
DEBUG - 2024-12-08 05:32:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:32:01 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:02:01 --> Total execution time: 0.0151
DEBUG - 2024-12-08 05:32:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:32:01 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:02:01 --> Total execution time: 0.0136
DEBUG - 2024-12-08 05:32:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:32:01 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:01 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:01 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:02:01 --> Total execution time: 0.0126
DEBUG - 2024-12-08 05:32:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-08 05:32:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-08 05:32:03 --> Config file loaded: /home/sherosparks01/application/config/ion_auth.php
DEBUG - 2024-12-08 05:32:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:03 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:03 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:03 --> Ion_auth class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 05:32:03 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-08 11:02:03 --> Config file loaded: /home/sherosparks01/application/config/eshop.php
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "shop"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "blogs"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "look_like_you_are_lost"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "the_page_you_are_looking_for_is_not_available_so_please_check_your_url"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "become_a_seller"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "return_policy"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "shipping_policy"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "welcome_back"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "fill_your_email_and_password_to_sign_in"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "enter_mobile_number_or_email"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "dont_have_an_account"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "Sign_up_here"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "registration_takes_less_than_a_minute"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "enter_mobile_number"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "enter_valid_number"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "already_have_an_account"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "sign_in"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "otp"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "friends_code"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "password"
ERROR - 2024-12-08 11:02:03 --> Could not find the language line "buy_now"
DEBUG - 2024-12-08 11:02:03 --> Total execution time: 0.0132
