<!DOCTYPE html>
<!-- Html start -->
<html lang="en">
<!-- Head Start -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/favicon.png" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php wp_title() ?></title>

    <!-- Google Monsterrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/assets/css/vendors/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/assets/css/vendors/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/css/vendors/wow-animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/assets/css/style.css" />
    <?php wp_head(); ?>
</head>
<!-- Head End -->

<!-- Body Start -->

<body <?php body_class() ?>>
    <!-- Loader Start 
    <div class="loader-wrapper">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logos/logo-dark.png" alt="" class="img-fluid">
        <div class="loader animate">
            <span>M</span>
            <span>S</span>
            <span>P</span>
            <span>A</span>
        </div>
    </div>
     Loader End -->

    <!-- Overlay -->
    <a href="javascript:void(0)" class="overlay-general"></a>
    <!-- Header Start -->
    <header class="header-common header3">
        <!-- Top Header -->
        <div class="top-header bg-theme-theme">
            <div class="container-lg">
                <div class="topheader-wrap">
                    <ul class="top-header">
                        <li><i data-feather="truck"></i> <span><?php echo get_theme_mod('truck') ?></span></li>
                        <li><i data-feather="award"></i> <span><?php echo get_theme_mod('award') ?></span></li>
                        <li><i data-feather="watch"></i> <span><?php echo get_theme_mod('watch') ?></span></li>
                        <li><i data-feather="archive"></i> <span><?php echo get_theme_mod('archive') ?></span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-lg">
            <div class="nav-wrap">
                <!-- Navigation Start -->
                <nav class="navigation">
                    <div class="nav-section">
                        <div class="header-section">
                            <div class="navbar navbar-expand-xl navbar-light navbar-sticky p-0">
                                <div class="d-flex logo-wraper">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu" aria-controls="primaryMenu">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <a href="<?php echo esc_url(home_url('/')) ?>" class="logo-link">
                                        <!--<img class="logo logo-dark" src="<?php echo bloginfo('template_url'); ?>/assets/images/logos/logo-dark.png" alt="logo" />
                                        <img class="logo logo-light" src="<?php echo bloginfo('template_url'); ?>/assets/images/logos/logo.png" alt="logo" />-->
                                        <img class="logo logo-dark" src="<?php echo get_theme_mod('second_logo'); ?>">
                                        <?php
                                        $custom_logo_id = get_theme_mod('custom_logo');
                                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                                        if ($image) {
                                            $html = '<img class="logo logo-light" src="' . $image[0] . '" alt="">';
                                        } else {
                                            $html = '<h4 class="beta site-title text-white">' . esc_html(get_bloginfo('name')) . '</a></h4>';
                                            if ('' !== get_bloginfo('description')) {
                                                $html .= '<p class="site-description">' . esc_html(get_bloginfo('description', 'display')) . '</p>';
                                            }
                                        }
                                        echo $html;
                                        ?>

                                    </a>
                                </div>

                                <div class="header-center d-flex align-items-center">
                                    <div class="search-header">
                                        <div class="search-bar">
                                            <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <?php
                                                            // for more information see http://codex.wordpress.org/Function_Reference/wp_dropdown_categories
                                                            $swp_cat_dropdown_args = array(
                                                                'show_option_all'  => __('Alla Kategorier'),
                                                                'name'             => 'product_category',
                                                                'exclude'           => array('15'),
                                                            );
                                                            //wp_dropdown_categories($swp_cat_dropdown_args);
                                                            ?>
                                                            <select name="product_category">
                                                                <option selected disabled>Alla Kategorier</option>
                                                                <?php
                                                                $args = array(
                                                                    'number' => false,
                                                                    'orderby' => 'name',
                                                                    'order' => 'ASC',
                                                                    'hide_empty' => false,
                                                                    //'include'    => $ids
                                                                    'exclude' => ['15'],
                                                                );
                                                                $product_categories = get_terms('product_cat', $args);
                                                                foreach ($product_categories as $cat) { ?>
                                                                    <option value="<?php echo $cat->slug ?>" <?php if ($cat->slug == $_GET['product_category']) echo "selected"; ?>><?php echo $cat->name ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </span>

                                                    </div>
                                                    <input type="text" class="form-control search-type" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="I’m shopping for... " name="s" />
                                                    <button class="input-group-append" type="submit">
                                                        <span class="input-group-text">
                                                            <i class="d-none d-lg-block search-b" data-feather="search"></i>
                                                            <i class="close-b d-lg-none" data-feather="x"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="facebook">
                                        <a href="https://www.facebook.com/"><i data-feather="facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navigation End -->

                <!-- Menu Right Start  -->
                <div class="menu-right">
                    <!-- Icon Menu Start -->
                    <ul class="icon-menu">
                        <li class="chat">
                            <a href="<?php home_url() ?>/store1"><i data-feather="message-circle"></i> Besök även <br> Nordic
                                Spa</a>
                        </li>

                        <li class="user">
                            <div class="dropdown user-dropdown">
                                <a href="javascript:void(0)"><i data-feather="user"></i></a>
                                <ul class="onhover-show-div">
                                    <li><a href="<?php echo home_url('my-account') ?>">Logga in</a></li>
                                    <li><a href="<?php echo home_url('my-account') ?>">Skapa konto</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="search">
                            <div class="dropdown user-dropdown">
                                <a href="javascript:void(0)"><i data-feather="search"></i></a>
                            </div>
                        </li>
                        <!-- Cart Menu Start -->
                        <li>
                            <div class="dropdown shopingbag">
                                <div class="side-list">
                                    <div>

                                        <a href="javascript:void(0)" class="cart-button"><i data-feather="shopping-cart"></i> <span class="notification-label"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>
                                        <a href="javascript:void(0)" class="overlay-cart overlay-common"></a>
                                        <div class="onhover-cart-dropdown">
                                            <div class="onhover-show-div">

                                                <?php /*<div class="dropdown-header">
                                                    <div class="control">
                                                        <a href="#">Shopping Cart</a>
                                                        <button class="back-cart"><i data-feather="arrow-right"></i></button>
                                                    </div>
                                                </div>*/ ?>

                                                <div class="card-wrap custom-scroll">
                                                    <?php woocommerce_mini_cart(); ?>
                                                </div>
                                                <?php /*<div class="dropdown-footer">
                                                    <div class="freedelevery">
                                                        <p class="terms-condition">FREE SHIPPING! Continue Shopping to
                                                            add more product to you cart and receive free shipping for
                                                            orders over <strong>$500</strong></p>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
                                                        </div>
                                                    </div>
                                                    <div class="total-price">
                                                        <span>Total</span>
                                                        <span>$450</span>
                                                    </div>

                                                    <div class="btn-group block-group">
                                                        <a href="#" class="btn-solid">View Cart</a>
                                                        <a href="#" class="btn-outline">Checkout</a>
                                                    </div>
                                                </div>*/ ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Cart Menu End -->
                        <li class="checkout-btn">
                            <a href="#" class="btn-style2">Till Kassan</a>
                        </li>
                    </ul>
                    <!-- Icon Menu End -->
                </div>
                <!-- Menu Right End  -->
            </div>
        </div>

        <div class="bg-theme-gray-light2">
            <div class="container-lg bottom-header">
                <div class="nav-wrap p-0">
                    <!-- Navigation Start -->
                    <nav class="navigation">
                        <div class="nav-section">
                            <div class="header-section">
                                <div class="navbar navbar-expand-xl navbar-light navbar-sticky p-0">

                                    <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
                                        <div class="offcanvas-header navbar-shadow">
                                            <h5 class="mt-1 mb-0">Menu</h5>
                                            <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <!-- Menu-->

                                            <?php
                                            // Display the primary menu
                                            wp_nav_menu(array(
                                                'container'     => '',
                                                'menu_class'    => 'navbar-nav',
                                                'theme_location' => 'header-menu',

                                                'depth'         => 3,
                                                'fallback_cb'   => false,
                                                'walker'         => new Child_Wrap(),
                                            ));
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- Navigation End -->

                    <!-- Menu Right Start  -->
                    <div class="menu-right">
                        <div class="side-box">
                            <a class="help text-uppercase" href="<?php echo home_url() . '/kontakt'; ?>"><i data-feather="arrow-right"></i> Kundtjänst </a>
                        </div>
                        <div class="side-box">
                            <a class="help" href="tel: <?php echo get_theme_mod('footer_phone') ?> "><i data-feather="phone"></i> <?php echo get_theme_mod('footer_phone') ?> </a>
                        </div>
                    </div>
                    <!-- Menu Right End  -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->