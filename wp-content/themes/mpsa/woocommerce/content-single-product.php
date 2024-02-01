<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<?php
// Assuming $product is your WooCommerce product object
$product_id = $product->get_id();
$product_gallery_ids = $product->get_gallery_image_ids();
?>
<!-- Breadcrumb End -->
<!-- Product Section Start -->
<section class="product-page product-style5">
	<div class="container-lg">
		<div <?php wc_product_class('', $product); ?>>
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			//do_action('woocommerce_before_single_product_summary');
			?>
			<div class="row g-3 g-xl-4 view-product ratio_asos">
				<div class="col-md-6 grid-img">
					<div class="slider-box sticky off-50 position-sticky">
						<?php if ($product->sale_price) { ?>
							<span class="onsale">
								<?php
								$price = extractPrices($product);
								echo calculeOff($price);
								?>% off
							</span>
						<?php } ?>
						<div class="row g-2">
							<div class="col-12 ratio_square">
								<div class="swiper mainslider4">
									<div class="swiper-wrapper">

										<?php
										// Display the main product image
										$image_url = wp_get_attachment_image_url(get_post_thumbnail_id($product_id), 'full');
										?>
										<div class="swiper-slide">
											<img src="<?php echo esc_url($image_url); ?>" alt="feature img" class="bg-img">
										</div>

										<?php
										// Display product gallery images
										foreach ($product_gallery_ids as $gallery_image_id) {
											$gallery_image_url = wp_get_attachment_image_url($gallery_image_id, 'full');
										?>
											<div class="swiper-slide">
												<img src="<?php echo esc_url($gallery_image_url); ?>" alt="feature img" class="bg-img">
											</div>
										<?php } ?>

									</div>
								</div>
							</div>

							<div class="col-12">
								<div class="thumbnail-box">
									<div class="swiper thumbnail-img-box thumbnailSlider4">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<img src="<?php echo esc_url($image_url); ?>" alt="feature img">
											</div>
											<?php
											// Display product gallery thumbnails
											foreach ($product_gallery_ids as $gallery_image_id) {
												$gallery_image_url = wp_get_attachment_image_url($gallery_image_id, 'thumbnail');
											?>
												<div class="swiper-slide">
													<img src="<?php echo esc_url($gallery_image_url); ?>" alt="thumbnail" class="img-fluid">
												</div>
											<?php } ?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="product-detail-box sticky off-88">
						<div class="product-option">

							<?php
							/**
							 * Hook: woocommerce_single_product_summary.
							 *
							 * @hooked woocommerce_template_single_title - 5
							 * @hooked woocommerce_template_single_rating - 10
							 * @hooked woocommerce_template_single_price - 10
							 * @hooked woocommerce_template_single_excerpt - 20
							 * @hooked woocommerce_template_single_add_to_cart - 30
							 * @hooked woocommerce_template_single_meta - 40
							 * @hooked woocommerce_template_single_sharing - 50
							 * @hooked WC_Structured_Data::generate_product_data() - 60
							 */
							do_action('woocommerce_single_product_summary');
							?>
						</div>

					</div>
					<?php /*<div class="product-option">
						<h2><?php the_title() ?></h2>
						<div class="option rating-option">

							<ul class="rating p-0">
								<li>
									<i class="fill" data-feather="star"></i>
								</li>
								<li>
									<i class="fill" data-feather="star"></i>
								</li>
								<li>
									<i class="fill" data-feather="star"></i>
								</li>
								<li>
									<i class="fill" data-feather="star"></i>
								</li>
								<li>
									<i data-feather="star"></i>
								</li>
							</ul>
							<span>120 Rating</span>
						</div>
						<div class="option price">
							<span> 13995,00 kr </span>
							<del>17995,00 kr</del>
						</div>
						<div class="option">
							<p class="content-color">Vill du njuta av lyxen att ha ditt eget spa hemma? Vi har precis
								lanserat vår nya Mono Frame, en revolutionerande uppblåsbar spabadsmodell med plats för upp
								till 8 personer.</p>

						</div>
						<div class="option-side color-side">

							<div class="option">
								<div class="title-box4">
									<h4 class="heading">Quantity: <span class="bg-theme-blue"></span>
									</h4>
								</div>
								<div class="plus-minus">
									<i class="sub" data-feather="minus"></i>
									<input type="number" value="1" min="1" max="10" />
									<i class="add" data-feather="plus"></i>
								</div>
							</div>
						</div>
						<div class="option sale-details">
							<div class="title-box4">
								<h4 class="heading">Sale End In <span class="bg-theme-blue"></span>
								</h4>
							</div>
							<ul class="timer">
								<li>
									<span class="days time-value"></span>
									<span class="timer-label">Days</span>
								</li>
								<li>
									<span class="hours time-value"></span>
									<span class="timer-label">Hours</span>
								</li>
								<li>
									<span class="minutes time-value"></span>
									<span class="timer-label">Minute</span>
								</li>
								<li>
									<span class="seconds time-value"></span>
									<span class="timer-label">Seconds</span>
								</li>
							</ul>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="option shipping-info">
									<div class="title-box1">
										<h4 class="heading">Fraktfri leverans! <span class="bg-theme-blue"></span></h4>
										<h4 class="heading">Finns i lager - Leveranstid ca 2-5 dagar <span class="bg-theme-blue"></span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="btn-group">
							<a href="javascript:void(0)" class="btn-solid btn-sm addtocart-btn">Lägg i varukorgen </a>
							<a href="javascript:void(0)" class="btn-outline btn-sm wishlist-btn">Add To Wishlist</a>
						</div>
					</div>
					*/ ?>
				</div>
			</div>
		</div>


	</div>
</section>
<!-- Product Section End -->
<!-- New Arrived Section Start -->
<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action('woocommerce_after_single_product_summary');
?>
<!-- New Arrived Section End -->


<?php do_action('woocommerce_after_single_product'); ?>