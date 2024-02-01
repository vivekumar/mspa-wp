<?php get_header(); ?>

<!-- Main Start -->
<main class="main">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="banner">
            <img class="bg-img bg-top" src="<?php echo bloginfo('template_url'); ?>/assets/images/inner-page/banner-p.jpg" alt="banner" />
            <div class="container-lg">
                <div class="breadcrumb-box">
                    <div class="heading-box">
                        <h1><?php the_title() ?></h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo esc_url(home_url('/')) ?>">Hem</a></li>
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

    <!-- Blog Detail Section Start -->
    <section>
        <div class="container-lg">
            <div class="row gy-5 g-lg-3 g-xxl-4">
                <?php get_sidebar() ?>

                <div class="col-lg-9 order-1 order-lg-2 ratio_36">
                    <div class="blog-wrap">
                        <?php
                        // Start the loop.
                        while (have_posts()) : the_post(); ?>
                            <!-- Blog Section Start -->
                            <div class="blog-box blog-detail">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="img-box">
                                        <img class="bg-img" src="<?php the_post_thumbnail_url() ?>" alt="blog" />
                                    </div>
                                <?php endif; ?>
                                <div class="content-box">
                                    <?php //echo get_the_content(get_the_ID())
                                    the_content()
                                    ?>
                                </div>
                            </div>
                            <!-- Blog Section End -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Detail Section End -->

</main>
<!-- Main End -->

<?php

get_footer();
