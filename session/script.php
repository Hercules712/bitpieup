<?php 
session_start();
include('../db.php'); 
     
//THIS IS THE LOGIN SCRIPT

		if(isset($_POST['login_submit'])){

			$ok = 1;
		    $error_msg = "";
	
		    $email = mysqli_real_escape_string($con, $_POST['email']);
		    $password = mysqli_real_escape_string($con, $_POST['password']);	
	  //check if user exists
			$select = "SELECT user_id FROM members WHERE email = '{$email}' AND password = '{$password}' ";
			$result = mysqli_query($con, $select);
			$row = mysqli_num_rows($result);
				if($row == "1"){
						$user = "SELECT * FROM members WHERE email = '{$email}'";
						$result = mysqli_query($con, $user);
						if($result){
							$userdata = mysqli_fetch_array($result);
							$_SESSION['user'] = $userdata['user_id'];
							header('location: ../dashboard/index.php');					
					} 
		      
		 		} else {
		 			  $error_msg = "Wrong Authentication Data";
					   header('location: login.php?stat=fail');	
		 		}
		}

//SCRIPT FOR SIGN UP

		if (isset($_POST['signup_submit'])){

			 $ok = 1;
			$error_msg = "";
		
			//SANITIZE YOUR DATA

			$name = mysqli_real_escape_string($con, $_POST['name']);
			$email = mysqli_real_escape_string($con, $_POST['email']);		
			$acc_no = mysqli_real_escape_string($con, $_POST['acc_no']);
			$bank_name = mysqli_real_escape_string($con, $_POST['bank_name']);		
			$password = mysqli_real_escape_string($con, $_POST['password']);
			$account = rand();
			$myref = $_POST['ref'];
			$referral_link = $site ."session/register.php?ref=".$account;
			
			$date = date('m-d-y',time());
			$balance = '00.00';

			//CHECK IF USER EXIST

			$check = "SELECT user_id FROM members WHERE email = '{$email}'";
			$result = mysqli_query($con, $check);
			$row = mysqli_num_rows($result);
				if($row == "0"){

					$insert = "INSERT INTO members(name,email, password, account, referral, acc_no, bank_name, reg_date)VALUES('{$name}','{$email}','{$password}','{$account}','{$referral_link}','{$acc_no}','{$bank_name}','{$date}')";
					$result = mysqli_query($con, $insert);
						if($result){

							//SET SESSION DATA
								$check = "SELECT * FROM members WHERE email = '{$email}'";
								$result = mysqli_query($con, $check);						
								$userdata = mysqli_fetch_array($result);
								$_SESSION['user'] = $userdata['user_id'];

							$insert2 = "INSERT INTO wallet(account,name,balance,d_date)VALUES('{$account}','{$name}','{$balance}','{$date}')";
							$query = mysqli_query($con, $insert2);
								if($query){
									//PUT INTO THE REFERRAL TABLE
									if($myref != ""){
										$put = "INSERT INTO referrals(account,name, referrals, ref_date)VALUES('{$account}', '{$name}', '{$myref}','{$date}')";
										$result = mysqli_query($con, $put);
									}

									

								//SEND MAIL TO ADMIN EMAIL
								$from = 'info@bitpileup.com';  //enter your email address
								$to = 'Possibilitythegreat@yahoo.com'; //enter the email address of the contact your sending to
								$subject = "New Registration."; // subject of your email
								$msg = "Dear Admin," ."\r\n";
								$msg .= "We want to inform you that a new registration by ".$name ." has been confirmed and details are as follows:" ."\r\n";
								$msg .= "************************************<br>"."\r\n";
								$msg .= "Account: " .$account ."\r\n"; 
								$msg .= "Account Name: " .$account_name ."\r\n" ;
								$msg .= "Email: " .$email ."\r\n";
								$msg .= "Address: " .$address ."\r\n";
								$msg .= "<".$site_name.">";

								$headers = 'From: '.$site_name.' <'.$from.'>' . "\r\n" .
					              'Reply-To:'. $from . "\r\n".
								  'Content-type: text/html; charset=iso-8859-1' . "\r\n".
					              'X-Mailer: PHP/' . phpversion();
					                                							  
								mail($to, $subject, $msg, $headers);

								header('location: ../dashboard/index.php');
								
						} else {
							$ok = 0;
							$error_msg = "Registration Failed";
							header('location: register.php?reg=failed');
						}

				} else {
					$ok = 1;
					$error_msg = "User already Exist";
					header('location: register.php?reg=exist');
				}
			}



		}//End of Button Pressed

    
   

    
?>