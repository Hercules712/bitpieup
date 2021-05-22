<?php 
$title = "Welcome to the Best Deal";	
	include('header.php');
	include('navbar.php');
 ?>
 
<!-- ================================
    START HERO AREA
================================= -->
<section class="hero-area hero-shape bg-5 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 responsive-column-full">
                <div class="hero-content">
                    <div class="section-heading">
                        <h1 class="section__title font-size-55 line-height-70 text-white">Secure and Easy Way to Trade Bitcoin</h1>
                        <p class="section__desc text-white pt-4">
                            Decentralized digital currency that enables instant payments <br/>
                            anyone in the global control the creation of additional.
                        </p>
                    </div>
                    <div class="hero-btn-box padding-top-35px">
                        <a href="<?php echo $site; ?>session/register.php" class="btn theme-btn mr-3">Get Started <i class="la la-arrow-right btn-icon ml-1"></i></a>
                        
                    </div>
                </div><!-- end hero-content -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5 responsive-column-full">
                <div class="hero-img-box">
                    <img src="images/v2.png" alt="vector image" class="hero__img w-100"/>
                </div> <!-- end hero-img-box -->
            </div> <!-- end col-lg-5 -->
        </div> <!-- end row -->
    </div><!-- end container -->
    <svg class="wave-svg-box" viewBox="0 0 120 28">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="1" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="
           1 0 0 0 0
           0 1 0 0 0
           0 0 1 0 0
           0 0 0 13 -9" result="goo" />
                <xfeBlend in="SourceGraphic" in2="goo" />
            </filter>
            <path id="wave"
                  d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
        </defs>

        <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
        <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>
        <g class="gooeff" filter="url(#goo)">
            <circle class="drop drop1" cx="20" cy="2" r="8.8" />
            <circle class="drop drop2" cx="25" cy="2.5" r="7.5" />
            <circle class="drop drop3" cx="16" cy="2.8" r="9.2" />
            <circle class="drop drop4" cx="18" cy="2" r="8.8" />
            <circle class="drop drop5" cx="22" cy="2.5" r="7.5" />
            <circle class="drop drop6" cx="26" cy="2.8" r="9.2" />
            <circle class="drop drop1" cx="5" cy="4.4" r="8.8" />
            <circle class="drop drop2" cx="5" cy="4.1" r="7.5" />
            <circle class="drop drop3" cx="8" cy="3.8" r="9.2" />
            <circle class="drop drop4" cx="3" cy="4.4" r="8.8" />
            <circle class="drop drop5" cx="7" cy="4.1" r="7.5" />
            <circle class="drop drop6" cx="10" cy="4.3" r="9.2" />

            <circle class="drop drop1" cx="1.2" cy="5.4" r="8.8" />
            <circle class="drop drop2" cx="5.2" cy="5.1" r="7.5" />
            <circle class="drop drop3" cx="10.2" cy="5.3" r="9.2" />
            <circle class="drop drop4" cx="3.2" cy="5.4" r="8.8" />
            <circle class="drop drop5" cx="14.2" cy="5.1" r="7.5" />
            <circle class="drop drop6" cx="17.2" cy="4.8" r="9.2" />
            <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
        </g>
    </svg>
</section><!-- end hero-area -->
<!-- ================================
    END HERO AREA
================================= -->

<!-- ================================
       START FEATURE AREA
================================= -->
<section class="feature-area padding-top-30px position-relative">
    <span class="ring-shape ring-shape-1 position-absolute"></span>
    <span class="ring-shape ring-shape-2 position-absolute"></span>
    <span class="ring-shape ring-shape-3 position-absolute"></span>
    <span class="ring-shape ring-shape-4 position-absolute"></span>
    <span class="ring-shape ring-shape-5 position-absolute"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box">
                    <span class="info__number">01</span>
                    <div class="info__icon icon-element">
                        <i class="flaticon-027-bitcoin-8"></i>
                    </div>
                    <h3 class="info__title">Learn About Bitcoin?</h3>
                    <p class="info__desc">
                         steps to help you get started using Bitcoin 
                    </p>
                    <a href="#" class="btn-text">Read More<i class="la la-arrow-right btn-icon ml-1"></i></a>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box">
                    <span class="info__number">02</span>
                    <div class="info__icon icon-element">
                        <i class="flaticon-001-bitcoin-20"></i>
                    </div>
                    <h3 class="info__title">Download a Wallet</h3>
                    <p class="info__desc">
                        steps to help you get Blockchain wallet.
                    </p>
                    <a href="#" class="btn-text">Get a Wallet<i class="la la-arrow-right btn-icon ml-1"></i></a>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box">
                    <span class="info__number">03</span>
                    <div class="info__icon icon-element">
                        <i class="flaticon-028-bitcoin-7"></i>
                    </div>
                    <h3 class="info__title">Add Coins to Wallet</h3>
                    <p class="info__desc">
                        steps to help you fund your wallet 
                    </p>
                    <a href="#" class="btn-text">Learn to Buy<i class="la la-arrow-right btn-icon ml-1"></i></a>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="info-box">
                    <span class="info__number">04</span>
                    <div class="info__icon icon-element">
                        <i class="flaticon-012-bitcoin-15"></i>
                    </div>
                    <h3 class="info__title">Buy/Sell with Wallet</h3>
                    <p class="info__desc">
                        steps to help you get started minning
                    </p>
                    <a href="#" class="btn-text">Learn to Use<i class="la la-arrow-right btn-icon ml-1"></i></a>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
 </section><!-- end feature-area -->
