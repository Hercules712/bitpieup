<?php 
session_start();
    $title="Member Login";
       include('../db.php'); 
    	include('header.php');
  

     	if(isset($_POST['login_submit'])){

     		   $ok = 1;
			   $error_msg = "";
		 //Sanitize Data
		  $email = mysqli_real_escape_string($con, $_POST['email']);
		  $password = mysqli_real_escape_string($con, $_POST['password']);	
		  //check if user exists
		$select = "SELECT con_id FROM control WHERE email = '{$email}' AND password = '{$password}' ";
		$result = mysqli_query($con, $select);
		$row = mysqli_num_rows($result);
			if($row == "1"){
					
					$get = "SELECT * FROM control WHERE email = '{$email}' AND password = '{$password}' ";
					$query = mysqli_query($con, $get);
					$a = mysqli_fetch_array($query);
					$_SESSION['admin'] = $a['con_id'];
					header('location: index.php');	
				} else {
					header('location: ../index.php');
				}
			} else {
				$ok = 0;
			   $error_msg = "Wrong Authentication Data";
			}
     

?>

<body style="background:#f5f5f5;">
   <div style="margin-right:auto; margin-left:auto; max-width:350px; margin-top:30px; margin-bottom:90px;">  
	  <?php if(isset($_GET['status']) && $_GET['status'] == "logged_out"): ?>
		<div class="alert alert-success alert-dismissable" style="font-size:14px;">
		    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
	            You Have Been Successfully Logged Out
		</div> 
      <?php endif; ?>	  
      <div class="panel panel-default">
	    <div class="panel-body">
		<h3 class="head text-center">ADMIN LOGIN</h3>	
		<hr/>	  
		   <p style="color:red; text-align:center;"><?php echo $error_msg; ?></p>
				<form role="form" method="POST" action="login.php" id="login">
				    <div id="error_msg" style="color:red; display:none;font-size: 14px; margin-bottom:5px; text-align:center;">Wrong Authentication Data</div>
					<div class="form-group">
					  <div class="input-group"> 
					    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					    <input name="email" type="email" class="form-control form_element" placeholder="Admin Email Address" required>
                      </div>						
					 
                    </div>
						  
						  
					<div class="form-group">
					 <div class="input-group"> 
					    <span class="input-group-addon"><i class="fa fa-key"></i></span>
					   <input name="password" type="password" class="form-control form_element" placeholder="Admin Password" required> 
					 </div>  

                    </div>
					
					<hr/>
					<input type="submit" name="login_submit" class="btn btn-green btn-success btn-block auth_button" value="Login">
				</form>	
				<hr/>
						  <div style="font-size:14px;">
						     
						     <a class="pull-left" href="reset.php">Forgot Password</a>
						  </div>					  		  
		</div> 
	  </div>   
   </div>
</body>

<?php include('footer.php'); ?>
 