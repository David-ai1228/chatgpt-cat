<?php
/*
Plugin Name: Black Cat Logistics Integration
Description: Integrates Black Cat logistics with WooCommerce.
Version: 1.0
Author: Your Name
*/

// Define constants
define('BLACK_CAT_LOGISTICS_VERSION', '1.0');
define('BLACK_CAT_LOGISTICS_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Include main class file
require_once BLACK_CAT_LOGISTICS_PLUGIN_DIR . 'includes/class-black-cat-logistics.php';

// Initialize the plugin
function initialize_black_cat_logistics() {
     = new Black_Cat_Logistics();
    ->run();
}
add_action('plugins_loaded', 'initialize_black_cat_logistics');
?>
