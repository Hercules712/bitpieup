<?php 
$title = "User Dashboard";
session_start();
include('../db.php');

if (!(isset($_SESSION['user']))): header('location: ../session/login.php'); endif;  
	$title = "User Dashboard";
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
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Technical Analysis for AAPL
                                    </div>
                                    <div class="card-body">
                                    	<!-- TradingView Widget BEGIN -->
										<div class="tradingview-widget-container">
										  <div class="tradingview-widget-container__widget"></div>
										  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/technicals/" rel="noopener" target="_blank"><span class="blue-text">Technical Analysis for AAPL</span></a> by Bitpileup</div>
										  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
										  {
										  "interval": "1m",
										  "width": 425,
										  "isTransparent": false,
										  "height": 450,
										  "symbol": "NASDAQ:AAPL",
										  "showIntervalTabs": true,
										  "locale": "en",
										  "colorTheme": "light"
										}
										  </script>
										</div>
										<!-- TradingView Widget END -->
									</div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Make Investments
                                    </div>
                                    <div class="card-body">
                                    	<div style="margin-right:auto; margin-left:auto; max-width:400px; margin-bottom:90px;">
										<div class="panel panel-default">
											<div class="panel-body">
												<h3 style="color: blue;">Invest Now</h3>
												<hr>
												<form id="invest_form">
													<div class="input-box">
							                            <label class="form-label">Capital in USD</label>
							                            <div class="form-group">
							                                <span class="la la-select form-icon"></span>
							                                  <select class="form-control form--control" name="plan" id="plan">
														   <option value="NonFarm1">NonFarm 1</option>
														   <option value="NonFarm2">NonFarm 2</option>
														   <option value="NonFarm3">NonFarm 3</option>
														   <option value="NonFarm4">NonFarm 4</option>
														   <option value="NonFarm5">NonFarm 5</option>
														   <option value="Exclusive">Exclusive</option>
														  
														</select>
							                            </div><!-- end form-group -->
						                        	</div><!-- end input-box -->

								                    <div class="input-box">
							                            <label class="form-label">Capital in USD</label>
							                            <div class="form-group">
							                                <span class="la la-money form-icon"></span>
							                                <input class="form-control form--control" id="capital" type="text" name="capital" placeholder="Not Less than 100USD" required onblur="checkamount()">
							                            </div><!-- end form-group -->
						                        	</div><!-- end input-box -->

									                  	
									                  	<div class="input-box">
							                            <label class="form-label">BTC Equivalent</label>
							                            <div class="form-group">
							                                <span class="la la-btc form-icon"></span>
							                                <input class="form-control form--control" name="btc" id="btc" id="btc_equiv" type="text" value="" disabled>
							                            </div><!-- end form-group -->
						                        	</div><!-- end input-box -->

									                  	
									                    <a href="" id="proceed" class="btn btn-primary">Proceed</a>
									                     <div>
									                     	<p style="color:red;" id="message"></p>
									                     </div>
					 
                    								
												</form>
											</div>
										</div>
									</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                My Referrals
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <?php
				
				

										$get = "SELECT * FROM referrals WHERE referrals = '{$referral}'";
										$result = mysqli_query($con, $get);
										$row = mysqli_num_rows($result);

									?>
				 <?php if($row != "0"): ?>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						    <thead>
						      <tr>
						      	<th>ID</th>
						        <th>Account</th>
						        <th>Name</th>
						        <th>Date</th>					         
						        
						      </tr>
						    </thead>
						    <tbody>
						    	<?php while ($a = mysqli_fetch_array($result)){ ?>
						   
						       <form>
							      	<tr>
							        <td><?php echo $a['id']; ?></td>
							        <td><?php echo $a['account']; ?> </td>		        
							        <td><?php echo $a['name']; ?></td>
							        <td><?php echo $a['ref_date']; ?></td>
							        							   
							      </tr>
						      </form>
						  <?php }?>	
						    </tbody>
 						 </table>
 						 <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<script>
	function checkamount(){
		var capital = document.getElementById('capital').value;
		var message = document.getElementById('message');
		var btc = document.getElementById('btc');
		var btn = document.getElementById('proceed');
		var plan = document.getElementById('plan').value;
		var plane;

		
		if(capital < 100){
			message.innerHTML = "Value must be from 100USD";
			btn.disabled = true;
		} else {
					//choose plan
		if(capital >= 100 && capital <=1000){
			plane = "NonFarm1";
		} else if(capital >= 1100 && capital <=3500){
			plane = "NonFarm2";
		} else if(capital >= 3600 && capital <=7500){
			plane = "NonFarm3";
		} else if(capital >= 7600 && capital <=10000){
			plane = "NonFarm4";
		} else if(capital >= 11000 && capital <=25000){
			plane = "NonFarm5";
		} else if(capital >= 30000 && capital <=100000){
			plane = "Exclusive";
		} else {
			plane = "Invalid Plan";
		}
			
			var ans = capital * 0.000057;
			btc.value = ans;
			btn.href = "https://blockchain.com/btc/payment_request?address=1MvGM1YhKpwC1TpY6CYVQ6wMVJ4QcxbEfp&amount=" +ans +"&message="+plane

		}

		if(capital.value === ""){
			message.innerHTML = "";
		}
	}
	
</script>

<?php include('footer.php'); ?>