<?php
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');
print_r($_POST);
die;
$product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

if ($product_id > 0) {
    $product = wc_get_product($product_id);

    if ($product) {
        // Get product details
        $product_data = array(
            'title' => $product->get_title(),
            'price' => $product->get_price(),
            'description' => $product->get_description(),
            'gallery' => $product->get_gallery_image_ids(),
            'attributes' => $product->get_attributes(),
            'stock_status' => $product->get_stock_status(),
            // Add more product data as needed
        );

        wp_send_json_success($product_data);
    }
}

wp_send_json_error('Error fetching product details');
