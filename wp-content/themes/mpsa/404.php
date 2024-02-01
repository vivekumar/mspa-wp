<?php include_once('./lib/header.php'); ?>

<!-- Main Start -->
<main class="main">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="banner">
            <img class="bg-img bg-top" src="assets/images/inner-page/banner-p.jpg" alt="banner" />

            <div class="container-lg">
                <div class="breadcrumb-box">
                    <div class="heading-box">
                        <h1>404 Error</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Hem</a></li>
                        <li>
                            <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                        </li>
                        <li class="current"><a href="javascript:void(0)">404 Error</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- 404 Section Start -->
    <section class="page-not-found">
        <div class="container">
            <div class="row gx-md-2 gx-0 gy-md-0 gy-3">
                <div class="col-md-8 m-auto">
                    <div class="page-image">
                        <img src="assets/images/404.svg" class="img-fluid blur-up lazyload" alt="" />
                    </div>
                </div>

                <div class="col-md-8 mx-auto mt-md-5 mt-3">
                    <div class="page-container pass-forgot">
                        <div>
                            <h2>page not found</h2>
                            <p class="font-md">The page you are looking for doesn't exist or an other error occurred. Go
                                back, or head over to choose a new direction.</p>
                            <a href="index.php" class="btn-solid mb-line">Back Home Page <i class="arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Section End -->
</main>
<!-- Main End -->

<?php include_once('./lib/footer.php'); ?>