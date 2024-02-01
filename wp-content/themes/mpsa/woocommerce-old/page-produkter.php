<?php
/*
*  Template Name:product
*/
get_header(); ?>

<!-- Main Start -->
<main class="main">
  <!-- Breadcrumb Start -->
  <div class="breadcrumb-wrap">
    <div class="banner">
      <img class="bg-img bg-top" src="<?php echo bloginfo('template_url'); ?>/assets/images/inner-page/banner-p.jpg" alt="banner" />

      <div class="container-lg">
        <div class="breadcrumb-box">
          <div class="heading-box">
            <h1>Produkter</h1>
          </div>
          <ol class="breadcrumb">
            <li><a href="index.php">Hem</a></li>
            <li>
              <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
            </li>
            <li class="current"><a href="javascript:;">Produkter</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb End -->

  <!-- Shop Section Start -->
  <section class="shop-page">
    <div class="container-lg">
      <div class="row gy-4 g-lg-3 g-xxl-4">
        <?php get_sidebar('product');?>

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
              </div>
            </div>

            <div class="col-12 order-1 order-lg-2">
              <div class="shop-product">
                <div class="top-header-wrap">
                  <button class="filter-btn btn-solid btn-sm mb-line d-flex d-lg-none">Filter <i class="arrow"></i></button>

                  <div class="grid-option-wrap">
                    <div class="select-options">
                      <div class="select-menu">
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

                <div class="product-tab-content">
                  <div class="view-option row g-3 g-xl-4 ratio_asos row-cols-2 row-cols-sm-3 row-cols-xl-4 grid-section">
                    <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                    $args = array(
                      'post_type' => 'product',
                      'posts_per_page' => 20,
                      'paged' => $paged,
                      'orderby' => 'ASC'
                    );

                    $loop = new WP_Query($args);

                    while ($loop->have_posts()) : $loop->the_post();
                      global $product;
                      wc_get_template_part('content', 'product2');
                    endwhile; ?>

                  </div>
                </div>
              </div>

              <!-- Pagination Start -->
              <div class="pagination-wrap justify-content-center">
                <?php
                $total_pages = $loop->max_num_pages;

                if ($total_pages > 1) {

                  $current_page = max(1, get_query_var('paged'));

                  echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => '/page/%#%',
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_text'    => __('« prev'),
                    'next_text'    => __('next »'),
                  ));
                }
                ?>
                <ul class="pagination">
                  <li>
                    <a href="javascript:void(0)" class="prev"> &laquo;</a>
                  </li>
                  <li><a href="javascript:void(0)">1</a></li>
                  <li><a href="javascript:void(0)" class="active">2</a></li>
                  <li><a href="javascript:void(0)">3</a></li>

                  <li><a href="javascript:void(0)" class="next"> &raquo;</a></li>
                </ul>
              </div>
              <!-- Pagination End -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Shop Section End -->
</main>
<!-- Main End -->

<?php

get_footer();
