<?php 
$title = "Signup";	
	include('header.php');
	include('../navbar.php');
    $ref_link = "";

    if(isset($_GET['ref'])){
        $ref_link =  $site ."session/register.php?ref=".$_GET['ref'];
    }

    
    $ref = $ref_link;
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
                        <h2 class="section__title text-white">Sign Up</h2>
                    </div><!-- end section-heading -->
                    <ul class="list-items list-items-white bread-list-items py-2">
                        <li><a href="index.pht">Home</a></li>
                        <li>Sign Up</li>
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
       START SIGN-UP AREA
================================= -->
<section class="sign-up-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 responsive-column-full">
                <div class="info-box d-flex">
                    <div class="info__icon icon-element flex-shrink-0">
                        <i class="la la-lock"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="info__title mt-0 mb-2">Safe & Secure</h3>
                        <p class="info__desc mb-0">
                           We ensure that our site and user data is fully secured from malicious intents.
                           Your investment is 100% Safe with us
                        </p>
                    </div>
                </div><!-- end info-box -->
                <div class="info-box d-flex">
                    <div class="info__icon icon-element flex-shrink-0">
                        <i class="la la-mobile"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="info__title mt-0 mb-2">Mobile Responsive</h3>
                        <p class="info__desc mb-0">
                           We are serious about making it easier for our customers to monitor trades.
                           You can be with your portfolio anywhere, anytime.
                        </p>
                    </div>
                </div><!-- end info-box -->
                
                <div class="info-box d-flex">
                    <div class="info__icon icon-element flex-shrink-0">
                        <i class="la la-money"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="info__title mt-0 mb-2">Payment Options</h3>
                        <p class="info__desc mb-0">
                           We are serious about making it easier for our customers to pay and be paid.
                           Paying through blockchain is easy and efficient.
                        </p>
                    </div>
                </div><!-- end info-box -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-full">
                <div class="card-item card--item">
                    <div class="text-center">

                         <?php if(isset($_GET['stat']) && $_GET['reg'] == "fail"): ?>
                        <div class="alert alert-danger alert-dismissable" style="font-size:14px;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
                                <p>Registration Failed</p>
                        </div> 
                        <?php endif; ?>

                         <?php if(isset($_GET['stat']) && $_GET['reg'] == "exist"): ?>
                        <div class="alert alert-danger alert-dismissable" style="font-size:14px;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
                                <p>User Already Exist</p>
                        </div> 
                        <?php endif; ?>
                         <?php echo $ref; ?>
                        <h2 class="generic-sub-title font-size-30 pb-1">Create a free account</h2>
                        <p>Open account for free and start trading Bitpilup now!</p>
                    </div>
                    <form method="post" class="pt-4 border-top border-top-gray mt-4" action="script.php">
                        <div class="input-box">
                            <label class="form-label">Your Name</label>
                            <div class="form-group">
                                <span class="la la-user form-icon"></span>
                                <input class="form-control form--control" type="text" name="name" placeholder="Name">
                            </div><!-- end form-group -->
                        </div><!-- end input-box -->
                        <div class="input-box">
                            <label class="form-label">Payment Bank Name</label>
                            <div class="form-group">
                                <span class="la la-bank form-icon"></span>
                                <input class="form-control form--control" type="text" name="bank_name" placeholder="Payment Bank Name">
                            </div><!-- end form-group -->
                        </div><!-- end input-box -->

                        <div class="input-box">
                            <label class="form-label">Payment Account/Wallet Number</label>
                            <div class="form-group">
                                <span class="la la-money form-icon"></span>
                                <input class="form-control form--control" type="text" name="acc_no" placeholder="Payment Account/Wallet Number">
                            </div><!-- end form-group -->
                        </div><!-- end input-box -->

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
                                <small class="form-text text-gray">*Minimum 8 characters *At least 1 UPPER CASE *At least 1 number</small>
                            </div><!-- end form-group -->
                        </div><!-- end input-box -->

                         <div class="input-box">
                            
                            <div class="form-group">
                               
                                <input class="form-control form--control" type="hidden" name="ref" value="<?php echo $ref; ?>">
                               
                            </div><!-- end form-group -->
                        </div><!-- end input-box -->
                        

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="agreeCheckbox">
                            <label class="custom-control-label" for="agreeCheckbox">I have read and agree to the Terms of Service.
                                <a href="#" class="text-color">Bitpilup's Terms</a>
                            </label>
                        </div>
                        <button class="btn theme-btn w-100" name="signup_submit" type="submit">Create an Account <i class="la la-arrow-right btn-icon ml-1"></i></button>
                        <p class="font-size-14 pt-2 text-center">Already have an account? <a href="<?php echo $site; ?>session/login.php" class="text-color">Login</a></p>
                    </form>
                    <div class="pt-4 border-top border-top-gray mt-4 text-center">
                        <span class="icon-element icon-element-md icon-element-white">Or</span>
                        <p class="font-size-15 pt-1">Sign up with your social network.</p>
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
</section><!-- end sign-up-area -->
<!-- ================================
      START SIGN-UP AREA
================================= -->

 <?php include('footer.php');  ?>