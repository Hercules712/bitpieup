
<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-top pt-2 font-size-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-top-info">
                        <ul class="list-items list-items-white d-flex flex-wrap align-items-center">
                            <li class="pr-3 mr-3 border-right border-right-gray">
                                <a href="mailto:example@gmail.com"><i class="la la-envelope mr-1"></i>bitpileup@gmail.com</a>
                            </li>
                            <li>
                                <a href="tel:+1631237884"><i class="la la-phone mr-1"></i>+163 123 7884</a>
                            </li>
                        </ul>
                    </div> <!-- end header-top-info -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-top-info">
                        <ul class="list-items list-items-white d-flex flex-wrap align-items-center justify-content-end">
                            <li class="pr-3 mr-3 border-right border-right-gray">
                                <a href="<?php echo $site; ?>session/login.php"><i class="la la-user mr-1"></i>Login</a>
                            </li>
                            <li>
                                <a href="<?php echo $site; ?>session/register.php"><i class="la la-sign-in-alt mr-1"></i>Sign up</a>
                            </li>
                        </ul>
                    </div> <!-- end header-top-info -->
                </div><!-- end col-lg-6 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end header-top -->
    <div class="header-menu-wrapper">
        <div class="container">
            <div class="main-menu-wrapper d-flex flex-wrap align-items-center justify-content-between">
                <div class="main-logo pr-3">
                    <a href="<?php echo $site; ?>index.php">
                        <img src="<?php echo $site; ?>images/logo_main.png" alt="logo">
                    </a>
                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div> <!-- end main-logo -->
                <div class="main-navbar d-flex align-items-center">
                    <nav class="main-nav text-capitalize">
                        <ul>
                            <li>
                                <a href="<?php echo $site; ?>index.php">home <i class="la la-angle-down font-size-12"></i></a>                        
                            </li>
                            <li>
                                <a href="#">pages <i class="la la-angle-down font-size-12"></i></a>
                                <div class="drop-menu mega-menu py-0">
                                    <ul class="row no-gutters">
                                        <li class="mega-menu-item col-lg-4">
                                            <ul>
                                                <li><a href="<?php echo $site; ?>aboutus.php">about us</a></li>
                                                <li><a href="<?php echo $site; ?>services.php">services</a></li>
                                                <li><a href="<?php echo $site; ?>contactus.php">contact</a></li>
                                               
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item col-lg-4">
                                            <ul>                                                
                                                <li><a href="<?php echo $site; ?>pricing.php">pricing</a></li>                                          
                                            </ul>
                                        </li>
                                     
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo $site; ?>team.php">team <i class="la la-angle-down font-size-12"></i></a>
                                
                            </li>
                            <li>
                                <a href="#">blog <i class="la la-angle-down font-size-12"></i></a>
                                <ul class="drop-menu">
                                    <li><a href="#">How Cryptocurrency Begun and Its Impact To Financial</a></li>
                                    <li><a href="#">Cryptocurrency - Who Are Involved With It?<span class="ribbon ml-1">New</span></a></li>
                                    <li><a href="#">Risks & Rewards Of Investing In Bitcoin. Pros and Cons <span class="ribbon ml-1">New</span></a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="navbar-toolbar d-flex align-items-center pl-4">
                        <a href="#" class="shopping-cart-icon"><i class="la la-shopping-cart"></i></a>
                        <div class="dropdown navbar-tool-search">
                            <a class="nav-link dropdown-toggle search-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-search rotate-n90"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <form method="post">
                                    <div class="form-group mb-0">
                                        <span class="la la-search form-icon"></span>
                                        <input class="form-control form--control" type="search" name="name" placeholder="Type keywords & hit enter...">
                                    </div><!-- end form-group -->
                                </form>
                            </div>
                        </div>
                    </div><!-- end navbar-toolbar -->
                </div><!-- end main-navbar -->
            </div>
        </div> <!-- end container -->
    </div><!-- end header-menu-wrapper -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->