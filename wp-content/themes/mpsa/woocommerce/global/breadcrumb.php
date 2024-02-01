<?php

/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if (!defined('ABSPATH')) {
	exit;
}
if (!is_product()) {
?>
	<div class="breadcrumb-wrap">
		<div class="banner">
			<img class="bg-img bg-top" src="<?php echo bloginfo('template_url'); ?>/assets/images/inner-page/banner-p.jpg" alt="banner" />

			<div class="container-lg">
				<div class="breadcrumb-box">
					<div class="heading-box">
						<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
							<h1 class="woocommerce-products-header__title1 page-title1"><?php woocommerce_page_title(); ?></h1>
						<?php endif; ?>

					</div>
					<ol class="breadcrumb">
						<?php
						if (!empty($breadcrumb)) {

							//echo $wrap_before;

							foreach ($breadcrumb as $key => $crumb) {

								echo $before;

								if (!empty($crumb[1]) && sizeof($breadcrumb) !== $key + 1) {
									echo '<li><a href="' . esc_url($crumb[1]) . '">' . esc_html($crumb[0]) . '</a><li>';
								} else {
									echo esc_html($crumb[0]);
								}

								echo $after;

								if (sizeof($breadcrumb) !== $key + 1) {
									echo $delimiter;
								}
							}

							//echo $wrap_after;
						} ?>
						<?php /*<li><a href="index.php">Hem</a></li>
					<li>
						<a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
					</li>
					<li class="current"><a href="javascript:;">Produkter</a></li>*/ ?>
					</ol>
				</div>
			</div>
		</div>
	</div>
<?php
}