<!-- ================================
       START FEATURE AREA
================================= -->

<!-- ================================
       START ABOUT AREA
================================= -->
<section class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 responsive-column-full">
                <div class="about-content">
                    <div class="section-heading">
                        <div class="section-shape"></div>
                        <p class="section__meta pb-2">Learn About Us</p>
                        <h2 class="section__title padding-bottom-30px">Awards Winning Digital Cryptocurrency Platform</h2>
                        <p class="section__desc d-flex align-items-center text-color">
                            <span class="sec-year-time mr-3">30</span>
                            <span>Years of experience in digital cryptocurrency business </span>
                        </p>
                        <p class="section__desc py-3">
                           Our company BITPILEUP Inc, created by professional traders with years of experience, hard-working and accurately carrying out objectives, is an active participant of crypto trading. With our experience and safe approach to crypto trading investment, we can manage more capital and offer our investment platform to the public and at the same time guarantee you our continued credibility and success in the journey. 
                        </p>
                       
                    </div><!-- end section-heading -->
                    <div class="about-btn-box padding-top-30px">
                        <a href="<?php echo $site; ?>aboutus.php" class="btn theme-btn">Read More<i class="la la-arrow-right btn-icon ml-1"></i></a>
                    </div>
                </div><!-- end about-content -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-5 ml-auto responsive-column-full">
                <div class="img-box">
                    <img src="images/about-img.jpg" alt="about-us" class="img__item img__item-1"/>
                    <img src="images/about-img2.jpg" alt="about-us" class="img__item img__item-2"/>
                    <a class="icon-element icon-element-white play-btn" href="#" data-fancybox>
                        <i class="la la-play"></i>
                    </a>
                    <span class="overflow-text">bitpileup</span>
                </div><!-- end img-box -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
        <div class="row padding-top-120px padding-bottom-60px">
            <div class="col-lg-3 responsive-column-half">
                <div class="counter-item">
                    <div class="counter-icon">
                        <i class="flaticon-032-bitcoin-3"></i>
                    </div>
                    <span class="counter-number counter">85389</span>
                    <p class="counter-title">Total Transactions</p>
                </div><!-- end counter-item-->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="counter-item pt-5">
                    <div class="counter-icon">
                        <i class="flaticon-001-bitcoin-20"></i>
                    </div>
                    <span class="counter-number counter">6540</span>
                    <p class="counter-title">Bitcoin Wallet</p>
                </div><!-- end counter-item-->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="counter-item">
                    <div class="counter-icon">
                        <i class="flaticon-034-consulting"></i>
                    </div>
                    <span class="counter-number counter">7540</span>
                    <p class="counter-title">Happy Users</p>
                </div><!-- end counter-item-->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="counter-item pt-5">
                    <div class="counter-icon">
                        <i class="flaticon-006-bitcoin-18"></i>
                    </div>
                    <span class="counter-number counter">5721</span>
                    <p class="counter-title">Bitcoin Investors</p>
                </div><!-- end counter-item-->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="divider"></div><!-- end divider -->
        <div class="text-info-box text-center pt-4">
            <p>Do not hesitate to start with us for better help and services
                <a href="<?php echo $site; ?>session/register.php" class="btn-text ml-1">Get Started<i class="la la-arrow-right btn-icon ml-1"></i></a>
            </p>
        </div><!-- end text-info-box -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!-- ================================
       START ABOUT AREA
================================= -->

<!-- ================================
       START HOWITWORKS AREA
================================= -->
<section class="howitworks-area bg-gray section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <div class="section-shape mx-auto"></div>
                        <p class="section__meta pb-2">Check Our Process</p>
                        <h2 class="section__title">Provide Awesome Service for this <br> People Choose Us</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-4 responsive-column-half">
                    <div class="info-box info-box-layout-2">
                        <div class="info__icon icon-element">
                            <span class="flaticon-014-bitcoin-13"></span>
                        </div>
                        <h3 class="info__title">
                            <a href="<?php echo $site; ?>service.php">Safe and Secure</a>
                        </h3>
                        <p class="info__desc">
                           We ensure that our site and user data is fully secured from malicious intents
                        </p>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="info-box info-box-layout-2">
                        <div class="info__icon icon-element">
                            <span class="flaticon-031-bitcoin-4"></span>
                        </div>
                        <h3 class="info__title">
                            <a href="<?php echo $site; ?>service.php">World Coverage</a>
                        </h3>
                        <p class="info__desc">
                           Worldwide coverage is our global policy provided by our great team 
                        </p>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="info-box info-box-layout-2">
                        <div class="info__icon icon-element">
                            <span class="flaticon-001-bitcoin-20"></span>
                        </div>
                        <h3 class="info__title">
                            <a href="<?php echo $site; ?>service.php">Payment Options</a>
                        </h3>
                        <p class="info__desc">
                          We are serious about making it easier for our customers to pay and be paid
                        </p>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="info-box info-box-layout-2">
                        <div class="info__icon icon-element">
                            <span class="flaticon-002-bitcoin-19"></span>
                        </div>
                        <h3 class="info__title">
                            <a href="<?php echo $site; ?>service.php">Mobile App</a>
                        </h3>
                        <p class="info__desc">
                            We are serious about making it easier for our customers to monitor trades
                        </p>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="info-box info-box-layout-2">
                        <div class="info__icon icon-element">
                            <span class="flaticon-004-saving"></span>
                        </div>
                        <h3 class="info__title">
                            <a href="<?php echo $site; ?>service.php">Referal Bonus</a>
                        </h3>
                        <p class="info__desc">
                            Lets motivate you as you refer your families and friends to our platform
                        </p>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="info-box info-box-layout-2">
                        <div class="info__icon icon-element">
                            <span class="flaticon-029-bitcoin-6"></span>
                        </div>
                        <h3 class="info__title">
                            <a href="<?php echo $site; ?>service.php">High Liquidity</a>
                        </h3>
                        <p class="info__desc">
                             We have enough assets to meet obligations and to keep you happy
                        </p>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="button-shared-wrap pt-3">
                <a href="<?php echo $site; ?>service.php" class="btn theme-btn">Browse All Services<i class="la la-arrow-right btn-icon ml-1"></i></a>
            </div><!-- end button-shared-wrap -->
        </div><!-- end container -->
    </section><!-- end howitworks-area -->
