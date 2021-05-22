<?php 
$title = "Investment";
session_start();
include('../db.php');

if (!(isset($_SESSION['user']))): header('location: ../session/login.php'); endif;  
  
  include('header.php');
  include('navbar.php');

  //Pull User Basic Data
  $get = "SELECT * FROM members WHERE user_id = '".$_SESSION['user']."'";
  $result = mysqli_query($con, $get);
  $row = mysqli_num_rows($result);
    if($row == '1'){
      $member = mysqli_fetch_array($result);
      $name = $member['name'];
      $account = $member['account'];
      $referral = $member['referral'];
      $invest_bal = "";
    }
  
  //Get Investment Summary
  $invest = "SELECT * FROM investment WHERE account = '{$account}'";
  $query = mysqli_query($con, $invest);
  $row = mysqli_num_rows($query);
    if($row == "1"){
      $data = mysqli_fetch_array($query);
      $invest_bal = $data['balance'];
    } else {
      $invest_bal = "0.00";
    }

    $invest_bal;

    //Get Wallet Balance
    $wallet = "SELECT * FROM wallet WHERE account = '{$account}'";
    $query2 = mysqli_query($con, $wallet);
    $row2 = mysqli_num_rows($query2);
      if($row2 == "1"){
        $data = mysqli_fetch_array($query2);
        $wallet_bal = $data['balance'];
      } else{
        $wallet_bal = "0.00";
      }

      $wallet_bal;


   //Get number of Investments
    $inve_num = "SELECT * FROM investment WHERE account = '{$account}'";
    $query3 = mysqli_query($con, $inve_num);
    $row3 = mysqli_num_rows($query3);

    
    //Get Number of Referals
    $ref = "SELECT * FROM referrals WHERE referrals = '{$referral}'";
    $query4 = mysqli_query($con, $ref);
    $row4 = mysqli_num_rows($query4);
      if($row4 == '0'){
        $ref_count = "0";
      } else {

        $ref_count = $row4;
      }
      

?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Welcome <?php echo $name;  ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Copy & Use referral link:</li>
                            <li class="breadcrumb-item active"><span style="color: red;"><?php echo $referral; ?></span></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                      <h2><?php echo $invest_bal; ?>BTC</h2>
                  <h4 style="color: white;">Current Invest</h4>
                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                      <?php if($row3 == ""){ ?>
                      <h2>0 </h2>
                    <?php } else { ?>
                      <h2><?php echo $row3 ?> </h2>
                    <?php } ?>
                    <h4 style="color: white;">No of Investment</h4>
                  </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                      <h2><?php echo $ref_count;  ?></h2>
                    <h4 style="color: white;">Total Referals</h4>
                  </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                       <h2><?php echo $wallet_bal;  ?></h2>
                    <h4 style="color: white;">Wallet Amount</h4>
                  </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                     <a href="https://blockchain.com/btc/payment_request?address=1MvGM1YhKpwC1TpY6CYVQ6wMVJ4QcxbEfp&amount=0.00638927&message=NonFarm1" class="btn theme-btn theme-btn-white theme-btn-sm"><i class="la la-money mr-1 font-size-18"></i> Invest Now</a>
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
                                     <a href="https://blockchain.com/btc/payment_request?address=1MvGM1YhKpwC1TpY6CYVQ6wMVJ4QcxbEfp&amount=0.069&message=NonFarm2" class="btn theme-btn theme-btn-white theme-btn-sm"><i class="la la-money mr-1 font-size-18"></i> Invest Now</a>
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
                                     <a href="https://blockchain.com/btc/payment_request?address=1MvGM1YhKpwC1TpY6CYVQ6wMVJ4QcxbEfp&amount=0.23&message=NonFarm3" class="btn theme-btn theme-btn-white theme-btn-sm"><i class="la la-money mr-1 font-size-18"></i> Invest Now</a>
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
                                     <a href="https://blockchain.com/btc/payment_request?address=1MvGM1YhKpwC1TpY6CYVQ6wMVJ4QcxbEfp&amount=0.48&message=NonFarm4" class="btn theme-btn theme-btn-white theme-btn-sm"><i class="la la-money mr-1 font-size-18"></i> Invest Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end package-area -->
                    </div>
                </main>

       
 

<?php include('footer.php');