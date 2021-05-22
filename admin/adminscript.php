<?php
session_start();
include('../db.php');

//UPDATE WALLET
if(isset($_POST['wallet_btn'])){
		$ok = 1;
		$message = "";
		//Get Data Input and sanitize
		$amount = mysqli_real_escape_string($con, $_POST['wallet']);
		$account = mysqli_real_escape_string($con, $_POST['account']);
		$id = $_POST['id'];
		//update into database
		$update = "UPDATE wallet SET balance = '{$amount}' WHERE account = '{$account}'";
		$query = mysqli_query($con, $update);
			if($query){
				$ok = 1;
				$SESSION['message'] = $name." Wallet Update Successful";
				header('location: details.php?id='.$id);

			} else {
				$ok = 0;
				$message = $name." Wallet Update Unsuccessful";
			}

	}




?>