<!-- ================================
   START HOWITWORKS AREA
================================= -->

<!-- ================================
       START TEAM AREA
================================= -->
<section class="team-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <div class="section-shape mx-auto"></div>
                        <p class="section__meta pb-2">Our Team Member</p>
                        <h2 class="section__title">Meet Our Experts</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-3 responsive-column-half">
                    <div class="team-card">
                        <img src="images/team1.jpg" alt="team image" class="team__img"/>
                        <div class="team-card-content">
                            <h3 class="team__title"><a href="#">adam smith</a></h3>
                            <span class="team__meta">CEO & founder</span>
                            <ul class="social-icons">
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-linkedin"></i></a></li>
                                <li><a href="#"><i class="la la-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- end team-card -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="team-card">
                        <img src="images/team2.jpg" alt="team image" class="team__img"/>
                        <div class="team-card-content">
                            <h3 class="team__title"><a href="#">pam sharon</a></h3>
                            <span class="team__meta">director</span>
                            <ul class="social-icons">
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-linkedin"></i></a></li>
                                <li><a href="#"><i class="la la-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- end team-card -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="team-card">
                        <img src="images/team3.jpg" alt="team image" class="team__img"/>
                        <div class="team-card-content">
                            <h3 class="team__title"><a href="#">richard pam</a></h3>
                            <span class="team__meta">bitcoin consultant</span>
                            <ul class="social-icons">
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-linkedin"></i></a></li>
                                <li><a href="#"><i class="la la-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- end team-card -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="team-card">
                        <img src="images/team4.jpg" alt="team image" class="team__img"/>
                        <div class="team-card-content">
                            <h3 class="team__title"><a href="#">kamran Adi</a></h3>
                            <span class="team__meta">bitcoin developer</span>
                            <ul class="social-icons">
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-linkedin"></i></a></li>
                                <li><a href="#"><i class="la la-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- end team-card -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end team-area -->
<!-- ================================
    START TEAM AREA
================================= -->

<!-- ================================
     START CALCULATOR AREA
