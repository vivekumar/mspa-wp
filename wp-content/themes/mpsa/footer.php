<section class="newsletter-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="newsletter">
                    <div class="newsletter-content">
                        <h5>Registrera dig för nyhetsbrev</h5>
                        <p>Få våra senaste uppdateringar om våra produkter och kampanjer.</p>
                    </div>
                    <div class="newsletter-form">
                        <form action="" class="form">
                            <input required="" type="email" class="form-control bg_white" placeholder="din e-postadress">
                            <button type="submit" class="btn-style2 btn-theme mb-0">BESTÄLL</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Document Footer Start -->
<footer class="footer-document footer-document2 ratio_asos mb-xxl">
    <div class="bg-footer-l d-none"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/product/bg-footer-l.png" alt="banner" /></div>
    <div class="bg-footer-r d-none"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/product/bg-footer-r.png" alt="banner" /></div>


    <div class="footer__main">
        <div class="container-lg">
            <div class="main-footer">
                <div class="row gy-3 gy-md-4 gy-xl-0">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="content-box">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if ($image) {
                                $html = '<img class="logo" src="' . $image[0] . '" alt="">';
                            } else {
                                $html = '<h4 class="beta site-title text-white">' . esc_html(get_bloginfo('name')) . '</a></h4>';
                                if ('' !== get_bloginfo('description')) {
                                    $html .= '<p class="site-description">' . esc_html(get_bloginfo('description', 'display')) . '</p>';
                                }
                            }
                            echo $html;
                            ?>
                            <ul>
                                <li><i data-feather="map-pin"></i> <span> <?php echo get_theme_mod('footer_address') ?> </span></li>
                                <li>
                                    <i data-feather="phone"></i><a class="nav" href="tel:<?php echo get_theme_mod('footer_phone') ?>"><span> <?php echo get_theme_mod('footer_phone') ?>
                                        </span></a>
                                </li>
                                <li>
                                    <i data-feather="mail"></i><a class="nav" href="mailto:<?php echo get_theme_mod('footer_email') ?>"><span>
                                            <?php echo get_theme_mod('footer_email') ?> </span></a>
                                </li>
                                <li>
                                    <i data-feather="clock"></i><span><?php echo get_theme_mod('footer_time1') ?></span>
                                </li>
                                <li>
                                    <i data-feather="clock"></i><span><?php echo get_theme_mod('footer_time2') ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 order-md-3 order-lg-2 nav-footer">
                        <div class="nav content-box d-md-block">
                            <h5 class="heading-footer line-style">Hjälp</h5>
                            <?php
                            $consult_menu = wp_nav_menu(
                                array(
                                    'theme_location' => 'footer-menu',
                                    'menu_id' => '1',
                                    'menu_class' => ' ',
                                    'echo' => false
                                )
                            );
                            $consult_menu = str_replace('menu-item', 'nav-item', $consult_menu);
                            echo $consult_menu;
                            ?>

                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 order-md-4 order-lg-3 nav-footer">
                        <div class="nav d-md-block content-box">
                            <h5 class="heading-footer line-style">Kontakt</h5>
                            <?php
                            $consult_menu = wp_nav_menu(
                                array(
                                    'theme_location' => 'footer-menu2',
                                    'menu_id' => '1',
                                    'menu_class' => ' ',
                                    'echo' => false
                                )
                            );
                            $consult_menu = str_replace('menu-item', 'nav-item', $consult_menu);
                            echo $consult_menu;
                            ?>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-lg-4 order-md-2 order-lg-5">
                        <div class="content-box">
                            <h5 class="heading-footer line-style opacity-0">walley</h5>

                            <div class="partner">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/png/partner-walley.png" alt="" class="img-fluid">

                                <ul class="partner_menu">
                                    <li><a href="#">Faktura</a></li>
                                    <li><a href="#">Konto </a></li>
                                    <li><a href="#">Bankbetalning</a></li>
                                    <li><a href="#">Delbetalning</a></li>
                                </ul>

                                <ul class="payment_icon">
                                    <li><img src="<?php echo bloginfo('template_url'); ?>/assets/icons/png/master-card.png" class="img-fluid" alt="payment icon"></li>
                                    <li><img src="<?php echo bloginfo('template_url'); ?>/assets/icons/png/visa.png" class="img-fluid" alt="payment icon"></li>
                                    <li><img src="<?php echo bloginfo('template_url'); ?>/assets/icons/png/bandID.png" class="img-fluid" alt="payment icon">
                                    </li>
                                    <li><img src="<?php echo bloginfo('template_url'); ?>/assets/icons/png/american-express.png" class="img-fluid" alt="payment icon"></li>
                                </ul>
                            </div>

                            <div class="follow-wrap d-none">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/"> <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/social/fb.svg" alt="fb"> </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/accounts/login/?source=auth_switcher"> <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/social/inta.svg" alt="fb"> </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/i/flow/login"> <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/social/tw.svg" alt="fb"> </a>
                                    </li>
                                    <li>
                                        <a href="https://in.pinterest.com/"> <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/social/pint.svg" alt="fb"> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sub-footer">
                <div class="row gy-3">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <p class="mb-0">© 2023, MSpa Template. Made with heart by <a href="#">Infoicon</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Document Footer End -->

