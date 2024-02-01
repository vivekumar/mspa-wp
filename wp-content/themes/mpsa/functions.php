<?php

/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if (!function_exists('mpsa_block_styles')) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function mpsa_block_styles()
	{

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __('Arrow icon', 'mpsa'),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __('Pill', 'mpsa'),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __('Checkmark', 'mpsa'),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __('With arrow', 'mpsa'),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __('With asterisk', 'mpsa'),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
		add_theme_support('post-thumbnails');
		add_theme_support('custom-logo');
		//add_theme_support('block-templates');
		//add_theme_support('woocommerce');
	}
endif;

add_action('init', 'mpsa_block_styles');

/**
 * Enqueue block stylesheets.
 */

if (!function_exists('mpsa_block_stylesheets')) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function mpsa_block_stylesheets()
	{
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'mpsa-button-style-outline',
				'src'    => get_parent_theme_file_uri('assets/css/button-outline.css'),
				'ver'    => wp_get_theme(get_template())->get('Version'),
				'path'   => get_parent_theme_file_path('assets/css/button-outline.css'),
			)
		);
	}
endif;

add_action('init', 'mpsa_block_stylesheets');

/**
 * Register pattern categories.
 */

if (!function_exists('mpsa_pattern_categories')) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function mpsa_pattern_categories()
	{

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x('Pages', 'Block pattern category'),
				'description' => __('A collection of full page layouts.'),
			)
		);
	}
endif;

add_action('init', 'mpsa_pattern_categories');


function register_my_menu()
{
	register_nav_menu('header-menu', __('Menu'));
	register_nav_menu('footer-menu', __('Footer Menu'));
	register_nav_menu('footer-menu2', __('Footer Menu2'));
}
add_action('init', 'register_my_menu');

/**
 * Enqueue scripts and styles.
 */
function home_script_enqueue()
{

	//css

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/home.css', array(), '1.0.0', 'all');

	//js

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/home.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts()', 'home_script_enqueue');



/**
 * Add a sidebar.
 */
function acacia_theme_slug_widgets_init()
{
	register_sidebar(array(
		'name'          => __('News Sidebar', 'acacia'),
		'id'            => 'sidebar-1',
		'description'   => __('Widgets in this area will be shown on all News.', 'acacia'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
}
add_action('widgets_init', 'acacia_theme_slug_widgets_init');

add_action('customize_register', 'transparent_logo_customize_register');

function transparent_logo_customize_register($wp_customize)
{

	$wp_customize->add_setting('second_logo');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'second_logo', array(
		'label'    => __('Dark Logo', 'acacia'),
		'section'  => 'title_tagline',
		'settings' => 'second_logo',
		'priority'       => 4,
	)));
}

function special_nav_class($classes, $item)
{
	// Add 'nav-item dropdown' class to menu items with submenu
	if (in_array('menu-item-has-children', $item->classes)) {

		$classes[] = 'nav-item dropdown';
	} else {
		$classes[] = 'nav-item';
	}
	return $classes;
}

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);


class Child_Wrap extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = array())
	{
		$indent = str_repeat("\t", $depth);
		$output .= "\n<div class='dropdown-menu'>$indent<ul class=\"dropdown-column\">\n";
	}

	function end_lvl(&$output, $depth = 0, $args = array())
	{
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul></div>\n";
	}
}



require get_template_directory() . '/inc/customizer.php';

add_action('wp_ajax_contact_form', 'contact_form');
add_action('wp_ajax_nopriv_contact_form', 'contact_form');

function contact_form()
{
	echo $_POST['name'];
}






//woocommerce custom code for custom theme 

add_action('after_setup_theme', 'setup_woocommerce_support');
function setup_woocommerce_support()
{
	add_theme_support('woocommerce');
}
// woocommerce page
//remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
// // remove product meta description
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

// // remove  product description
// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
// // remove images
// remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
// // remove related products
// remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
// // remove additional information tabs
// remove_action('woocommerce_after_single_product_summary ', 'woocommerce_output_product_data_tabs', 10);

remove_action('woocommerce_before_single_product_summary ', 'woocommerce_show_product_images', 20);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 25);

add_filter('woocommerce_get_stock_html', 'filter_wc_get_stock_html', 10, 2);
function filter_wc_get_stock_html($html, $product)
{
	//if (!$product->is_type('variable') && !$product->get_manage_stock() && $product->is_in_stock()) {
	$html = '<p class="stock in-stock option">' . __("In Stock", "woocommerce") . '</p>';
	//}

	return $html;
}

/** 
 * Add Custom WooCommerce Loop Start
 */
