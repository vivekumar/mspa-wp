<div class="col-4 col-xl-3 sidebar-controll sidebar-responsive">
    <div class="sidebar-inner sticky">
        <div class="back-box d-flex d-lg-none">
            <span>Back</span>
            <span><i data-feather="x"></i></span>
        </div>

        <div class="search-box reverse d-none">
            <input class="form-control" type="search" placeholder="Search here..." />
            <span class="search">
                <i data-feather="search"></i>
            </span>
        </div>

        <div class="row gy-3 gx-0 g-lg-4">
            <div class="col-lg-12">
                <div class="col-12">
                    <div class="sidebar-box">
                        <div class="title-box4 bg_color">
                            <h4 class="heading">Catagories <span class="bg-theme-blue"></span></h4>
                        </div>
                        <ul class="catagories-side">
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
                                <li>
                                    <a href="<?php echo esc_url(get_term_link($cat)) ?>">
                                        <span>
                                            <i data-feather="arrow-right"></i>
                                            <?php echo $cat->name ?>
                                        </span>
                                        <span class="notification"><?php echo $cat->count ?></span>
                                    </a>
                                </li>

                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="sidebar-box d-none">
                        <div class="title-box4">
                            <h4 class="heading">Filter <span class="bg-theme-blue"></span></h4>
                        </div>
                        <div class="range-slider">
                            <div class="price-input">
                                <div class="field">
                                    <span>Min <strong class="theme-color"> $</strong></span>
                                    <input class="form-control input-min" type="number" value="2500" />
                                </div>
                                <div class="separator">-</div>
                                <div class="field">
                                    <span>Max <strong class="theme-color"> $</strong></span>
                                    <input class="form-control input-max" type="number" value="7500" />
                                </div>
                            </div>
                            <div class="slider">
                                <div class="progress"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="0" max="10000" value="2500" step="100" />
                                <input type="range" class="range-max" min="0" max="10000" value="7500" step="100" />
                            </div>
                        </div>

                        <div class="filter-option">
                            <h5>Brands</h5>

                            <div class="filter-content">
                                <ul class="filter-check">
                                    <li>
                                        <label class="checkboxes style-1">
                                            <input type="checkbox" checked />
                                            <span class="checkbox__checkmark"></span>
                                            <span class="checkbox__body">Spa bath <span> 25</span></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkboxes style-1">
                                            <input type="checkbox" />
                                            <span class="checkbox__checkmark"></span>
                                            <span class="checkbox__body">Accessories <span>15</span></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkboxes style-1">
                                            <input type="checkbox" />
                                            <span class="checkbox__checkmark"></span>
                                            <span class="checkbox__body">Bargain corner <span>8</span></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkboxes style-1">
                                            <input type="checkbox" />
                                            <span class="checkbox__checkmark"></span>
                                            <span class="checkbox__body">Filter <span>25</span></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkboxes style-1">
                                            <input type="checkbox" />
                                            <span class="checkbox__checkmark"></span>
                                            <span class="checkbox__body">Pool chemistry <span>12</span></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkboxes style-1">
                                            <input type="checkbox" />
                                            <span class="checkbox__checkmark"></span>
                                            <span class="checkbox__body">Outdoor showers <span>32</span></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkboxes style-1">
                                            <input type="checkbox" />
                                            <span class="checkbox__checkmark"></span>
                                            <span class="checkbox__body">Spa scents <span>14</span></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-box d-none">
                        <div class="title-box4">
                            <h4 class="heading">Most Popular <span class="bg-theme-blue"></span></h4>
                        </div>
                        <div class="new-wrap">
                            <a href="product-detail.php" class="new-product">
                                <div class="img-box">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/product/front/1.jpg" alt="product" />
                                </div>
                                <div class="content-box">
                                    <p>Tillbehör</p>
                                    <h5>M-Spa Isoleringsplatta Jackopor 6p fyrkantig (1850)</h5>
                                    <span>$1495,00 kr </span> <del>$1495,00</del>
                                </div>
                            </a>

                            <a href="product-detail.php" class="new-product">
                                <div class="img-box">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/product/front/1.jpg" alt="product" />
                                </div>
                                <div class="content-box">
                                    <p>Tillbehör</p>
                                    <h5>M-Spa Isoleringsplatta Jackopor 6p fyrkantig (1850)</h5>
                                    <span>$1495,00 kr </span> <del>$1495,00</del>
                                </div>
                            </a>

                            <a href="product-detail.php" class="new-product">
                                <div class="img-box">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/product/front/1.jpg" alt="product" />
                                </div>
                                <div class="content-box">
                                    <p>Tillbehör</p>
                                    <h5>M-Spa Isoleringsplatta Jackopor 6p fyrkantig (1850)</h5>
                                    <span>$1495,00 kr </span> <del>$1495,00</del>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>