<?php
session_start();
	$title = "Admin";
	include('header.php');
	if (!(isset($_SESSION['admin']))): header('location: login.php'); endif;
	include('navbar.php');

	if(isset($_POST['del']) ){
   	$ok = 1;
    $message = "";
    $id = $_GET['id'];

    $del = "DELETE FROM members WHERE user_id = '{$id}' ";
    $result = mysqli_query($con, $del);
    if($result){
    	$ok = 1;
       	$message = "Member Deleted Successful";
        
    } else {
    
          $ok = 0;
   		  $message = "Member Failed to Delete!";
}
        
}
?>
<body style="background:#f5f5f5;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div style="margin-right:auto; margin-left:auto; max-width:350px; margin-top:30px; margin-bottom:90px;">
					<?php
						if(isset($_GET['invest']) && $_GET['invest'] == 'success'){
					?>
					<div class="alert alert-success alert-dismissible">
  						<button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Success!</strong> Investment was added!
					</div>
				<?php } ?>

				<?php
						if(isset($_GET['invest']) && $_GET['invest'] == 'failed'){
					?>
					<div class="alert alert-danger alert-dismissible">
  						<button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Success!</strong> Investment was not added!
					</div>
				<?php } ?>


				<?php
						if(isset($_GET['wallet']) && $_GET['wallet'] == 'success'){
					?>
					<div class="alert alert-success alert-dismissible">
  						<button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Success!</strong> Wallet was Credited Successfully!
					</div>
				<?php } ?>

				<?php
						if(isset($_GET['wallet']) && $_GET['wallet'] == 'failed'){
					?>
					<div class="alert alert-danger alert-dismissible">
  						<button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Success!</strong> Wallet was not credited!
					</div>
				<?php } ?>



				<?php
						if(isset($ok) && $ok == 1){
					?>
					<div class="alert alert-success alert-dismissible">
  						<button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Success!</strong> <?php echo $message; ?>
					</div>
				<?php } ?>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="text-center">
								<h2>Members Panel!</h2>
								<p>Welcome to the Admin Panel.<br>
								Please Be careful over here</p>				
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<?php
				
				$get = "SELECT * FROM members";
				$result = mysqli_query($con, $get);
				$row = mysqli_num_rows($result);

				?>
				 <?php if($row != "0"): ?>
				<table class="table table-hover">
						    <thead>
						      <tr>
						      	<th>ID</th>
						        <th>Name</th>
						        <th>Email</th>
						        <th>Account</th>
						         <th>Date</th>
						        <th>Actions</th>
						        
						      </tr>
						    </thead>
						    <tbody>
						    	<?php while ($a = mysqli_fetch_array($result)){ ?>
						   
						       <form role="form" action="members.php?id=<?php echo $a['user_id']; ?>" method="POST">
							      	<tr>
							        <td><?php echo $a['user_id']; ?></td>
							        <td><?php echo $a['name']; ?> </td>
							        <td><?php echo $a['email']; ?></td>
							        <td><?php echo $a['account']; ?></td>
							        <td><?php echo $a['reg_date']; ?></td>
							        <td>

							        	<a href="details.php?id=<?php echo $a['user_id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i> </a> 

	  									<button type="submit" name="del"class="btn btn-danger btn-sm"  onclick="return confirm('You are about to Delete an Member?','');">
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
	</div>

<?php
	include('footer.php');
	
?>