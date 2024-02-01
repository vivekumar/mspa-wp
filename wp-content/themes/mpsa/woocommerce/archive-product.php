<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>

<!-- Shop Section Start -->
<section class="shop-page">
	<div class="container-lg">
		<div class="row gy-4 g-lg-3 g-xxl-4">
			<?php get_sidebar('product'); ?>

			<div class="col-lg-8 col-xl-9">
				<div class="row gy-5 g-lg-3 g-xxl-4">
					<div class="col-12 order-2 order-lg-1">
						<div class="round-wrap-content p-0 overflow-hidden">
							<!-- Banner Start -->
							<div class="sub-banner pos-relative">
								<img class="bg-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/inner-page/banner2.jpg" alt="banner" />
								<div class="heading-box">
									<div class="title-box4">
										<h2 class="heading">Marknadens <span class="bg-theme-blue"></span></h2>
										<h2 class="heading">mest sålda spabad <span class="bg-theme-blue"></span></h2>
									</div>
									<h4>i 2023 års lineup</h4>
									<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, libero.</p>

									<img class="small-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/banner1-1.png" alt="img" />
								</div>
							</div>
							<!-- Banner End -->
							<?php
							/**
							 * Hook: woocommerce_archive_description.
							 *
							 * @hooked woocommerce_taxonomy_archive_description - 10
							 * @hooked woocommerce_product_archive_description - 10
							 */
							do_action('woocommerce_archive_description');
							?>
						</div>
					</div>

					<div class="col-12 order-1 order-lg-2">
						<div class="shop-product">


							<div class="top-header-wrap">


								<?php
								if (woocommerce_product_loop()) {

									/**
									 * Hook: woocommerce_before_shop_loop.
									 *
									 * @hooked woocommerce_output_all_notices - 10
									 * @hooked woocommerce_result_count - 20
									 * @hooked woocommerce_catalog_ordering - 30
									 */
									do_action('woocommerce_before_shop_loop');

									//woocommerce_product_loop_start();
								?>


									<button class="filter-btn btn-solid btn-sm mb-line d-flex d-lg-none">Filter <i class="arrow"></i></button>
									<div class="grid-option-wrap">
										<div class="select-options">
											<div class="select-menu">
												<?php /*
												<div class="dropdown select-dropdown">
													<button class="select-showval" id="sortProduct"><span>24 Page Per View</span> <i data-feather="chevron-down"></i></button>
													<ul class="onhover-show-div select-vallist">
														<li class="select-list">Alphabetical A-Z</li>
														<li class="select-list">Alphabetical Z-A</li>
														<li class="select-list">$ High To Low</li>
														<li class="select-list">Date, Old To New</li>
														<li class="select-list">Date, New To Old</li>
													</ul>
												</div>
												
												<div class="dropdown select-dropdown small-dropdown">
													<button class="select-showval" id="featureProduct"><span>Select Feature</span> <i data-feather="chevron-down"></i></button>
													<ul class="onhover-show-div select-vallist">
														<li class="select-list">Spabad</li>
														<li class="select-list">Tillbehör</li>
														<li class="select-list">Fyndhörna</li>
														<li class="select-list">Filter</li>
														<li class="select-list">Poolkemi</li>
														<li class="select-list">Uteduschar</li>
														<li class="select-list">Spadofter</li>
														<li class="select-list">Grillar</li>
														<li class="select-list">Reservdelar</li>
													</ul>
												</div>
												*/ ?>
											</div>
										</div>

										<ul class="filter-option-grid d-none d-sm-flex">
											<li class="nav-item d-none d-sm-flex">
												<button class="nav-link" data-grid="2">
													<svg>
														<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/grid/_sprite.svg#grid-2"></use>
													</svg>
												</button>
											</li>
											<li class="nav-item d-none d-sm-flex">
												<button class="nav-link" data-grid="3">
													<svg>
														<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/grid/_sprite.svg#grid-3"></use>
													</svg>
												</button>
											</li>
											<li class="nav-item d-none d-xl-flex">
												<button class="nav-link active" data-grid="4">
													<svg>
														<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/grid/_sprite.svg#grid-4"></use>
													</svg>
												</button>
											</li>
											<li class="nav-item d-none d-sm-flex">
												<button class="nav-link" data-grid="list">
													<svg>
														<use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/grid/_sprite.svg#grid-list"></use>
													</svg>
												</button>
											</li>
										</ul>
									</div>
							</div>
						</div>
						<div class="product-tab-content">
							<div class="view-option row g-3 g-xl-4 ratio_asos row-cols-2 row-cols-sm-3 row-cols-xl-4 grid-section">
								<?php
									if (wc_get_loop_prop('total')) {
										while (have_posts()) {
											the_post();

											/**
											 * Hook: woocommerce_shop_loop.
											 */
											do_action('woocommerce_shop_loop');

											wc_get_template_part('content', 'product');
										}
									}
								?>
							</div>
						</div>
					<?php
									woocommerce_product_loop_end();

									/**
									 * Hook: woocommerce_after_shop_loop.
									 *
									 * @hooked woocommerce_pagination - 10
									 */
									do_action('woocommerce_after_shop_loop');
								} else {
									/**
									 * Hook: woocommerce_no_products_found.
									 *
									 * @hooked wc_no_products_found - 10
									 */
									do_action('woocommerce_no_products_found');
								}

								/**
								 * Hook: woocommerce_after_main_content.
								 *
								 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
								 */
								do_action('woocommerce_after_main_content');

								/**
								 * Hook: woocommerce_sidebar.
								 *
								 * @hooked woocommerce_get_sidebar - 10
								 */
								//do_action('woocommerce_sidebar');
					?>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer('shop');
