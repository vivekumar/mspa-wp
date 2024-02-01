<?php
get_header();
?>
<style>
    .is-hiddenn {
        display: none;
    }
</style>
<?php
$s = get_search_query();
$args = array(
    's' => $s,
    'post_type' => 'product',
);

// Check if $_GET['product_category'] is set
if (isset($_GET['product_category'])) {
    $args['tax_query'] = array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => $_GET['product_category'],
        ),
    );
}
// The Query
$the_query = new WP_Query($args);
$count =  $the_query->post_count;

?>
<!-- Main Start -->
<main class="main">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="banner">
            <img class="bg-img bg-top" src="<?php echo bloginfo('template_url'); ?>/assets/images/inner-page/banner-p.jpg" alt="banner" />
            <div class="container-lg">
                <div class="breadcrumb-box">
                    <div class="heading-box">
                        <h1><?php echo  sprintf(
                                __('Search Results for &#8220;%s&#8221;'),
                                get_search_query()
                            ); ?></h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo esc_url(home_url('/')) ?>">Hem</a></li>
                        <li>
                            <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                        </li>
                        <li class="current"><a href="javascript:void(0)"><?php echo  sprintf(
                                                                                __('Search Results for &#8220;%s&#8221;'),
                                                                                get_search_query()
                                                                            ); ?></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Detail Section Start -->
    <section>
        <div class="container-lg">
            <div class="product-tab-content">
                <div class="view-option row g-3 g-xl-4 ratio_asos row-cols-2 row-cols-sm-3 row-cols-xl-4 grid-section">
                    <?php
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            wc_get_template_part('content', 'product');
                        }
                    } else {
                    ?>
                        <h2 style='font-weight:bold;margin-bottom:20px'>Nothing Found</h2>
                        <div class="alert alert-info">
                            <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();

?>