================================= -->
<section class="calculator-area section--padding bg-gray position-relative">
        <span class="circle-shape circle-shape-1 position-absolute"></span>
        <span class="circle-shape circle-shape-2 position-absolute"></span>
        <span class="circle-shape circle-shape-3 position-absolute"></span>
        <span class="circle-shape circle-shape-4 position-absolute"></span>
        <span class="circle-shape circle-shape-5 position-absolute"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <div class="section-shape mx-auto"></div>
                        <p class="section__meta pb-2">with all cryptocurrency values</p>
                        <h2 class="section__title">Calculate Live Cryptocurrency</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-8 mx-auto responsive-column-full">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="calculator-input-box">
                                <div class="user-chosen-select-container cyptocurrency mb-3">
                                    <select class="user-chosen-select" id="selected-coin" onchange="bitconCalculateOnCryptoChange(this.value);">
                                        <option value="bitcoin">Bitcoin</option>
                                        <option value="ethereum">Ethereum</option>
                                        <option value="bitcoin-cash">Bitcoin Cash</option>
                                        <option value="litecoin">Litecoin</option>
                                        <option value="ripple">Ripple</option>
                                        <option value="monero">Monero</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control form--control mb-3 pl-3" id="amtBTC" value="1"/>
                            </div><!-- end calculator-input-box -->
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="calculator-input-box">
                                <input type="text" class="form-control form--control decrement pl-3" id="amtUSD" value="0.00" />
                                <div class="user-chosen-select-container crypto-price mt-3">
                                    <select id="selected-currency" onchange="bitconCalculateOnCurrencyChange(this.value);" class="user-chosen-select capitalize">
                                        <option value="GGP">GGP - Guernsey Pound</option>
                                        <option value="LKR">LKR - Sri Lankan-rupee</option>
                                        <option value="UYU">UYU - Uruguayan Peso</option>
                                        <option value="ARS">ARS - Argentine Peso</option>
                                        <option value="BBD">BBD - Barbadian Dollar</option>
                                        <option value="BIF">BIF - Burundian Franc</option>
                                        <option value="AED">AED - United Arab-emirates-dirham</option>
                                        <option value="IRR">IRR - Iranian Rial</option>
                                        <option value="RWF">RWF - Rwandan Franc</option>
                                        <option value="TMT">TMT - Turkmenistani Manat</option>
                                        <option value="ZMW">ZMW - Zambian Kwacha</option>
                                        <option value="BRL">BRL - Brazilian Real</option>
                                        <option value="UGX">UGX - Ugandan Shilling</option>
                                        <option value="HRK">HRK - Croatian Kuna</option>
                                        <option value="VEF">VEF - Venezuelan Bolívar-fuerte</option>
                                        <option value="GBP">GBP - British Pound-sterling</option>
                                        <option value="NOK">NOK - Norwegian Krone</option>
                                        <option value="DKK">DKK - Danish Krone</option>
                                        <option value="GEL">GEL - Georgian Lari</option>
                                        <option value="AFN">AFN - Afghan Afghani</option>
                                        <option value="CVE">CVE - Cape Verdean-escudo</option>
                                        <option value="TWD">TWD - New Taiwan-dollar</option>
                                        <option value="AZN">AZN - Azerbaijani Manat</option>
                                        <option value="ZAR">ZAR - South African-rand</option>
                                        <option value="PKR">PKR - Pakistani Rupee</option>
                                        <option value="VUV">VUV - Vanuatu Vatu</option>
                                        <option value="KHR">KHR - Cambodian Riel</option>
                                        <option value="MOP">MOP - Macanese Pataca</option>
                                        <option value="SGD">SGD - Singapore Dollar</option>
                                        <option value="JPY">JPY - Japanese Yen</option>
                                        <option value="MDL">MDL - Moldovan Leu</option>
                                        <option value="KMF">KMF - Comorian Franc</option>
                                        <option value="COP">COP - Colombian Peso</option>
                                        <option value="IQD">IQD - Iraqi Dinar</option>
                                        <option value="SRD">SRD - Surinamese Dollar</option>
                                        <option value="KES">KES - Kenyan Shilling</option>
                                        <option value="LSL">LSL - Lesotho Loti</option>
                                        <option value="ETB">ETB - Ethiopian Birr</option>
                                        <option value="KGS">KGS - Kyrgystani Som</option>
                                        <option value="LYD">LYD - Libyan Dinar</option>
                                        <option value="QAR">QAR - Qatari Rial</option>
                                        <option value="KRW">KRW - South Korean-won</option>
                                        <option value="NGN">NGN - Nigerian Naira</option>
                                        <option value="GMD">GMD - Gambian Dalasi</option>
                                        <option value="TJS">TJS - Tajikistani Somoni</option>
                                        <option value="KZT">KZT - Kazakhstani Tenge</option>
                                        <option value="SVC">SVC - Salvadoran Colón</option>
                                        <option value="CLF">CLF - Chilean Unit-of-account-(uf)</option>
                                        <option value="JOD">JOD - Jordanian Dinar</option>
                                        <option value="PLN">PLN - Polish Zloty</option>
                                        <option value="NPR">NPR - Nepalese Rupee</option>
                                        <option value="LBP">LBP - Lebanese Pound</option>
                                        <option value="XCD">XCD - East Caribbean-dollar</option>
                                        <option value="XOF">XOF - Cfa Franc-bceao</option>
                                        <option value="BAM">BAM - Bosnia Herzegovina-convertible-mark</option>
                                        <option value="XPT">XPT - Platinum Ounce</option>
                                        <option value="RUB">RUB - Russian Ruble</option>
                                        <option value="BYN">BYN - Belarusian Ruble</option>
                                        <option value="SBD">SBD - Solomon Islands-dollar</option>
                                        <option value="AOA">AOA - Angolan Kwanza</option>
                                        <option value="HUF">HUF - Hungarian Forint</option>
                                        <option value="SHP">SHP - Saint Helena-pound</option>
                                        <option value="MNT">MNT - Mongolian Tugrik</option>
                                        <option value="IDR">IDR - Indonesian Rupiah</option>
                                        <option value="PGK">PGK - Papua New-guinean-kina</option>
                                        <option value="SZL">SZL - Swazi Lilangeni</option>
                                        <option value="BND">BND - Brunei Dollar</option>
                                        <option value="SOS">SOS - Somali Shilling</option>
                                        <option value="GYD">GYD - Guyanaese Dollar</option>
                                        <option value="GIP">GIP - Gibraltar Pound</option>
                                        <option value="IMP">IMP - Manx Pound</option>
                                        <option value="EUR">EUR - Euro</option>
                                        <option value="SAR">SAR - Saudi Riyal</option>
                                        <option value="BDT">BDT - Bangladeshi Taka</option>
                                        <option value="LAK">LAK - Laotian Kip</option>
                                        <option value="UZS">UZS - Uzbekistan Som</option>
                                        <option selected value="USD">USD - United States-dollar</option>
                                        <option value="HKD">HKD - Hong Kong-dollar</option>
                                        <option value="KYD">KYD - Cayman Islands-dollar</option>
                                        <option value="FJD">FJD - Fijian Dollar</option>
                                        <option value="MVR">MVR - Maldivian Rufiyaa</option>
                                        <option value="MYR">MYR - Malaysian Ringgit</option>
                                        <option value="SYP">SYP - Syrian Pound</option>
                                        <option value="NAD">NAD - Namibian Dollar</option>
                                        <option value="HTG">HTG - Haitian Gourde</option>
                                        <option value="CUP">CUP - Cuban Peso</option>
                                        <option value="XPD">XPD - Palladium Ounce</option>
                                        <option value="TND">TND - Tunisian Dinar</option>
                                        <option value="LRD">LRD - Liberian Dollar</option>
                                        <option value="XAG">XAG - Silver Ounce</option>
                                        <option value="HNL">HNL - Honduran Lempira</option>
                                        <option value="VND">VND - Vietnamese Dong</option>
                                        <option value="ERN">ERN - Eritrean Nakfa</option>
                                        <option value="VES">VES - Venezuelan Bolívar-soberano</option>
                                        <option value="RSD">RSD - Serbian Dinar</option>
                                        <option value="XPF">XPF - Cfp Franc</option>
                                        <option value="JMD">JMD - Jamaican Dollar</option>
                                        <option value="MRU">MRU - Mauritanian Ouguiya</option>
                                        <option value="BOB">BOB - Bolivian Boliviano</option>
                                        <option value="BWP">BWP - Botswanan Pula</option>
                                        <option value="DZD">DZD - Algerian Dinar</option>
                                        <option value="CDF">CDF - Congolese Franc</option>
                                        <option value="CRC">CRC - Costa Rican-colón</option>
                                        <option value="TRY">TRY - Turkish Lira</option>
                                        <option value="FKP">FKP - Falkland Islands-pound</option>
                                        <option value="ANG">ANG - Netherlands Antillean-guilder</option>
                                        <option value="BHD">BHD - Bahraini Dinar</option>
                                        <option value="WST">WST - Samoan Tala</option>
                                        <option value="BTN">BTN - Bhutanese Ngultrum</option>
                                        <option value="CNY">CNY - Chinese Yuan-renminbi</option>
                                        <option value="MAD">MAD - Moroccan Dirham</option>
                                        <option value="MUR">MUR - Mauritian Rupee</option>
                                        <option value="TTD">TTD - Trinidad And-tobago-dollar</option>
                                        <option value="BZD">BZD - Belize Dollar</option>
                                        <option value="PAB">PAB - Panamanian Balboa</option>
                                        <option value="YER">YER - Yemeni Rial</option>
                                        <option value="XAF">XAF - Cfa Franc-beac</option>
                                        <option value="CZK">CZK - Czech Republic-koruna</option>
                                        <option value="OMR">OMR - Omani Rial</option>
                                        <option value="PHP">PHP - Philippine Peso</option>
                                        <option value="CAD">CAD - Canadian Dollar</option>
                                        <option value="ZWL">ZWL - Zimbabwean Dollar</option>
                                        <option value="MGA">MGA - Malagasy Ariary</option>
                                        <option value="GHS">GHS - Ghanaian Cedi</option>
                                        <option value="STD">STD - São Tomé-and-príncipe-dobra-(pre-2018)</option>
                                        <option value="RON">RON - Romanian Leu</option>
                                        <option value="MWK">MWK - Malawian Kwacha</option>
                                        <option value="CHF">CHF - Swiss Franc</option>
                                        <option value="DJF">DJF - Djiboutian Franc</option>
                                        <option value="GTQ">GTQ - Guatemalan Quetzal</option>
                                        <option value="BMD">BMD - Bermudan Dollar</option>
                                        <option value="KWD">KWD - Kuwaiti Dinar</option>
                                        <option value="SEK">SEK - Swedish Krona</option>
                                        <option value="XDR">XDR - Special Drawing-rights</option>
                                        <option value="SLL">SLL - Sierra Leonean-leone</option>
                                        <option value="BGN">BGN - Bulgarian Lev</option>
                                        <option value="AUD">AUD - Australian Dollar</option>
                                        <option value="NZD">NZD - New Zealand-dollar</option>
                                        <option value="MRO">MRO - Mauritanian Ouguiya-(pre-2018)</option>
                                        <option value="ILS">ILS - Israeli New-sheqel</option>
                                        <option value="AMD">AMD - Armenian Dram</option>
                                        <option value="CNH">CNH - Chinese Yuan-(offshore)</option>
                                        <option value="MZN">MZN - Mozambican Metical</option>
                                        <option value="AWG">AWG - Aruban Florin</option>
                                        <option value="DOP">DOP - Dominican Peso</option>
                                        <option value="UAH">UAH - Ukrainian Hryvnia</option>
                                        <option value="JEP">JEP - Jersey Pound</option>
                                        <option value="SCR">SCR - Seychellois Rupee</option>
                                        <option value="TZS">TZS - Tanzanian Shilling</option>
                                        <option value="PYG">PYG - Paraguayan Guarani</option>
                                        <option value="SDG">SDG - Sudanese Pound</option>
                                        <option value="MKD">MKD - Macedonian Denar</option>
                                        <option value="EGP">EGP - Egyptian Pound</option>
                                        <option value="MXN">MXN - Mexican Peso</option>
                                        <option value="PEN">PEN - Peruvian Nuevo-sol</option>
                                        <option value="INR">INR - Indian Rupee</option>
                                        <option value="CUC">CUC - Cuban Convertible-peso</option>
                                        <option value="STN">STN - São Tomé-and-príncipe-dobra</option>
                                        <option value="CLP">CLP - Chilean Peso</option>
                                        <option value="XAU">XAU - Gold Ounce</option>
                                        <option value="SSP">SSP - South Sudanese-pound</option>
                                        <option value="GNF">GNF - Guinean Franc</option>
                                        <option value="THB">THB - Thai Baht</option>
                                        <option value="KPW">KPW - North Korean-won</option>
                                        <option value="MMK">MMK - Myanma Kyat</option>
                                        <option value="ISK">ISK - Icelandic Króna</option>
                                    </select>
                                </div>
                            </div><!-- end calculator-input-box -->
                        </div><!-- end col-lg-6 -->
                    </div><!-- end crypto-calculator -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end calculator-area -->
