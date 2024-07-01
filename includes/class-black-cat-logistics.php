<?php
class Black_Cat_Logistics {
    public function __construct() {
        // Initialization code here
    }
    public function run() {
        // Hook into WooCommerce checkout process
        add_action('woocommerce_after_checkout_billing_form', array(, 'add_black_cat_logistics_option'));
        add_action('woocommerce_checkout_update_order_meta', array(, 'save_black_cat_logistics_option'));
    }
    public function add_black_cat_logistics_option() {
        echo '<div id=\
black_cat_logistics_option\><h2>' . __('Black Cat Logistics') . '</h2>';
        woocommerce_form_field('black_cat_logistics', array(
            'type' => 'checkbox',
            'class' => array('black-cat-logistics-field form-row-wide'),
            'label' => __('Use Black Cat Logistics'),
            ), ->get_value('black_cat_logistics'));
        echo '</div>';
    }
    public function save_black_cat_logistics_option() {
        if (['black_cat_logistics']) {
            update_post_meta(, '_black_cat_logistics', sanitize_text_field(['black_cat_logistics']));
        }
    }
}
?>
