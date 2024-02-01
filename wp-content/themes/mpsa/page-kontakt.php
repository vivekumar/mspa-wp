<?php
/*
*  
*/
get_header(); ?>

<!-- Main Start -->
<main class="main">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="banner">
            <img class="bg-img bg-top" src="<?php echo get_template_directory() ?>/assets/images/inner-page/banner-p.jpg" alt="banner" />
            <div class="container-lg">
                <div class="breadcrumb-box">
                    <div class="heading-box">
                        <h1><?php the_title() ?></h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php home_url() ?>">Hem</a></li>
                        <li>
                            <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                        </li>
                        <li class="current"><a href="javascript:void(0)"><?php the_title() ?></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <section class="contact-section">
        <div class="container-lg">
            <div class="row gy-4 gy-xl-0 gx-0 gx-xl-4">
                <div class="col-xl-6 order-2 order-xl-1">
                    <!-- Reply From Section Start -->
                    <div class="replay-form round-wrap-content top-space" id="replaySection">
                        <div class="title-box4">
                            <h4 class="heading">Leave a Comment<span class="bg-theme-blue"></span></h4>
                        </div>

                        <?php the_content() ?>
                    </div>
                    <!-- Reply From Section End -->
                </div>

                <div class="col-xl-6 order-1 order-xl-2">
                    <div class="address-content round-wrap-content">
                        <div class="title-box4">
                            <h4 class="heading">Let's Get In Touch<span class="bg-theme-blue"></span></h4>
                        </div>

                        <div class="steps-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <div class="steps-box mt-0">
                                        <span><i data-feather="map-pin"></i></span>
                                        <div class="content">
                                            <h4 class="title-color">Address</h4>
                                            <p class="content-color"><?php echo get_theme_mod('footer_address') ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="steps-box">
                                        <span><i data-feather="phone"></i></span>
                                        <div class="content">
                                            <h4 class="title-color">Contact Number</h4>
                                            <p class="content-color"><?php echo get_theme_mod('footer_phone') ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="steps-box">
                                        <span><i data-feather="mail"></i></span>
                                        <div class="content">
                                            <h4 class="title-color">Email Address</h4>
                                            <p class="content-color"><?php echo get_theme_mod('footer_email') ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="steps-box">
                                        <span><i data-feather="clock"></i></span>
                                        <div class="content">
                                            <h4 class="title-color">Försäljning & Butik</h4>
                                            <p class="content-color"><?php echo get_theme_mod('footer_time1') ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="steps-box">
                                        <span><i data-feather="clock"></i></span>
                                        <div class="content">
                                            <h4 class="title-color">Service & Support</h4>
                                            <p class="content-color"><?php echo get_theme_mod('footer_time2') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section Start -->
    <div class="map-section">
        <div class="row g-0">
            <div class="col-12 p-0">
                <div class="location-map">
                    <?php the_field('add_map') ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section End -->
</main>
<!-- Main End -->

<?php

get_footer();