<!-- ================================
     END CALCULATOR AREA
================================= -->

<!-- ================================
       START CHART AREA
================================= -->
<section class="chart-area section--padding">
    <div class="container">
        <div class="row padding-bottom-80px">
            <div class="col-lg-6 responsive-column-full">
                <div class="chart-content mb-5">
                    <div class="section-heading">
                        <div class="section-shape"></div>
                        <p class="section__meta pb-2">Discover Bitpileup</p>
                        <h2 class="section__title pb-3">Bitpileup Distribution</h2>
                        <p class="section__desc">
                            BITPILEUP have different reasons to choosing Crypto-market. The truth is, Crypto has a lot to offer for any type of trader and there are a lot of reasons to trade Crypto online. Our traders determine the following reasons as the answer to the question of why Crypto-market is the best market for trading online.<br>
                            Compared to many other online trading markets, technological advancements are definitely why Crypto-market is one of the most potentially lucrative markets to trade.
                        </p>
                        <a href="<?php echo $site; ?>session/register.php" class="btn theme-btn mt-4">Signup Now<i class="la la-arrow-right btn-icon ml-1"></i></a>
                    </div><!-- end section-heading -->
                </div><!-- end chart-content -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-full">
                <div class="card-item card--item mb-5">
                    <canvas id="result-chart"></canvas>
                    <ul class="chart-legend text-center pt-3">
                        <li><span class="legend-shape legend-shape-one"></span>Business</li>
                        <li><span class="legend-shape legend-shape-two"></span>Others</li>
                    </ul>
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-5 responsive-column-full">
                <div class="card-item card--item mb-5">
                    <canvas id="doughutChart"></canvas>
                    <ul class="chart-legend text-center pt-3">
                        <li><span class="legend-shape legend-shape-one"></span>Bitcoin</li>
                        <li><span class="legend-shape legend-shape-two"></span>Litecoin</li>
                        <li><span class="legend-shape legend-shape-three"></span>Ripple</li>
                    </ul>
                </div>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-6 ml-auto responsive-column-full">
                <div class="chart-content">
                    <div class="section-heading">
                        <div class="section-shape"></div>
                        <p class="section__meta pb-2">Our Growth</p>
                        <h2 class="section__title pb-4">Building an Ecosystem for Blockchain</h2>
                        <ul class="list-items">
                            <li class="mb-3">
                                <i class="la la-check icon bg-1 text-white"></i>
                                Sign through an iterative mind mapping ideas
                            </li>
                            <li class="mb-3">
                                <i class="la la-check icon bg-2 text-white"></i>
                                Instant and secure transactions
                            </li>
                            <li class="mb-3">
                                <i class="la la-check icon bg-3 text-white"></i>
                                Decentralized, instant and secure payments
                            </li>
                        </ul>
                        <a href="<?php echo $site; ?>aboutus.php" class="btn theme-btn mt-4">Read More <i class="la la-arrow-right btn-icon ml-1"></i></a>
                    </div><!-- end section-heading -->
                </div><!-- end chart-content -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end chart-area -->
