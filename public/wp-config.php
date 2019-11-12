<?php
ini_set('display_errors', 0);

// ===================================================
// Load database info and local development parameters
// ===================================================
if (file_exists(dirname(__FILE__) . '/../production-config.php')) {
    define('WP_LOCAL_DEV', false);
    include(dirname(__FILE__) . '/../production-config.php');
} else {
    define('WP_LOCAL_DEV', true);
    include(dirname(__FILE__) . '/../local-config.php');
}

// ========================
// Custom Content Directory
// ========================
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');

// ========================
// Custom Upload Directory
// ========================
define('WP_UPLOAD_URL', '/wp-content/uploads');

// ================================================
// You almost certainly do not want to change these
// ================================================
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// ================================
// Language
// Leave blank for American English
// ================================
define('WPLANG', '');


// =========================
// Disable automatic updates
// =========================
define('AUTOMATIC_UPDATER_DISABLED', false);

// =========================
// Disable file mods
// =========================
define('DISALLOW_FILE_MODS', true);

// =======================
// Load WordPress Settings
// =======================
if (!isset($table_prefix)) {
    $table_prefix = 'wp_';
}

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/wp/');
}
require_once(ABSPATH . 'wp-settings.php');