<?php session_start(); $title="Reset Password"; 
      include('../db.php'); 
	  
	  if (isset($_SESSION['cauth'])): header('location: index');   endif;
	  include('../header.php'); ?>
<?php 
//Recover Password Start

    if ( isset($_POST['reset_submit']) && !empty($_POST['email'])){
	    
		$emailcheck = mysql_query("SELECT user_id, email FROM user WHERE (email = '".mysql_real_escape_string($_POST['email'])."')");

	       if (mysql_num_rows($emailcheck) == 1){
                
				$user = mysql_fetch_array($emailcheck);

                //Capture the User_id and Save and Generate Random Code
                $randomNumber = rand(0, 99999);
				
				$randomNumber = "1-".$randomNumber;

			    $to  = $user['email'];
			    $resetlink = $site."session/reset?email=sent&code=".$randomNumber."&datagen=".time();
                $subject = ' Account Reset';
                $message = "<p>You have requested for a password reset process, to reset your password, kindly click on the link below</p>.
							  <p><a href='".$resetlink."'>".$resetlink."</a></p> 
							  <p>If this action was not from you, kindly ignore this message, the integrity of your account is still safe.</p>
							  <p>Thank You.</p>
							  <p>".$site_name."</p>";
							  
                              $headers = 'From: '.$site_name.' <'.$admin_email.'>' . "\r\n" .
                              'Reply-To:'. $admin_email . "\r\n" .
							  'Content-type: text/html; charset=iso-8859-1' . "\r\n".
                              'X-Mailer: PHP/' . phpversion();
                                							  
			    mail($to, $subject, $message, $headers);
			
		        $success_sent = 1;       
	         
			} else {
			  // User Data not found 
			   $status = "not";
			}	
	}		
	
	
    //For change of password (proper)
	
		if  ((isset($_POST['pass_submit'])) && (!empty($_POST['pass']))){
	  
	     if (isset($_POST['user']) ){
	       
		   //Update Password
		   
		   $change = mysql_query("UPDATE user SET pass = '".md5($_POST['pass'])."' WHERE user_id = '".$_POST['user']."' ");
	   
	       if($change):
		     header('location:login?reset=ok');
		   endif;

    	}	
	}
?>	



<body style="background:#f5f5f5;">
   
   <div style="margin-right:auto; margin-left:auto; max-width:350px; margin-top:30px; margin-bottom:90px;">
      
<?php if(!isset($_GET['code'])): ?>	  

       
	  <?php if($success_sent == "1"): ?>
		<div class="alert alert-success alert-dismissable" style="font-size:14px;">
		    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
	            Check your email, a reset email has been sent
		</div> 
      <?php endif; ?>	 
	  
	  <?php if($status == "not"): ?>
				<div class="alert alert-success">
					This Email is not associated with any account
		        </div> 
      
	   <?php endif; ?>	

      <div class="panel panel-default">

	    <div class="panel-body">
		<h3 class="head text-center">PASSWORD RESET</h3>
		<hr/>
		  
		   <p style="color:red; text-align:center;"><?php echo $error; ?></p>
				<form role="form" method="POST" action="reset" id="login">
				    <div id="error_msg" style="color:red; display:none;font-size: 14px; margin-bottom:5px; text-align:center;">Wrong Authentication Data</div>
					<div class="form-group">
					  <div class="input-group"> 
					    <span class="input-group-addon"><i class="fa fa-user"></i></span>
					    <input name="email" type="email" class="form-control form_element" placeholder="Email Address" required>
                      </div>						
					 
                    </div>
						  
					
					<hr/>
					<input type="submit" name="reset_submit" class="btn btn-green btn-success btn-block auth_button" value="Reset Password">
				</form>	
				<hr/>
						  <div style="font-size:14px;">
						     <a class="pull-right" href="signup.php">Not a Member yet ?</a>
						     <a class="pull-left" href="login.php">Already Member</a>
						  </div>
						  		  
		</div> 
	  </div>
<?php elseif(($_GET['email']=='sent') && (isset($_GET['code']))): ?>	  
	  
	  
	  <?php
	    //Grab the necessary data
		$data = explode('-', $_GET['code']);
		$reset_user = $data[0];
	  ?>
	  
      <div class="panel panel-default">

	    <div class="panel-body">
		<h3 class="head">PASSWORD RESET</h3>
		<hr/>
		  
		   <p style="color:red; text-align:center;"><?php echo $error; ?></p>
				<form role="form" method="POST" action="reset">
				  
				  <div class="form-group">
					 <div class="input-group"> 
					    <span class="input-group-addon"><i class="fa fa-key"></i></span>
					   <input name="pass" type="password" class="form-control form_element" id="pass1"  placeholder="Enter New Password" required> 
					 </div>  
					  
                    </div>
					
						  
					<div class="form-group">
					 <div class="input-group"> 
					    <span class="input-group-addon"><i class="fa fa-key"></i></span>
					    <input name="cpassword" type="password" class="form-control form_element" onkeyup="checkPass(); return false;" id="pass2" placeholder="Confirm New Password" required> 
					   
					 </div>  
					  <span class="help-block" id="confirmMessage" class="confirmMessage"></span>
                    </div>
						  
					<input type="hidden" value="<?php echo $reset_user; ?>" name="user"/>
					<hr/>
					<input type="submit" name="pass_submit" class="btn btn-green btn-success btn-block auth_button" value="Reset Password">
				</form>	
				
		</div> 
	  </div>

<?php endif; ?>	  
      
   </div>

</body>


 <?php include('../footer.php'); ?>
 <script type="text/javascript">
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        //pass2.style.backgroundColor = goodColor;
		pass2.style.borderColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.borderColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}    
  </script>
  