<!-- ================================
       START CHART AREA
================================= -->

<!-- ================================
       START CLIENTLOGO AREA
================================= -->
    <section class="clientlogo-area bg-gray py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-logo-carousel">
                        <div class="client-logo-item">
                            <img src="images/bitcoin-logo.png" alt="brand image"/>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/ripple.png" alt="brand image"/>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/coinone-1.png" alt="brand image"/>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/coinbase.png" alt="brand image"/>
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/dash-2.png" alt="brand image"/>
                        </div><!-- end client-logo-item -->
                    </div><!-- end client-logo-carousel -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end clientlogo-area -->
<!-- ================================
       START CLIENTLOGO AREA
================================= -->

<!-- ================================
       START CTA AREA
================================= -->
    <section class="cta-area section-padding img-bg position-relative overflow-hidden">
        <div class="overlay"></div><!-- end overlay -->
        <span class="ring-shape ring-shape-white ring-shape-1 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-2 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-3 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-4 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-5 position-absolute"></span>
        <span class="ring-shape ring-shape-white ring-shape-6 position-absolute"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 responsive-column-full">
                    <div class="section-heading">
                        <h2 class="section__title pb-2 text-white">Are You Ready to Join With Us</h2>
                        <p class="section__desc text-white-50 pb-4">Join the moving and the winning team now</p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4 responsive-column-full">
                    <div class="cta-btn-box text-right">
                        <a href="<?php echo $site; ?>session/register.php" class="btn theme-btn">Get Started <i class="la la-arrow-right btn-icon ml-1"></i></a>
                    </div><!-- end cta-btn-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cta-area -->
<!-- ================================
       START CTA AREA
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

<div class="divider"></div><!-- end divider -->

<!-- ================================
       START MARKETPRICE AREA
