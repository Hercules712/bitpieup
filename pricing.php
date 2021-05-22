<?php 	
$title = "Invesment Plans";
	include('header.php');
	include('navbar.php');
 ?>

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="section-heading">
                        <h2 class="section__title text-white">Our Pricing</h2>
                    </div><!-- end section-heading -->
                    <ul class="list-items list-items-white bread-list-items py-2">
                        <li><a href="index.php">Home</a></li>
                        <li>Pages</li>
                        <li>Pricing</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START PACKAGE AREA
================================= -->
<section class="package-area section--padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <div class="section-shape mx-auto"></div>
                        <p class="section__meta pb-2">Affordable Packages</p>
                        <h2 class="section__title">Choose Investment Plan</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-3 responsive-column-half">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div >
                                <div class="info-box text-center">
                                    <h3 class="info__price pb-4">3% Daily</h3>
                                    <h4 class="info__title text-uppercase mt-0 mb-4">$100.00 - $1000.00</h4>
                                    <h4 class="info__title text-uppercase mt-0 mb-4">Affiliate Bonus 0%</h4>
                                     <a href="<?php echo $site; ?>session/register.php" class="btn theme-btn theme-btn-white theme-btn-sm"><i class="la la-shopping-cart mr-1 font-size-18"></i> Invest Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 responsive-column-half">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div >
                                <div class="info-box text-center">
                                    <h3 class="info__price pb-4">20% Weekly</h3>
                                    <h4 class="info__title text-uppercase mt-0 mb-4">$1100.00 - $3500.00</h4>
                                    <h4 class="info__title text-uppercase mt-0 mb-4">Affiliate Bonus 2%</h4>
                                     <a href="<?php echo $site; ?>session/register.php" class="btn theme-btn theme-btn-white theme-btn-sm"><i class="la la-shopping-cart mr-1 font-size-18"></i> Invest Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 responsive-column-half">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div >
                                <div class="info-box text-center">
                                    <h3 class="info__price pb-4">35% Weekly</h3>
                                    <h4 class="info__title text-uppercase mt-0 mb-4">$3600.00 - $7500.00</h4>
                                    <h4 class="info__title text-uppercase mt-0 mb-4">Affiliate Bonus 4%</h4>
                                     <a href="<?php echo $site; ?>session/register.php" class="btn theme-btn theme-btn-white theme-btn-sm"><i class="la la-shopping-cart mr-1 font-size-18"></i> Invest Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 responsive-column-half">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div >
                                <div class="info-box text-center">
                                    <h3 class="info__price pb-4">45% 2Weekly</h3>
                                    <h4 class="info__title text-uppercase mt-0 mb-4">$7600.00 - $10000.00</h4>
                                    <h4 class="info__title text-uppercase mt-0 mb-4">Affiliate Bonus 5%</h4>
                                     <a href="<?php echo $site; ?>session/register.php" class="btn theme-btn theme-btn-white theme-btn-sm"><i class="la la-shopping-cart mr-1 font-size-18"></i> Invest Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end package-area -->
<!-- ================================
      START PACKAGE AREA
================================= -->


 <?php include('footer.php');  ?>