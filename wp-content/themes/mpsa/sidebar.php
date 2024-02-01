<!-- sidebar -->
<div class="col-lg-3 order-3 order-lg-1">
    <?php if (is_active_sidebar('sidebar-1')) { ?>
        <?php //dynamic_sidebar('sidebar-1'); 
        ?>
    <?php } ?>
    <div class="sidebar-inner sticky">


        <div class="search-box reverse">
            <form method="get" class="searchform form-inline" action="<?php echo home_url() ?>">
                <input class="form-control" type="text" value="" name="s" placeholder="Search here..." />
                <span class="search">
                    <button type="submit" class="theme_button"><i data-feather="search"></i></button>
                </span>
            </form>
        </div>

        <div class="row g-3 g-lg-4">
            <div class="col-sm-6 col-lg-12 order-2 order-lg-1">
                <div class="sidebar-box">
                    <div class="title-box4">
                        <h4 class="heading">Hjälp <span class="bg-theme-blue"></span></h4>
                    </div>
                    <?php
                    $consult_menu = wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_id' => '1',
                            'menu_class' => 'catagories-side',
                            'echo' => false
                        )
                    );
                    $consult_menu = str_replace('menu-item', 'nav-item', $consult_menu);
                    echo $consult_menu;
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>