================================= -->
    <section class="marketprice-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <div class="section-shape mx-auto"></div>
                        <p class="section__meta pb-2">Check out market depth</p>
                        <h2 class="section__title">Cryptocurrency Prices</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-12">
                    <div class="card-item generic-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Market Cap</th>
                                    <th scope="col">Supply</th>
                                    <th scope="col">Volume(24Hr)</th>
                                    <th scope="col">Change(24Hr)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="d-flex align-items-center crypto-name-wrap">
                                        <img src="images/bitcoin-symble.png" class="flex-shrink-0 mr-2" alt="coin-img"/>
                                        <p class="line-height-18">
                                            Bitcoin <span class="d-block font-size-11 text-gray">BTC</span>
                                        </p>
                                    </td>
                                    <td><span class="numeral">$34,307.79</span></td>
                                    <td><span class="numeral">$638.91b</span> </td>
                                    <td><span class="numeral">18.59m</span> </td>
                                    <td><span class="numeral">$43.95b</span> </td>
                                    <td><span class="numeral red">-4.61%</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td class="d-flex align-items-center crypto-name-wrap">
                                        <img src="images/ethereum-symble.png" class="flex-shrink-0 mr-2" alt="coin-img"/>
                                        <p class="line-height-18">
                                            Ethereum <span class="d-block font-size-11 text-gray">ETH</span>
                                        </p>
                                    </td>
                                    <td><span class="numeral">$1,081.28</span> </td>
                                    <td><span class="numeral">$123.25b</span> </td>
                                    <td><span class="numeral">114.14m</span> </td>
                                    <td><span class="numeral">$23.13b</span> </td>
                                    <td><span class="numeral red">1.27%</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td class="d-flex align-items-center crypto-name-wrap">
                                        <img src="images/litecoin_symble.png" class="flex-shrink-0 mr-2" alt="coin-img"/>
                                        <p class="line-height-18">
                                            Litecoin <span class="d-block font-size-11 text-gray">LTC</span>
                                        </p>
                                    </td>
                                    <td><span class="numeral">$138.62</span> </td>
                                    <td><span class="numeral">$9.18b</span> </td>
                                    <td><span class="numeral">66.25m</span> </td>
                                    <td><span class="numeral">$4.25b</span> </td>
                                    <td><span class="numeral red">0.24%</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td class="d-flex align-items-center crypto-name-wrap">
                                        <img src="images/tether-symble.png" class="flex-shrink-0 mr-2" alt="coin-img"/>
                                        <p class="line-height-18">
                                            Tether <span class="d-block font-size-11 text-gray">USDT</span>
                                        </p>
                                    </td>
                                    <td><span class="numeral">$1.00</span> 	</td>
                                    <td><span class="numeral">$22.14b</span> </td>
                                    <td><span class="numeral">22.12b</span> </td>
                                    <td><span class="numeral">$52.25b</span> </td>
                                    <td><span class="numeral red">0.56%</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td class="d-flex align-items-center crypto-name-wrap">
                                        <img src="images/xrp-symble.png" class="flex-shrink-0 mr-2" alt="coin-img"/>
                                        <p class="line-height-18">
                                            XRP <span class="d-block font-size-11 text-gray">XRP</span>
                                        </p>
                                    </td>
                                    <td><span class="numeral">$0.29445329</span> </td>
                                    <td><span class="numeral">$13.37b</span> </td>
                                    <td><span class="numeral">22.12b</span> </td>
                                    <td><span class="numeral">$52.25b</span> </td>
                                    <td><span class="numeral green">7.56%</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td class="d-flex align-items-center crypto-name-wrap">
                                        <img src="images/cardano-symble.png" class="flex-shrink-0 mr-2" alt="coin-img"/>
                                        <p class="line-height-18">
                                            Cardano <span class="d-block font-size-11 text-gray">ADA</span>
                                        </p>
                                    </td>
                                    <td><span class="numeral">$0.28770404</span> </td>
                                    <td><span class="numeral">$8.37b</span> </td>
                                    <td><span class="numeral">22.12b</span> </td>
                                    <td><span class="numeral">$52.25b</span> </td>
                                    <td><span class="numeral green">7.56%</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td class="d-flex align-items-center crypto-name-wrap">
                                        <img src="images/bitcoin-cash-symble.png" class="flex-shrink-0 mr-2" alt="coin-img"/>
                                        <p class="line-height-18">
                                            Bitcoin Cash <span class="d-block font-size-11 text-gray">BCH</span>
                                        </p>
                                    </td>
                                    <td><span class="numeral">$477.11</span> </td>
                                    <td><span class="numeral">$8.37b</span> </td>
                                    <td><span class="numeral">22.12b</span> </td>
                                    <td><span class="numeral">$52.25b</span> </td>
                                    <td><span class="numeral green">7.56%</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td class="d-flex align-items-center crypto-name-wrap">
                                        <img src="images/stellar-symble.png" class="flex-shrink-0 mr-2" alt="coin-img"/>
                                        <p class="line-height-18">
                                            Stellar <span class="d-block font-size-11 text-gray">XLM</span>
                                        </p>
                                    </td>
                                    <td><span class="numeral">$0.30684744</span> </td>
                                    <td><span class="numeral">$8.37b</span> </td>
                                    <td><span class="numeral">22.12b</span> </td>
                                    <td><span class="numeral">$52.25b</span> </td>
                                    <td><span class="numeral green">27.56%</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td class="d-flex align-items-center crypto-name-wrap">
                                        <img src="images/chainlink-symble.png" class="flex-shrink-0 mr-2" alt="coin-img"/>
                                        <p class="line-height-18">
                                            Chainlink <span class="d-block font-size-11 text-gray">LINK</span>
                                        </p>
                                    </td>
                                    <td><span class="numeral">$15.45</span> </td>
                                    <td><span class="numeral">$8.37b</span> </td>
                                    <td><span class="numeral">22.12b</span> </td>
                                    <td><span class="numeral">$52.25b</span> </td>
                                    <td><span class="numeral green">27.56%</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td class="d-flex align-items-center crypto-name-wrap">
                                        <img src="images/monero-symble.png" class="flex-shrink-0 mr-2" alt="coin-img"/>
                                        <p class="line-height-18">
                                            Monero <span class="d-block font-size-11 text-gray">XMR</span>
                                        </p>
                                    </td>
                                    <td><span class="numeral">$172.45</span> </td>
                                    <td><span class="numeral">$8.37b</span> </td>
                                    <td><span class="numeral">22.12b</span> </td>
                                    <td><span class="numeral">$52.25b</span> </td>
                                    <td><span class="numeral green">27.56%</span> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- end coin-price-table -->
                    <div class="button-shared-wrap text-center">
                        <button class="btn theme-btn theme-btn-white theme-btn-sm"><i class="la la-refresh mr-1"></i> View More</button>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end marketprice-area -->
