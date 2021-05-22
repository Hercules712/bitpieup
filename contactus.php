<?php 
$title = "Contact US";	
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
                        <h2 class="section__title text-white">Contact Us</h2>
                    </div><!-- end section-heading -->
                    <ul class="list-items list-items-white bread-list-items py-2">
                        <li><a href="index.php">Home</a></li>
                        <li>Pages</li>
                        <li>Contact Us</li>
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
       START CONTACT AREA
================================= -->
<section class="contact-area section--padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 responsive-column-full">
                <div class="section-heading pb-5">
                    <h2 class="section__title pb-3">Feel Free to Write Us a Message</h2>
                    <p class="section__desc">
                        Our customer service team are one of the best in the world.
                        We are ready to put to rest all your concerns with light speed.
                    <ul class="social-icons social-icons-styled pt-4">
                        <li><a href="#"><i class="la la-facebook"></i></a></li>
                        <li><a href="#"><i class="la la-twitter"></i></a></li>
                        <li><a href="#"><i class="la la-instagram"></i></a></li>
                        <li><a href="#"><i class="la la-youtube"></i></a></li>
                    </ul>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
            <div class="col-lg-6 ml-auto responsive-column-full">
                <form method="post" class="card-item card--item">
                    <div class="form-group">
                        <span class="la la-user form-icon"></span>
                        <input class="form-control form--control" type="text" name="name" placeholder="Your Name">
                    </div><!-- end form-group -->
                    <div class="form-group">
                        <span class="la la-envelope form-icon"></span>
                        <input class="form-control form--control" type="email" name="email" placeholder="Email Address">
                    </div><!-- end form-group -->
                    <div class="form-group">
                        <span class="la la-phone form-icon"></span>
                        <input class="form-control form--control" type="text" name="text" placeholder="Phone Number">
                    </div><!-- end form-group -->
                    <div class="form-group">
                        <span class="la la-book form-icon"></span>
                        <input class="form-control form--control" type="text" name="text" placeholder="Subject">
                    </div><!-- end form-group -->
                    <div class="form-group">
                        <span class="la la-pencil form-icon"></span>
                        <textarea class="form-control form--control" rows="4" placeholder="Write Message Here"></textarea>
                    </div><!-- end form-group -->
                    <button class="btn theme-btn" type="submit">Send Message <i class="la la-arrow-right btn-icon ml-1"></i></button>
                </form>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
        <div class="row padding-top-80px">
            <div class="col-lg-4 responsive-column-half">
                <div class="info-box text-center">
                    <div class="info__icon icon-element">
                        <i class="la la-map-marker"></i>
                    </div>
                    <h3 class="info__title">Our Address</h3>
                    <p class="info__desc mb-0">Melbourne, Australia, 105 South Park Avenue</p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="info-box text-center">
                    <div class="info__icon icon-element">
                        <i class="la la-phone"></i>
                    </div>
                    <h3 class="info__title">Call Us</h3>
                    <p class="info__desc mb-0">+1-303-125-4268</p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="info-box text-center">
                    <div class="info__icon icon-element">
                        <i class="la la-envelope"></i>
                    </div>
                    <h3 class="info__title">Email Address</h3>
                    <p class="info__desc mb-0"><a href="mailto:info@bitpileup.com" class="text-gray">info@bitpileup.com</a></p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end contact-area -->
<!-- ================================
       START CONTACT AREA
================================= -->

 <?php include('footer.php');  ?>	