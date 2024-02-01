<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<div <?php //wc_product_class('', $product); 
		?> class="product_page">
	<div class="product-card">
		<div class="img-box">
			<!-- Thumbnail -->
			<ul class="thumbnail-img">
				<?php

				//if ($product->has_gallery()) {
				$gallery_ids = $product->get_gallery_image_ids();

				foreach ($gallery_ids as $key => $attachment_id) {
					$image_url = wp_get_attachment_image_src($attachment_id, 'full')[0]; // Get full-size URL
				?>
					<li class="thumb <?php if ($key == 0) {
											echo 'active';
										} ?>"><img src="<?php echo $image_url ?>" alt="thumbnail" /></li>
				<?php
					if ($key == 3) {
						break;
					}
				}
				//}
				?>


			</ul>

			<a href="<?php the_permalink() ?>" class="primary-img"><img class="img-fluid bg-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="product" /> </a>

			<!-- Rating -->
			<div class="rating">
				<span>185</span>
			</div>

			<!-- Option -->
			<ul class="option-wrap">
				<li>
					<a href="#"><i data-feather="repeat"></i></a>
				</li>
				<li>
					<a href="javascript:void(0)" onclick="quickView(<?php echo get_the_ID() ?>)">
						<i data-feather="eye"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="addtocart-btn"> <i data-feather="shopping-bag"></i>
					</a>
				</li>
			</ul>
		</div>

		<!-- Content Box -->
		<div class="content-box">
			<a href="<?php the_permalink() ?>">
				<p>Tillbehör</p>
				<h5><?php the_title() ?></h5>

				<span><?php echo get_post_meta(get_the_ID(), '_price', true) . get_woocommerce_currency_symbol(); ?></span>
				<?php
				if (get_post_meta(get_the_ID(), '_regular_price', true) !== get_post_meta(get_the_ID(), '_price', true)) {
					echo '<del>' . get_post_meta(get_the_ID(), '_regular_price', true) . get_woocommerce_currency_symbol() . '</del>';
				}

				?>

			</a>
		</div>

	</div>
</div>