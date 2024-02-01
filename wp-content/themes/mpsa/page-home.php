<?php get_header(); ?>

<!-- Main Start -->
<main class="main">
  <!-- Home Banner Section Start -->
  <section class="home-slider-common home-slider2 ratio_40 p-0">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <?php /* ?>
        <!-- Slide Start -->
        <div class="swiper-slide">
          <div class="banner">
            <div>
              <img class="bg-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/banner1.jpg" alt="banner" />
            </div>
            <!-- Banner Image Left -->
            <img class="img-fluid banner-left-img d-none d-sm-block" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/banner1-1.png" alt="banner" />

            <!-- Content Box -->
            <div class="content-box">
              <h1 class="heading">2023-års spabad <span> nu i lager</span></h1>
              <p class="d-none d-xl-block">Marknadens mest sålda spabad i 2023 års lineup</p>
              <a href="#" class="btn-style2">BESTÄLL NU</a>
            </div>

            <!-- Banner Image Right -->
            <img class="img-fluid banner-right-img" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/banner1-2.png" alt="banner" />
          </div>
        </div>
        <!-- Slide End -->
        <?php */ ?>
        <?php for ($i = 1; $i < 6; $i++) {
          $slider = get_theme_mod('slide' . $i);
          $button_link = get_theme_mod('slider_button_link' . $i);
          $slider_desc = get_theme_mod('slider_desc' . $i);
          if ($slider) {
        ?>
            <!-- Slide Start -->
            <div class="swiper-slide">
              <div class="banner">
                <div>
                  <img class="bg-img img-fluid" src="<?php echo $slider ?>" alt="banner" />
                </div>
                <!-- Content Box -->
                <div class="content-box">
                  <h1 class="heading"><?= get_theme_mod('heading1' . $i) ?> <span> <?= get_theme_mod('heading2' . $i) ?></span></h1>
                  <?php if ($slider_desc) { ?><p class="d-none d-xl-block"><?= $slider_desc ?></p><?php } ?>
                  <?php if ($button_link) { ?>
                    <a href="<?= $button_link ?>" class="btn-style2"><?= get_theme_mod('slider_button_text' . $i) ?></a>
                  <?php } ?>
                </div>
              </div>
            </div>
            <!-- Slide End -->
        <?php }
        } ?>



      </div>
      <div class="swiper-pagination small"></div>
    </div>
  </section>
  <!-- Home Banner Section End -->

  <!-- Categories Section Start -->
  <div class="catagories-section catagories-style-2">
    <div class="swiper home-catagories-2">
      <div class="swiper-wrapper">
        <?php
        $args = array(
          'post_type' => 'product',
          'posts_per_page' => 12,
          'tax_query' => array(
            array(
              'taxonomy' => 'product_visibility',
              'field'    => 'name',
              'terms'    => 'featured',
            ),
          ),
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) {
          while ($loop->have_posts()) : $loop->the_post();
            //wc_get_template_part( 'content', 'product' );
            //echo do_shortcode('[featured_products]')
        ?>
            <div class="swiper-slide">
              <div class="catagories">
                <a href="<?php the_permalink() ?>">
                  <div class="img-wrap">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="jeans" />
                  </div>
                </a>
              </div>
            </div>
        <?php
          endwhile;
        } else {
          echo __('No products found');
        }
        wp_reset_postdata();
        ?>



      </div>
    </div>
  </div>
  <!-- Categories Section End -->

  <!-- Offer Section Start -->
  <section class="offer-section pb-0">
    <div class="container-lg">
      <div class="row g-4 g-lg-6">
        <div class="col-6 col-sm-3">
          <div class="offer">
            <h5 class="offer-heading">
              GET 20% OFF
              <span class="bg-theme-pink"></span>
            </h5>
            <p>ON ORDERS OVER $20*</p>
          </div>
        </div>

        <div class="col-6 col-sm-3">
          <div class="offer">
            <h5 class="offer-heading">
              GET 23% OFF
              <span class="bg-theme-yellow"></span>
            </h5>
            <p>ON ORDERS OVER $50*</p>
          </div>
        </div>

        <div class="col-6 col-sm-3">
          <div class="offer">
            <h5 class="offer-heading">
              GET 47% OFF
              <span class="bg-theme-orange"></span>
            </h5>
            <p>ON ORDERS OVER $99*</p>
          </div>
        </div>

        <div class="col-6 col-sm-3">
          <div class="offer">
            <h5 class="offer-heading">
              Code : CODE09
              <span class="bg-theme-blue"></span>
            </h5>
            <p>Apply Code and get Discount</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Offer Section End -->

  <!-- Top Product Section Start -->
  <section class="ratio_asos">
    <div class="container-lg">
      <div class="title-box">
        <h2 class="unique-heading">Tillbehör</h2>
        <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
        <p>Tillbehör till ditt M-Spa</p>
      </div>

      <div class="swiper product-slider">
        <div class="swiper-wrapper">
          <?php
          $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12,
            'tax_query' => array(
              array(
                'taxonomy' => 'product_cat',
                'field'    => 'name',
                'terms'    => 'tillbehor',
              ),
            ),
          );
          $loop = new WP_Query($args);
          if ($loop->have_posts()) {
            while ($loop->have_posts()) : $loop->the_post();
              wc_get_template_part('content', 'product-swaper');
            endwhile;
          } else {
            echo __('No products found');
          }
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Top Product Section End -->


  <section class="pb-0">
    <div class="container-fluid">
      <div class="title-box">
        <h2 class="unique-heading">Videos </h2>
        <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
        <p>Tillbehör till ditt M-Spa</p>
      </div>

      <div class="row g-2 g-xl-3">
        <div class="col-md-6">
          <div class="product-page img-box">
            <video class="video-tag" loop="" autoplay="" muted="">
              <source src="https://m-spa.se/media/video/91/2d/6a/BRAND-VIDEO-MSPA.mp4" type="video/mp4">
              <source src="https://m-spa.se/media/video/91/2d/6a/BRAND-VIDEO-MSPA.mp4" type="video/ogg">
              Your browser does not support the video tag.
            </video>
          </div>
        </div>

        <div class="col-md-6">
          <div class="product-page img-box">
            <video class="video-tag" loop="" autoplay="" muted="">
              <source src="https://m-spa.se/media/video/1d/8e/ef/vinter_Tekapo.mp4" type="video/mp4">
              <source src="https://m-spa.se/media/video/1d/8e/ef/vinter_Tekapo.mp4" type="video/ogg">
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Special Product Section Start -->
  <section class="special-product special-product-2 pb-0">
    <div class="container-lg">
      <div class="title-box">
        <h2 class="unique-heading">SPECIAL PRODUCTS</h2>
        <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
        <p>Unique design hand bag made my famous designers trending on social events</p>
      </div>

      <div class="row g-2 g-xl-3">
        <div class="col-md-7">
          <div class="row g-2 g-xl-3">
            <div class="col-sm-8 ratio2_3 wow fadeInUp" data-wow-delay="0.1s">
              <div class="product-box">
                <a href="#" class="img-wrap">
                  <img class="bg-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/category/1.jpg" alt="catagories" />
                </a>
                <div class="catagories-small-label right-align">
                  <a href="#">
                    <h5>Extern</h5>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 ratio_asos wow fadeInUp" data-wow-delay="0.2s">
              <div class="product-box">
                <a href="#" class="img-wrap">
                  <img class="bg-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/category/2.jpg" alt="catagories" />
                </a>
                <div class="catagories-small-label">
                  <a href="#">
                    <h5>Rörmonterad display</h5>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 ratio_asos wow fadeInUp" data-wow-delay="0.3s">
              <div class="product-box">
                <a href="#" class="img-wrap">
                  <img class="bg-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/category/3.jpg" alt="catagories" />
                </a>
                <div class="catagories-small-label">
                  <a href="#">
                    <h5>Fastprisservice</h5>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 ratio_asos wow fadeInUp" data-wow-delay="0.4s">
              <div class="product-box">
                <a href="#" class="img-wrap">
                  <img class="bg-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/category/4.jpg" alt="catagories" />
                </a>
                <div class="catagories-small-label">
                  <a href="#">
                    <h5>Handkontroll</h5>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 ratio_asos wow fadeInUp" data-wow-delay="0.5s">
              <div class="product-box">
                <a href="#" class="img-wrap">
                  <img class="bg-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/category/5.jpg" alt="catagories" />
                </a>
                <div class="catagories-small-label">
                  <a href="#">
                    <h5>Lite</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5 ratio_115 wow fadeInUp" data-wow-delay="0.6s">
          <div class="product-box">
            <a href="#" class="img-wrap">
              <img class="bg-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/category/6.jpg" alt="catagories" />
            </a>
            <div class="catagories-large-label">
              <a href="#">
                <span class="title-color">Standard</span>
                <h3>GOING ON COLLECTION</h3>

                <ul class="timer">
                  <li><span class="days time-value"></span> <span class="timer-label">Days</span></li>
                  <li><span class="hours time-value"></span> <span class="timer-label">Hours</span></li>
                  <li><span class="minutes time-value"></span> <span class="timer-label">Minute</span></li>
                  <li><span class="seconds time-value"></span> <span class="timer-label">Seconds</span></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Special Product Section End -->

  <!-- Sub Banner Section Start -->
  <div class="sub-banner sub-banner-2 section-t-space ratio_asos">
    <div class="sub-banner">
      <img class="bg-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/sub-banner.jpg" alt="sub-banner" />

      <div class="content-box">
        <div class="heading-wrap">
          <span class="span-4">Super</span>
          <span class="span-3">SALE</span>
          <span class="offer-text">Save Up To <strong>50%</strong> OFF</span>
        </div>
        <a href="#" class="btn-style2">SHOP NOW</a>
      </div>
    </div>
  </div>
  <!-- Sub Banner Section End -->

  <!-- Best Seller Start -->
  <section class="best-seller pb-0">
    <div class="container-lg">
      <div class="title-box">
        <h2 class="unique-heading">BEST SELLER</h2>
        <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
        <p>The best ways to change your summer wardrobe into autumn wardrobe.</p>
      </div>

      <div class="row g-4 wow fadeInUp" data-wow-delay="0.6s">
        <div class="col-xxl-4">
          <div class="row g-3 g-xxl-4">
            <div class="col-md-6 col-xxl-12">
              <div class="product-card-side bg-theme-p-side-2">
                <div class="img-wrap">
                  <a href="#">
                    <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/4.jpg" alt="" />
                  </a>
                </div>
                <div class="content-box mb-0">
                  <a href="#">
                    <p>Spabad</p>
                    <h5 class="truncate-2">M-Spa Mono Frame F-MO082W</h5>
                    <span>$13995,00 kr</span> <del>$13995,00 kr</del>
                  </a>
                  <!-- Rating -->
                  <div class="rating">

                    <span>165</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xxl-12">
              <div class="product-card-side bg-theme-p-side-2">
                <div class="img-wrap">
                  <a href="#">
                    <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/5.jpg" alt="" />
                  </a>
                </div>
                <div class="content-box mb-0">
                  <a href="#">
                    <p>Spabad</p>
                    <h5 class="truncate-2">M-Spa Tuscany Frame F-TU062W</h5>
                    <span>$14995,00 kr</span> <del>$14995,00 kr</del>
                  </a>
                  <!-- Rating -->
                  <div class="rating">

                    <span>238</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xxl-8">
          <div class="card-box row g-3 g-sm-4">
            <div class="col-sm-6">
              <div class="card-wrap">
                <h5 class="title-line"><span>Tillbehör</span></h5>

                <div class="product-card-side product-side2">
                  <div class="img-wrap">
                    <a href="#">
                      <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/6.jpg" alt="" />
                    </a>
                  </div>
                  <div class="content-box">
                    <a href="#">
                      <p>Tillbehör</p>
                      <h5 class="truncate-2">Exklusivpaket M-Spa</h5>
                      <span>$3460,00 kr</span> <del>$3460,00 kr</del>
                    </a>
                  </div>
                </div>

                <div class="product-card-side product-side2">
                  <div class="img-wrap">
                    <a href="#">
                      <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/7.jpg" alt="" />
                    </a>
                  </div>
                  <div class="content-box">
                    <a href="#">
                      <p>Tillbehör</p>
                      <h5 class="truncate-2">M-Spa COVER TOP+MAT UNIVERSAL 6P</h5>
                      <span>$1495,00 kr</span>
                    </a>
                  </div>
                </div>

                <div class="product-card-side product-side2">
                  <div class="img-wrap">
                    <a href="#">
                      <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/8.jpg" alt="" />
                    </a>
                  </div>
                  <div class="content-box">
                    <a href="#">
                      <p>Tillbehör</p>
                      <h5 class="truncate-2">Trappa</h5>
                      <span>$1295,00 kr</span> <del>$1295,00 kr</del>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card-wrap">
                <h5 class="title-line"><span>Fyndhörna </span></h5>

                <div class="product-card-side product-side2">
                  <div class="img-wrap">
                    <a href="#">
                      <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/9.jpg" alt="" />
                    </a>
                  </div>
                  <div class="content-box">
                    <a href="#">
                      <p>Fyndhörna</p>
                      <h5 class="truncate-2">Fynd - M-Spa Mono Frame för 8 personer</h5>
                      <span>$13796,00 kr</span> <del>$13796,00 kr</del>
                    </a>
                  </div>
                </div>

                <div class="product-card-side product-side2">
                  <div class="img-wrap">
                    <a href="#">
                      <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/10.jpg" alt="" />
                    </a>
                  </div>
                  <div class="content-box">
                    <a href="#">
                      <p>Fyndhörna</p>
                      <h5 class="truncate-2">Fynd - M-Spa Soho Premium P-SH069</h5>
                      <span>$8785,00 kr</span>
                    </a>
                  </div>
                </div>

                <div class="product-card-side product-side2">
                  <div class="img-wrap">
                    <a href="#">
                      <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/11.jpg" alt="" />
                    </a>
                  </div>
                  <div class="content-box">
                    <a href="#">
                      <p>Fyndhörna</p>
                      <h5 class="truncate-2">Fynd - M-Spa Starry Comfort C-ST061</h5>
                      <span>$6985,00 kr</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Best Seller End -->

  <!-- Service Section start -->
  <section class="service-section service-section2 pb-0">
    <div class="box-wrap">
      <div class="container">
        <div class="row g-4 g-lg-0">
          <div class="col-6 col-lg-3">
            <div class="service-box">
              <div class="media">
                <svg>
                  <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/service/_sprite.svg#truck"></use>
                </svg>
                <div class="media-body">
                  <h5 class="mt-0">Fri frakt </h5>
                  <span>över 1000kr</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3">
            <div class="service-box">
              <div class="media">
                <svg>
                  <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/service/_sprite.svg#thum"></use>
                </svg>
                <div class="media-body">
                  <h5 class="mt-0">2 års garanti</h5>
                  <span>Vi har allt du behöver</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3">
            <div class="service-box">
              <div class="media">
                <svg>
                  <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/service/_sprite.svg#component"></use>
                </svg>
                <div class="media-body">
                  <h5 class="mt-0">Snabb leverans</h5>
                  <span>Lorem ipsum dolor sit amet</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3">
            <div class="service-box">
              <div class="media">
                <svg>
                  <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/service/_sprite.svg#dollar"></use>
                </svg>
                <div class="media-body">
                  <h5 class="mt-0">SÄKER SHOPPING</h5>
                  <span>Du är i trygga händer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service Section End -->

  <!-- Brand We Love Section Start -->
  <section class="brand-section2 wow-section-overflow d-none">
    <div class="container-lg">
      <div class="title-box">
        <h2 class="unique-heading">BRAND WE LOVE</h2>
        <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
        <p>Top Company brand are available, all are unique and different design from each other</p>
      </div>

      <div class="row g-3 g-sm-0">
        <div class="col-12">
          <div class="row g-0">
            <div class="col-sm-6">
              <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/2.jpg" alt="product" />
            </div>

            <div class="col-sm-6">
              <div class="brand-details bg-theme-p-side-2">
                <div>
                  <span class="theme-color">GARANTI & SERVICE</span>
                  <h3>Service även efter att garantin gått ut</h3>
                  <p>Vi erbjuder alltid 2 års garanti på våra nya spabad! Skulle du uppleva problem eller behöver
                    support hjälper vi dig mer än gärna.</p>
                  <a href="#" class="btn-style2">Gå till service</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="row g-0">
            <div class="order-4 order-sm-3 col-sm-6">
              <div class="brand-details bg-theme-p-side-2">
                <div>
                  <span class="theme-color">LAGERSHOP</span>
                  <h3>Besök vår shop 15 min från Göteborg</h3>
                  <p>I vår lagershop på Maskingatan 5 i Kungälv kan du handla reservdelar och pooler direkt från oss.
                  </p>
                  <a href="#" class="btn-style2">Kontakta oss</a>
                </div>
              </div>
            </div>

            <div class="order-3 order-sm-4 col-sm-6">
              <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/3.jpg" alt="product" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Brand We Love Section end -->

  <!-- Sub Banner Section Start -->
  <section class="sub-banner-5 pt-0 pb-0 d-none">
    <div class="sub-banner">
      <img class="bg-img" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/sub-banner2.jpg" alt="sub-banner" />

      <div class="container-lg pos-relative">
        <div class="content-box">
          <h5 class="title-banner">
            <span class="after">M-Spa </span>MonoFrame
            <span class="offer">70 <span> <span class="span-1">%</span><span class="span-2">OFF</span></span>
            </span>
          </h5>
          <h6 class="collection-title"><span class="line"></span> F-MO082W</h6>
          <p>Vill du njuta av lyxen att ha ditt eget spa hemma? Vi har precis lanserat vår nya Mono Frame, en
            revolutionerande uppblåsbar spabadsmodell med plats för upp till 8 personer.</p>

          <div class="btn-box">
            <div class="btn-style4">
              <a href="shop-left-sidebar.html" class="btn">
                <span class="corner-wrap left-top">
                  <span class="corner"></span>
                </span>

                <span class="corner-wrap right-bottom">
                  <span class="corner"></span>
                </span>
                Lägg i varukorgen
              </a>
            </div>
            <div class="contact-info">
              <a class="phone-link" href="tel:0303-808 81 ">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/svg/phone-book.svg" alt="phone-book" />
                0303-808 81
              </a>

              <ul class="social-list">
                <li>
                  <a href="https://www.facebook.com/"> <i class="fill" data-feather="facebook"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/accounts/login/"><i data-feather="instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <img class="full-img img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/images/product/banner1-3.png" alt="img" />
      </div>
    </div>
  </section>
  <!-- Sub Banner Section End -->

  <!-- Instagram Section Start -->
  <section class="intagram-section d-none">
    <div class="container-lg">
      <div class="title-box">
        <h2 class="unique-heading">AVONE ON INSTAGRAM</h2>
        <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
        <p>trending on Instagram best product value for mony</p>
      </div>
    </div>

    <div class="swiper instagram-slider ratio_94">
      <div class="swiper-wrapper">
        <!-- Slide Start -->
        <div class="swiper-slide">
          <div class="intagram-card intagram-card2">
            <div class="img-box">
              <a href="javascript:void(0)">
                <img class="img-fluid bg-img" src="<?php echo bloginfo('template_url'); ?>/assets/images/insta/1.jpg" alt="instagram" />
              </a>
              <div class="on-hover">
                <div class="content-box">
                  <span class="share">
                    <span><i data-feather="plus"></i></span> SHARE
                  </span>

                  <div class="option-box">
                    <p>New Offer- 45% Discount</p>
                    <h5>M-Spa Mono Frame F-MO082W</h5>
                    <span class="price">$120</span>

                    <div class="control">
                      <a href="#">
                        <i data-feather="heart"></i>
                      </a>
                      <a href="#">
                        <i data-feather="shopping-bag"></i>
                      </a>
                    </div>
                    <a href="#" class="btn-style2 bg-white">SHOP NOW</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide End -->

        <!-- Slide Start -->
        <div class="swiper-slide">
          <div class="intagram-card intagram-card2">
            <div class="img-box">
              <a href="javascript:void(0)">
                <img class="img-fluid bg-img" src="<?php echo bloginfo('template_url'); ?>/assets/images/insta/2.jpg" alt="instagram" />
              </a>
              <div class="on-hover">
                <div class="content-box">
                  <span class="share">
                    <span><i data-feather="plus"></i></span> SHARE
                  </span>

                  <div class="option-box">
                    <p>New Offer- 45% Discount</p>
                    <h5>M-Spa Tuscany Frame F-TU062W</h5>
                    <span class="price">$120</span>

                    <div class="control">
                      <a href="#">
                        <i data-feather="heart"></i>
                      </a>
                      <a href="#">
                        <i data-feather="shopping-bag"></i>
                      </a>
                    </div>
                    <a href="#" class="btn-style2 bg-white">SHOP NOW</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide End -->

        <!-- Slide Start -->
        <div class="swiper-slide">
          <div class="intagram-card intagram-card2">
            <div class="img-box">
              <a href="javascript:void(0)">
                <img class="img-fluid bg-img" src="<?php echo bloginfo('template_url'); ?>/assets/images/insta/3.jpg" alt="instagram" />
              </a>
              <div class="on-hover">
                <div class="content-box">
                  <span class="share">
                    <span><i data-feather="plus"></i></span> SHARE
                  </span>

                  <div class="option-box">
                    <p>New Offer- 45% Discount</p>
                    <h5>M-Spa Carlton Muse M-CA061</h5>
                    <span class="price">$120</span>

                    <div class="control">
                      <a href="#">
                        <i data-feather="heart"></i>
                      </a>
                      <a href="#">
                        <i data-feather="shopping-bag"></i>
                      </a>
                    </div>
                    <a href="#" class="btn-style2 bg-white">SHOP NOW</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide End -->

        <!-- Slide Start -->
        <div class="swiper-slide">
          <div class="intagram-card intagram-card2">
            <div class="img-box">
              <a href="javascript:void(0)">
                <img class="img-fluid bg-img" src="<?php echo bloginfo('template_url'); ?>/assets/images/insta/4.jpg" alt="instagram" />
              </a>
              <div class="on-hover">
                <div class="content-box">
                  <span class="share">
                    <span><i data-feather="plus"></i></span> SHARE
                  </span>

                  <div class="option-box">
                    <p>New Offer- 45% Discount</p>
                    <h5>M-Spa Otium Muse M-OT061</h5>
                    <span class="price">$120</span>

                    <div class="control">
                      <a href="#">
                        <i data-feather="heart"></i>
                      </a>
                      <a href="#">
                        <i data-feather="shopping-bag"></i>
                      </a>
                    </div>
                    <a href="#" class="btn-style2 bg-white">SHOP NOW</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide End -->

        <!-- Slide Start -->
        <div class="swiper-slide">
          <div class="intagram-card intagram-card2">
            <div class="img-box">
              <a href="javascript:void(0)">
                <img class="img-fluid bg-img" src="<?php echo bloginfo('template_url'); ?>/assets/images/insta/5.jpg" alt="instagram" />
              </a>
              <div class="on-hover">
                <div class="content-box">
                  <span class="share">
                    <span><i data-feather="plus"></i></span> SHARE
                  </span>

                  <div class="option-box">
                    <p>New Offer- 45% Discount</p>
                    <h5>M-Spa Naval Frame F-NA062W</h5>
                    <span class="price">$120</span>

                    <div class="control">
                      <a href="#">
                        <i data-feather="heart"></i>
                      </a>
                      <a href="#">
                        <i data-feather="shopping-bag"></i>
                      </a>
                    </div>
                    <a href="#" class="btn-style2 bg-white">SHOP NOW</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide End -->

        <!-- Slide Start -->
        <div class="swiper-slide">
          <div class="intagram-card intagram-card2">
            <div class="img-box">
              <a href="javascript:void(0)">
                <img class="img-fluid bg-img" src="<?php echo bloginfo('template_url'); ?>/assets/images/insta/3.jpg" alt="instagram" />
              </a>
              <div class="on-hover">
                <div class="content-box">
                  <span class="share">
                    <span><i data-feather="plus"></i></span> SHARE
                  </span>

                  <div class="option-box">
                    <p>New Offer- 45% Discount</p>
                    <h5>M-Spa Rimba Urban U-RB082</h5>
                    <span class="price">$120</span>

                    <div class="control">
                      <a href="#">
                        <i data-feather="heart"></i>
                      </a>
                      <a href="#">
                        <i data-feather="shopping-bag"></i>
                      </a>
                    </div>
                    <a href="#" class="btn-style2 bg-white">SHOP NOW</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide End -->
      </div>
    </div>
  </section>
  <!-- Instagram Section End -->
</main>
<!-- Main End -->


<?php

get_footer();
