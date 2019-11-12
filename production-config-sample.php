<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'exampleuser');
define('DB_PASSWORD', 'examplepassword');
define('DB_HOST', 'localhost');

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp');

ini_set('display_errors', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG', false);

$table_prefix = 'wp_';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'PUT_VALUE_HERE');
define('SECURE_AUTH_KEY', 'PUT_VALUE_HERE');
define('LOGGED_IN_KEY', 'PUT_VALUE_HERE');
define('NONCE_KEY', 'PUT_VALUE_HERE');
define('AUTH_SALT', 'PUT_VALUE_HERE');
define('SECURE_AUTH_SALT', 'PUT_VALUE_HERE');
define('LOGGED_IN_SALT', 'PUT_VALUE_HERE');
define('NONCE_SALT', 'PUT_VALUE_HERE');