<!-- ================================
       START MARKETPRICE AREA
================================= -->

<!-- ================================
       START TESTIMONIAL AREA
================================= -->
    <section class="testimonial-area section-padding text-center position-relative bg-gray">
        <img src="images/small-team1.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team2.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team3.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team4.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team5.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team6.jpg" alt="testtmonial-image" class="random-img"/>
        <img src="images/small-team7.jpg" alt="testtmonial-image" class="random-img"/>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <div class="section-shape mx-auto"></div>
                        <p class="section__meta pb-2">Feedback our investors</p>
                        <h2 class="section__title">What They Said</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-8 mx-auto responsive-column-full">
                    <div class="client-testimonial owl-action-styled">
                        <div class="testimonial-card">
                            <div class="testimonial__img">
                                <span class="testimonial__img-circle"></span>
                                <img src="images/small-team1.jpg" alt="testimonial image" />
                            </div>
                            <p class="testimonial__desc">
                                Bitpileup Investment provides an excellent service, be it on a business or on a personal level. I have found the company’s advice regarding investment opportunities particularly helpful
                            </p>
                            <h4 class="testimonial__title">Richard Mason</h4>
                            <span class="testimonial__meta">United States</span>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testimonial__img">
                                <span class="testimonial__img-circle"></span>
                                <img src="images/small-team2.jpg" alt="testimonial image" />
                            </div>
                            <p class="testimonial__desc">
                                Since investing with Bitpileup investment we have worked together to get a clear understandable plan for our future which gives us confidence and security knowing what kind of lifestyle we can lead.
                            </p>
                            <h4 class="testimonial__title">Denwen Peters</h4>
                            <span class="testimonial__meta">Australia</span>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testimonial__img">
                                <span class="testimonial__img-circle"></span>
                                <img src="images/small-team3.jpg" alt="testimonial image" />
                            </div>
                            <p class="testimonial__desc">
                                We have been with Bitpileup Investment now for three years. His small team have made an effort to get to know us and so the service we receive feels very personal. 
                            </p>
                            <h4 class="testimonial__title">Ken Grey</h4>
                            <span class="testimonial__meta">United Kingdom</span>
                        </div><!-- end testimonial-card -->
                    </div><!-- end client-testimonial -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end testimonial-area -->
<!-- ================================
       START TESTIMONIAL AREA
================================= -->

<!-- ================================
       START BLOG AREA
================================= -->
    <section class="blog-area section--padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 responsive-column-full">
                    <div class="section-heading">
                        <div class="section-shape"></div>
                        <p class="section__meta pb-2">News feeds</p>
                        <h2 class="section__title pb-4">Blog & News</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4 responsive-column-full">
                    <div class="blog-btn-box text-right pb-2">
                        <a href="#" class="btn theme-btn">View All News <i class="la la-arrow-right btn-icon ml-1"></i></a>
                    </div><!-- end blog-btn-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row padding-top-30px">
                <div class="col-lg-4 responsive-column-half">
                    <div class="card card-item overflow-hidden">
                        <a href="blog-single.html" class="card-img d-block overflow-hidden">
                            <img class="card-img-top" src="images/blog-img1.jpg" alt="Blog image">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">How Cryptocurrency Begun and Its Impact To Financial</a>
                            </h5>
                            <p class="card-text"></p>
                            <div class="media media-card padding-top-40px">
                                <img class="media-img mr-3" src="images/small-team1.jpg" alt="Author image">
                                <div class="media-body">
                                    <h5>Kevin Helms</h5>
                                    <p>6 hours ago</p>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="card card-item overflow-hidden">
                        <a href="#" class="card-img d-block overflow-hidden">
                            <img class="card-img-top" src="images/blog-img2.jpg" alt="Blog image">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="blog-single.html">Cryptocurrency - Who Are Involved With It?</a>
                            </h5>
                            <p class="card-text"></p>
                            <div class="media media-card padding-top-40px">
                                <img class="media-img mr-3" src="images/small-team2.jpg" alt="Author image">
                                <div class="media-body">
                                    <h5>David Wise</h5>
                                    <p>13 hours ago</p>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="card card-item overflow-hidden">
                        <a href="blog-single.html" class="card-img d-block overflow-hidden">
                            <img class="card-img-top" src="images/blog-img3.jpg" alt="Blog image">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Risks & Rewards Of Investing In Bitcoin. Pros and Cons</a>
                            </h5>
                            <p class="card-text"></p>
                            <div class="media media-card padding-top-40px">
                                <img class="media-img mr-3" src="images/small-team3.jpg" alt="Author image">
                                <div class="media-body">
                                    <h5>Felipe Erazo</h5>
                                    <p>23 Dec 2020</p>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

<div class="divider"></div><!-- end divider -->





 <?php include('footer.php');  ?>