<!-- Mobile Menu Footer Start -->
<footer class="mobile-menu-footer d-sm-none">
    <ul>
        <li>
            <a href="index.php" class="active">
                <i data-feather="home"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="#" class="search-link">
                <i data-feather="search"></i>
                <span>Search</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i data-feather="shopping-bag"></i>
                <span>Cart</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i data-feather="heart"></i>
                <span>Wishlist</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i data-feather="user"></i>
                <span>Account</span>
            </a>
        </li>
    </ul>
</footer>
<!-- Mobile Menu Footer End -->

<!-- Notification Start -->
<div class="notification-wrap addToCart">
    <div class="notification">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/product/front/1.jpg" alt="product" />
        <div>
            <h5>Added To Cart</h5>
        </div>
    </div>
</div>
<!-- Notification End -->

<!-- View Product Modal Start -->
<div class="modal view-product fade" id="viewModal" tabindex="-1" aria-labelledby="viewModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
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

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 ratio_square">
                                    <div class="swiper mainslider">
                                        <div class="swiper-wrapper swiper-wrapper-bg">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="product-detail-box">
                            <div class="product-option">
                                <h4 class="modal-title"></h4>
                                <div class="option price">
                                    <h5>Price</h5>
                                    <!--<span>1495,00 kr </span> <del>1495,00 kr</del>-->
                                    <span class="product-price"></span>
                                </div>
                                <div class="option ">
                                    <h5>Product Description</h5>
                                    <p class="content-color product-description"></p>
                                </div>
                                <div class="option product-attributes">
                                    <?php /*<h5>Your Brand Color:</h5>
                                    <ul class="color-list">
                                        <li class="bg-theme-p-1 active"></li>
                                        <li class="bg-theme-p-2"></li>
                                        <li class="bg-theme-p-3"></li>
                                    </ul>*/ ?>
                                </div>
                                <div class="option stock-status">
                                </div>
                                <div class="option">
                                    <h5>Quantity:</h5>
                                    <div class="plus-minus">
                                        <i class="sub1" data-feather="minus"></i>
                                        <input type="number" id="quantityInput" value="1" min="1" max="10" />
                                        <i class="add1" data-feather="plus"></i>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <a href="javascript:void(0)" id="addToCartBtn" class="btn-solid btn-sm addtocart-btn">Lägg i varukorgen</a>
                                    <a href="#" class="btn-outline btn-sm view-detail">View Full</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- View Product Modal End -->

<!-- Cookies Section Start -->
<div class="cookie-bar cookies-bar-1 left-cookies">
    <img src="<?php echo bloginfo('template_url'); ?>/assets/png/cookie.png" alt="cookies" />
    <div class="content">
        <h5>Cookies Consent</h5>
        <p>This website use cookies to ensure you get the best experience on our website.</p>
        <div class="cookie-buttons">
            <button class="btn-solid btn-sm mb-line cookies-accept">Accept <i class="arrow"></i></button>
            <a href="javascript:void(0)" class="btn-solid btn-sm btn-outline cookies-accept">Learn more</a>
        </div>
    </div>
</div>
<!-- Cookie Section End -->

<!-- Tap To Top Button Start -->
<div class="tap-to-top-box hide">
    <button class="tap-to-top-button"><i data-feather="chevrons-up"></i></button>
</div>
<!-- Tap To Top Button End -->

