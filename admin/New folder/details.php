<?php
session_start();
	$title = "Admin";
	if (!(isset($_SESSION['admin']))): header('location: login.php'); endif;
	include('header.php');
	include('navbar.php');

	$id = $_GET['id'];

	$get = "SELECT * FROM members WHERE user_id = '{$id}'";
	$result = mysqli_query($con, $get);
	$row = mysqli_num_rows($result);
		if($row == '1'){
			$data = mysqli_fetch_array($result);
			//Get All Data
			$name = $data['name'];
			
			$email = $data['email'];
			$password = $data['password'];
			$bank_name = $data['bank_name'];
			$acc_no = $data['acc_no'];
			$account = $data['account'];
			$date = $data['reg_date'];
		}
	

	
	if(isset($_POST['invest_btn'])){
		$ok = 1;
		$message = "";

		//Get Data Input and sanitize
		$invest_amount = mysqli_real_escape_string($con, $_POST['invest']);
		$invest_balance = mysqli_real_escape_string($con, $_POST['balance']);
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$account = mysqli_real_escape_string($con, $_POST['account']);
		$date = date('d-m-y',time());
		//Put Data into Investment table
		$insert = "INSERT INTO investment(account, name, amount, balance, d_date)VALUES('{$account}','{$name}','{$invest_amount}','{$invest_balance}','{$date}')";
		$query = mysqli_query($con, $insert);
			if($query){
					$ok = 1;
					//$message = $name." Investment Added Successfully";
					header('location: members.php?invest=success');
				} else {
					$ok = 0;
					//$message = $name." Investment Not Unsuccessfully Added";
					header('location: members.php?invest=fail');
				}

	}

	if(isset($_POST['wallet_btn'])){
		$ok = 1;
		$message = "";
		//Get Data Input and sanitize
		$amount = mysqli_real_escape_string($con, $_POST['wallet_amount']);
		$account = mysqli_real_escape_string($con, $_POST['account']);
		$id = $_POST['id'];
		$date = date('d-m-y',time());
		//update into database
		$update = "UPDATE wallet SET balance = '{$wallet_amount}' WHERE account = '{$account}'";
		$query = mysqli_query($con, $update);
			if($query){
				$ok = 1;
				//$SESSION['message'] = $name." Wallet Update Successful";
				header('location: members.php?wallet=success');

			} else {
				$ok = 0;
				//$message = $name." Wallet Update Unsuccessful";
				header('location: members.php?wallet=fail');
			}

	}

	
?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div style="margin-right:auto; margin-left:auto; max-width:350px; margin-top:30px; margin-bottom:90px;">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="text-center">
								<h2>Member Details</h2><hr>
								
								<p style="color:red; text-align:center;">
									<?php 
										if(isset($_SESSION['message'])){
											echo $_SESSION['message'];
										}
									 ?>
										
									</p>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div style="margin-top: 10px">
					<h3>Member Details</h3>
					<h4>Name: <?php echo $name; ?></h4><hr>
					
					<h4>Email: <?php echo $email; ?></h4><hr>
					<h4>Password: <?php echo $password; ?></h4><hr>
					<h4>Account: <?php echo $account; ?></h4><hr>
					<h4>Reg_date: <?php echo $date;?></h4><hr>
					<h4>Password: <?php echo $password; ?></h4><hr>

					<h3>Member Investment Details</h3>
					<?php
				

				$get = "SELECT * FROM investment WHERE account = '{$account}'";
				$result = mysqli_query($con, $get);
				$row = mysqli_num_rows($result);

				?>
				 <?php if($row != "0"): ?>
				<table class="table table-hover">
						    <thead>
						      <tr>
						      	
						        <th>Account</th>
						        <th>Name</th>
						        <th>Amount</th>
						        <th>Balance</th>
						        <th>Date</th>
						        <th>Actions</th>
						        
						      </tr>
						    </thead>
						    <tbody>
						    	<?php while ($a = mysqli_fetch_array($result)){ ?>
						   
						       <form role="form" action="details.php?id=<?php echo $a['invest_id']; ?>" method="POST">
							      	<tr>
								        <td><?php echo $a['account']; ?> </td>
								        <td><?php echo $a['name']; ?> </td>
								        <td><?php echo $a['amount']; ?></td>
								        <td><?php echo $a['balance']; ?></td>
								        <td><?php echo date('d-m-y',$a['d_date']); ?></td>
								        <td>

							        	

	  									<button type="submit" name="del"class="btn btn-danger btn-sm"  onclick="return confirm('You are about to Delete an Investment?','');">
				    								<i class="glyphicon glyphicon-trash"></i>
				  									</button>
	  								</td>
							      </tr>
						      </form>
						  <?php }?>	
						    </tbody>
 						 </table>
 						 <?php endif; ?>

				</div>
			</div>

			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-6">
						<div style="margin-right:auto; margin-left:auto; max-width:350px; margin-top:30px; margin-bottom:90px;">  
	    
						      <div class="panel panel-default">
							    <div class="panel-body">
								<h3 class="head text-center">Credit Wallet</h3>	
								<hr/>	  
								   <p style="color:red; text-align:center;">
								   	<?php if(isset($error_msg )){echo $error_msg; }?>
								   		
								   	</p>
								   
										<form role="form" method="POST" action="details.php" >
										    <p class="text-center" style="font-size: 14px;">Use the Decimal Format: 0.00</p>
											<div class="form-group">
											  <div class="input-group"> 
											    <span class="input-group-addon"><i class="fa fa-money"></i></span>
											    <input name="wallet_amount" type="text" class="form-control form_element" placeholder="Enter Amount" required>
						                      </div>						
											 
						                    </div>
												  <input type="hidden" name="account" value="<?php echo $account; ?>"> 
												  <input type="hidden" name="id" value="<?php echo $id; ?>"> 
										
											<hr/>
											<input type="submit" name="wallet_btn" class="btn btn-green btn-success btn-block auth_button" value="Credit Wallet">
										</form>	
										<hr/>
												  				  		  
								</div> 
							  </div>   
   </div>
					</div>


					<div class="col-sm-6">
						<div style="margin-right:auto; margin-left:auto; max-width:350px; margin-top:30px; margin-bottom:90px;">  
	    
						      <div class="panel panel-default">
							    <div class="panel-body">
								<h3 class="head text-center">Credit Investment</h3>	
								<p class="text-center" style="font-size: 14px;">Use the Decimal Format: 0.00</p>
								<hr/>	  
								   <p style="color:red; text-align:center;"><?php if(isset($error_msg )){echo $error_msg; }?></p>
										<form role="form" method="POST" action="details.php" >
										    
											<div class="form-group">
											  <div class="input-group"> 
											    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
											    <input name="invest" type="text" class="form-control form_element" placeholder="Enter Investment Amount" required>
						                      </div>						
											 
						                    </div>

						                    <div class="form-group">
											  <div class="input-group"> 
											    <span class="input-group-addon"><i class="fa fa-plus"></i></span>
											    <input name="balance" type="text" class="form-control form_element" placeholder="Enter Balance" required>
						                      </div>						
											 
						                    </div>
						                    <input type="hidden" name="name" value="<?php echo $name; ?>">
						                     <input type="hidden" name="account" value="<?php echo $account; ?>">
												  
											
											<hr/>
											<input type="submit" name="invest_btn" class="btn btn-green btn-success btn-block auth_button" value="Credit Investment">
										</form>	
										<hr/>
												  				  		  
								</div> 
							  </div>   
   </div>
					</div>
				</div>
			</div>
		</div>

		
	</div>
<?php
	include('footer.php');
	
?>