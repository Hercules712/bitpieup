<?php 
session_start();
	$title = "Admin";
	include('header.php');
	if (!(isset($_SESSION['admin']))): header('location: login.php'); endif;

	$admin_id = $_SESSION['admin'];
	//get Admin Data
	$select = "SELECT * FROM control WHERE con_id = '{$admin_id}'";
	$result = mysqli_query($con, $select);
	$row = mysqli_num_rows($result);
		if($row == "1"){
			$data = mysqli_fetch_array($result);
			$admin = $data['admin_name'];
		}

	include('header.php');
	include('navbar.php');
?>
<body style="background:#f5f5f5;">
<div class="container">
	<div class="row">
		<div class="col-sm-12">
				<div style="margin-right:auto; margin-left:auto; max-width:350px; margin-top:30px; margin-bottom:90px;">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="text-center">
								<div class="text-center">
									<img src="../images/logo_main.png" class="img-responsive ">
								</div>
								<h2> Admin Panel!</h2>
								<p>WELCOME TO THE CONTROL PANEL, <?php echo $admin; ?>.<br>
								
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