<!-- Js -->
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/feather/feather.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/swiper-slider/swiper-bundle.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/swiper-slider/swiper-custom.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/timer.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/grid-style.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/sticky-header.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/active-class.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/wow.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/wow-custom.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/range-slider.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/script.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/theme-setting.js"></script>
<?php wp_footer() ?>
<script>
    function quickView(productId) {
        console.log(productId);
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        jQuery.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'load_product_details',
                product_id: productId
            },
            dataType: 'json',
            success: function(response) {
                console.log(response);

                var viewModal = new bootstrap.Modal(document.getElementById('viewModal'))
                //jQuery('#viewModal .modal-body').html(response);

                var thumbnailSlider = new Swiper(".thumbnailSlider", {
                    direction: "vertical",
                    watchSlidesProgress: true,
                    spaceBetween: 8,
                    slidesPerView: 4,

                });
                var mainSlider = new Swiper(".mainslider", {
                    spaceBetween: 2,

                    thumbs: {
                        swiper: thumbnailSlider,
                    },
                });




                if (response.success) {
                    displayProductModal(response.data);
                    //viewModal.show()
                } else {
                    console.error(response.data);
                }
            },
            error: function(error) {
                console.error(error);
            }
        });
    }

    function displayProductModal(productData) {
        // Get a reference to the modal element
        var modal = document.getElementById('viewModal');

        // Set product name
        var modalTitle = modal.querySelector('.modal-title');
        modalTitle.textContent = productData.title;

        // Set product price
        var productPrice = modal.querySelector('.product-price');
        productPrice.textContent = productData.price;

        // Set url price
        var productPrice = modal.querySelector('.view-detail');
        productPrice.setAttribute('href', productData.paramalink);

        // Set product description
        var productDescription = modal.querySelector('.product-description');
        productDescription.innerHTML = productData.description;

        // Display product gallery
        var galleryContainer = modal.querySelector('.swiper-wrapper');
        var galleryContainer_bg = modal.querySelector('.swiper-wrapper-bg');
        galleryContainer.innerHTML = '<div class="swiper-slide"><img src="' + productData.image + '" alt="Product Image"></div>';
        galleryContainer_bg.innerHTML = '<div class="swiper-slide"><img class="bg-img" src="' + productData.image + '" alt="Product Image"></div>'; // Clear existing content
        productData.gallery.forEach(function(imageUrl) {
            galleryContainer.innerHTML += '<div class="swiper-slide"><img src="' + imageUrl + '" alt="Product Image"></div>';
            galleryContainer_bg.innerHTML += '<div class="swiper-slide"><img class="bg-img" src="' + imageUrl + '" alt="Product Image"></div>';
        });

        // Display product attributes
        var attributesContainer = modal.querySelector('.product-attributes');
        attributesContainer.innerHTML = ''; // Clear existing content
        Object.entries(productData.attributes).forEach(([attributeName, attributeValue]) => {
            attributesContainer.innerHTML += '<p><strong>' + attributeName + ':</strong> ' + attributeValue + '</p>';
        });

        // Set product stock status
        var stockStatus = modal.querySelector('.stock-status');
        stockStatus.textContent = 'Stock Status: ' + productData.stock_status;

        // Update the quantity input element ID
        // Set the "Add to Cart" button URL with the correct quantity
        var addToCartBtn = document.getElementById('addToCartBtn'); //$('#addToCartBtn');
        addToCartBtn.setAttribute('href', '?add-to-cart=' + productData.id);


        // Create a new Bootstrap Modal instance and show it
        var modalInstance = new bootstrap.Modal(modal);
        modalInstance.show();
    }

    /*function setCartUrl(qty) {
        var addToCartBtn = document.getElementById('addToCartBtn'); //$('#addToCartBtn');
        var addToCartUrl = addToCartBtn.getAttribute('href');
        addToCartBtn.setAttribute('href', addToCartUrl + '&quantity=' + qty);

    }*/

    function setCartUrl(qty) {
        var addToCartBtn = document.getElementById('addToCartBtn');
        var addToCartUrl = addToCartBtn.getAttribute('href');

        // Remove existing quantity parameter if it exists
        addToCartUrl = addToCartUrl.replace(/(&|\?)quantity=\d+/, '');

        // Append the new quantity to the URL
        if (addToCartUrl.indexOf('?') === -1) {
            addToCartUrl += '?';
        } else {
            addToCartUrl += '&';
        }
        addToCartUrl += 'quantity=' + qty;

        addToCartBtn.setAttribute('href', addToCartUrl);
    }

    jQuery(document).ready(function($) {
        // Event listener for increasing quantity
        $('.add1').click(function() {
            var quantityInput = $('#quantityInput');
            var currentValue = parseInt(quantityInput.val());
            var maxValue = parseInt(quantityInput.attr('max'));

            if (currentValue < maxValue) {
                currentValue = currentValue + 1
                quantityInput.val(currentValue);
            }

            setCartUrl(currentValue);
        });

        // Event listener for decreasing quantity
        $('.sub1').click(function() {
            var quantityInput = $('#quantityInput');
            var currentValue = parseInt(quantityInput.val());
            var minValue = parseInt(quantityInput.attr('min'));

            if (currentValue > minValue) {
                currentValue = currentValue - 1
                quantityInput.val(currentValue);
            }
            setCartUrl(currentValue);
        });

        // Event listener for updating "Add to Cart" button URL based on quantity
        $('#quantityInput').change(function() {
            var quantity = $(this).val();
            setCartUrl(quantity);
        });
    });
</script>
</body>
<!-- Body End -->

</html>
<!-- Html End -->