function woocommerce_product_loop_start($echo = true)
{
	ob_start();
	if (!has_category()) {
		echo '<div class="view-option row g-3 g-xl-4 ratio_asos row-cols-2 row-cols-sm-3 row-cols-xl-4 grid-section">';
		if ($echo)
			echo ob_get_clean();
		else
			return ob_get_clean();
	}
}
add_filter('woocommerce_breadcrumb_defaults', 'wps_breadcrumb_delimiter');
function wps_breadcrumb_delimiter($defaults)
{
	$defaults['delimiter'] = ' >  ';
	return $defaults;
}


/**
 * @snippet       Plus Minus Quantity Buttons @ WooCommerce Single Product Page
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 8
 * @community     https://businessbloomer.com/club/
 */

add_action('woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus');

function bbloomer_display_quantity_minus()
{
	if (!is_product()) return;
	echo '<button type="button" class="minus sub" >-</button>';
}

add_action('woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus');

function bbloomer_display_quantity_plus()
{
	if (!is_product()) return;
	echo '<button type="button" class="plus add" >+</button>';
}

add_action('woocommerce_before_single_product', 'bbloomer_add_cart_quantity_plus_minus');

function bbloomer_add_cart_quantity_plus_minus()
{
	wc_enqueue_js("
	   $('form.cart').on( 'click', 'button.plus, button.minus', function() {
			 var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
			 var val   = parseFloat(qty.val());
			 var max = parseFloat(qty.attr( 'max' ));
			 var min = parseFloat(qty.attr( 'min' ));
			 var step = parseFloat(qty.attr( 'step' ));
			 if ( $( this ).is( '.plus' ) ) {
				if ( max && ( max <= val ) ) {
				   qty.val( max );
				} else {
				   qty.val( val + step );
				}
			 } else {
				if ( min && ( min >= val ) ) {
				   qty.val( min );
				} else if ( val > 1 ) {
				   qty.val( val - step );
				}
			 }
		  });
	");
}


add_filter('woocommerce_product_tabs', 'woo_custom_product_tabs');
function woo_custom_product_tabs($tabs)
{
	// 1) Removing tabs
	//unset($tabs['description']);              // Remove the description tab
	// unset( $tabs['reviews'] );               // Remove the reviews tab
	unset($tabs['additional_information']);   // Remove the additional information tab


	// 2 Adding new tabs and set the right order

	//Attribute Description tab
	$tabs['attrib_desc_tab'] = array(
		'title'     => __('Specifikationer', 'woocommerce'),
		'priority'  => 20,
		'callback'  => 'woo_specifikationer_tab_content'
	);



	// Adds the other products tab
	$tabs['other_products_tab'] = array(
		'title'     => __('Beskrivning', 'woocommerce'),
		'priority'  => 25,
		'callback'  => 'woo_beskrivning_products_tab_content'
	);

	return $tabs;
}

// New Tab contents

function woo_specifikationer_tab_content()
{
	// The attribute description tab content
	//$fields = get_field_objects();
	//print_r($fields);
	echo get_field('specifikationer');
}

function woo_beskrivning_products_tab_content()
{
	// The other products tab content
	echo get_field('beskrivning');
}

function extractPrices($product, $currency = "KR")
{
	if ($product->is_type('simple')) {
		return (object) ["regular_price" => $product->regular_price, "sale_price" => $product->sale_price];
	}

	$prices = $product->get_variation_prices(true);

	if (!empty($prices['price'])) {
		$min_price     = current($prices['price']);
		$max_price     = end($prices['price']);
		$min_reg_price = current($prices['regular_price']);
		$max_reg_price = end($prices['regular_price']);

		if ($min_price !== $max_price) {

			return (object) ["regular_price" => $max_price, "sale_price" => $min_price];
		} elseif ($product->is_on_sale() && $min_reg_price === $max_reg_price) {

			return (object) ["regular_price" => $max_reg_price, "sale_price" => $min_price];
		} else {

			return (object) ["regular_price" => $max_price, "sale_price" => $min_price];
		}
	}

	return (object) ["regular_price" => null, "sale_price" => null];
}

function calculeOff($prices): ?int
{
	if (!empty($prices->sale_price) && !empty($prices->regular_price)) {
		return round(100 - ($prices->sale_price / $prices->regular_price * 100));
	}
	return null;
}
add_filter('woocommerce_get_price_html', 'wpa83367_price_html', 100, 2);
function wpa83367_price_html($price, $product)
{ ?>
	<div class="option price">
		<span><?php echo get_post_meta(get_the_ID(), '_price', true) . get_woocommerce_currency_symbol(); ?></span>
		<?php
		if (get_post_meta(get_the_ID(), '_regular_price', true) !== get_post_meta(get_the_ID(), '_price', true)) {
			echo '<del>' . get_post_meta(get_the_ID(), '_regular_price', true) . get_woocommerce_currency_symbol() . '</del>';
		}

		?>

	</div>
<?php }
add_action('wp_ajax_load_product_details', 'load_product_details');    // If called from admin panel
add_action('wp_ajax_nopriv_load_product_details', 'load_product_details');
function load_product_details()
{


	$product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

	if ($product_id > 0) {
		$product = wc_get_product($product_id);
		$image_url = wp_get_attachment_image_url(get_post_thumbnail_id($product_id), 'full');
		if ($product) {
			$gallery_image_urls = array();
			$gallery_image_ids = $product->get_gallery_image_ids();
			foreach ($gallery_image_ids as $gallery_image_id) {
				$gallery_image_urls[] = wp_get_attachment_image_url($gallery_image_id, 'full');
			}

			$product_data = array(
				'id' => $product_id,
				'title' => $product->get_title(),
				'image' => $image_url,
				'price' => $product->get_price(),
				'description' => $product->get_short_description(),
				'gallery' => $gallery_image_urls,
				'attributes' => $product->get_attributes(),
				'stock_status' => $product->get_stock_status(),
				'paramalink' => $product->get_permalink()
			);

			wp_send_json_success($product_data);
		} else {
			wp_send_json_error('Product not found');
		}
	} else {
		wp_send_json_error('Invalid product ID');
	}



	/*
	$product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

	if ($product_id > 0) {
		$product = wc_get_product($product_id);
		//wc_get_template_part('content', 'product-swaper');
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
			?>
			<div>
				<span class="close-modal d-none d-md-block" data-bs-toggle="modal" data-bs-target="#viewModal"><i data-feather="x"></i></span>

				<div class="row gy-4 g-md-0">
					<div class="col-md-7">
						<div class="slider-box">
							<span class="close-modal d-md-none" data-bs-toggle="modal" data-bs-target="#viewModal"><i data-feather="x"></i></span>
							<div class="row g-2">
								<div class="col-2">
									<div class="thumbnail-box">
										<div class="swiper thumbnail-img-box thumbnailSlider">
											<div class="swiper-wrapper">
												<?php
												// Display the main product image
												$image_url = wp_get_attachment_image_url(get_post_thumbnail_id($product_id), 'full');
												?>
												<div class="swiper-slide">
													<img src="<?php echo esc_url($image_url); ?>" alt="feature img">
												</div>

												<?php
												// Display product gallery images
												foreach ($product->get_gallery_image_ids() as $gallery_image_id) {
													$gallery_image_url = wp_get_attachment_image_url($gallery_image_id, 'full');
												?>
													<div class="swiper-slide">
														<img src="<?php echo esc_url($gallery_image_url); ?>" alt="feature img">
													</div>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
								<div class="col-10 ratio_square">
									<div class="swiper mainslider">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<img src="<?php echo esc_url($image_url); ?>" alt="feature img">
											</div>
											<?php

											// Display product gallery thumbnails
											foreach ($product->get_gallery_image_ids() as $gallery_image_id) {
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
					<div class="col-md-5">
						<div class="product-detail-box">
							<div class="product-option">
								<h4 class="modal-title"><?php echo $product->get_title() ?></h4>
								<div class="option price">
									<h5>Price</h5>

									<span><?php echo get_post_meta($product_id, '_price', true) . get_woocommerce_currency_symbol(); ?></span>
									<?php
									if (get_post_meta($product_id, '_regular_price', true) !== get_post_meta($product_id, '_price', true)) {
										echo '<del>' . get_post_meta($product_id, '_regular_price', true) . get_woocommerce_currency_symbol() . '</del>';
									}

									?>
								</div>
								<div class="option">
									<h5>Product Description</h5>
									<p class="content-color"><?php echo $product->get_description() ?></p>
								</div>

								<div class="option">
									<h5>Quantity:</h5>
									<div class="plus-minus">
										<i class="sub" data-feather="minus"></i>
										<input type="number" value="1" min="1" max="10" />
										<i class="add" data-feather="plus"></i>
									</div>
								</div>

								<div class="btn-group">
									<a class="btn-solid btn-sm addtocart-btn" href="<?php echo get_home_url() ?>?add-to-cart=<?= $product_id ?>&quantity=1">Lägg i varukorgen</a>
									<!--<a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn-solid btn-sm addtocart-btn">Lägg i varukorgen</a>-->
									<a href="<?php echo $product->get_permalink() ?>" class="btn-outline btn-sm">View Full</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




		<?php
		
		}
	}

	wp_send_json_error('Error fetching product details');
	die; */
}
