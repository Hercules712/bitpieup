<?php 
$title = "Login";	
	include('header.php');
	include('../navbar.php');
    $status = "";
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
                        <h2 class="section__title text-white">Login</h2>
                    </div><!-- end section-heading -->
                    <ul class="list-items list-items-white bread-list-items py-2">
                        <li><a href="../index.php">Home</a></li>
                        <li>Login</li>
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
       START LOGIN AREA
================================= -->
<section class="login-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 responsive-column-full">
                <div class="info-box">
                    <div class="info__icon icon-element">
                        <i class="la la-hand-holding-heart"></i>
                    </div>
                    <h3 class="info__title">If You Are New to Bitpileup</h3>
                    <p class="info__desc">
                        Kindly use the link below to register and become a part of this team of achievers.<br>
                        After registeration, remeber to keep safe your referal link and get busy sharing it for more bonuses.
                    </p>
                    
                    <a href="<?php echo $site; ?>session/register.php" class="btn theme-btn theme-btn-sm theme-btn-white">Register</a>
                </div><!-- end info-box -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-full">
                <div class="card-item card--item">
                    <div class="text-center">
                       <?php if(isset($_GET['status']) && $_GET['status'] == "logged_out"): ?>
                        <div class="alert alert-success alert-dismissable" style="font-size:14px;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
                                You Have Been Successfully Logged Out
                        </div> 
                        <?php endif; ?>

                        <?php if(isset($_GET['stat']) && $_GET['stat'] == "fail"): ?>
                        <div class="alert alert-danger alert-dismissable" style="font-size:14px;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
                                <p>Wrong Authentication</p>
                        </div> 
                        <?php endif; ?>


                        <h2 class="generic-sub-title font-size-30 pb-1">Login to your account</h2>
                        <p class="pb-3">Please check that you are visiting the correct URL</p>
                        <div class="border border-gray d-inline-block py-1 px-4 rounded-pill font-size-14">
                            <span class="text-success"><i class="la la-lock mr-1"></i>https://</span>
                            bitpileup.com/session/login.php
                        </div>
                    </div>
                    <form method="post" class="pt-4 border-top border-top-gray mt-4" action="script.php">
                        <div class="input-box">
                            <label class="form-label">Your Email</label>
                            <div class="form-group">
                                <span class="la la-envelope form-icon"></span>
                                <input class="form-control form--control" type="email" name="email" placeholder="Email">
                            </div><!-- end form-group -->
                        </div><!-- end input-box -->
                        <div class="input-box">
                            <label class="form-label">Password</label>
                            <div class="form-group">
                                <span class="la la-lock form-icon"></span>
                                <input class="form-control form--control" type="password" name="password" placeholder="Password">
                            </div><!-- end form-group -->
                            <div class="custom-control custom-checkbox mb-3 d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="agreeCheckbox">
                                <label class="custom-control-label" for="agreeCheckbox">Keep me signed</label>
                                <a href="#" class="btn-text font-size-15">Forgot Password?</a>
                            </div>
                        </div><!-- end input-box -->
                        <button class="btn theme-btn w-100" name="login_submit" type="submit">Login Now <i class="la la-arrow-right btn-icon ml-1"></i></button>
                        <p class="font-size-14 pt-2 text-center">Don't have an account? <a href="<?php echo $site; ?>session/register.php" class="text-color">Sign up</a></p>
                    </form>
                    <div class="pt-4 border-top border-top-gray mt-4 text-center">
                        <span class="icon-element icon-element-md icon-element-white">Or</span>
                        <p class="font-size-15 pt-1">Login with your social network.</p>
                        <ul class="social-icons social-icons-styled pt-4">
                            <li class="mx-1"><a href="#" class="google-bg"><i class="la la-google"></i></a></li>
                            <li class="mx-1"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                            <li class="mx-1"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                            <li class="mx-1"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card-item card--item -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end login-area -->
<!-- ================================
      START LOGIN AREA
================================= -->


 <?php include('footer.php');  ?>