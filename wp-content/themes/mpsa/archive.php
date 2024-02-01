<?php get_header(); ?>

<section id="breadcrumbs" class="page_breadcrumbs ds parallax section_padding_65 table_section table_section_md">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center text-md-left">
        <h1 class="cornered-heading"><?php the_archive_title() ?></h1>
      </div>
      <div class="col-md-6 text-center text-md-right">
        <ol class="breadcrumb">
          <li>
            <a href="<?php home_url() ?>">Home</a>
          <li class="active"><?php the_archive_title() ?> </li>
        </ol>
      </div>
    </div>
  </div>
</section>



<section class="ls section_padding_top_110 section_padding_bottom_100">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <div class="isotope_container isotope row masonry-layout columns_bottom_margin_30">


          <?php
          // Start the loop.
          while (have_posts()) : the_post(); ?>
            <div class="isotope-item col-lg-4 col-md-6 col-sm-12">

              <article class="vertical-item content-with-meta mosaic-post post format-standard">

                <div class="item-media entry-thumbnail  blog-image ">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail(); ?>
                  <?php } else { ?>
                    <img src="<?php echo bloginfo('template_url'); ?>/images/gallery/01.jpg" alt="">
                  <?php } ?>
                  <div class="media-links">
                    <a class="abs-link" title="" href="<?php the_permalink() ?>"></a>
                  </div>
                </div>

                <div class="item-content with_shadow">
                  <header class="entry-header">

                    <h3 class="entry-title">
                      <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
                    </h3>

                  </header>
                  <!-- .entry-header -->

                  <p><?php the_excerpt() ?></p>

                  <hr class="light-divider full-content-divider bottommargin_10">

                  <p class="item-meta fullwidth-meta greylinks">
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                      <i class="flaticon-social grey"></i>by <?php the_author(); ?></a>
                    <span class="date">
                      <i class="flaticon-clock-1 grey"></i>
                      <time datetime="2023-08-01T15:05:23+00:00" class="entry-date">
                        <?php the_date('d-m-Y'); ?>
                      </time>
                    </span>
                    <a href="#" class="pull-right item-comments">
                      <i class="flaticon-communication grey"></i>
                      <span class="comments-amount"><?php echo get_comments_number(); ?></span>
                    </a>
                  </p>

                </div>
                <!-- .item-content with_shadow -->
              </article>

            </div>
          <?php
          // End the loop.
          endwhile;
          ?>


        </div>
        <!-- eof .isotope_container.row -->

      </div>
    </div>
  </div>
</section>


<?php

get_footer();
