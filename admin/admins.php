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
    $del = "DELETE FROM control WHERE con_id = '{$id}' ";
    $result = mysqli_query($con, $del);
    if($result){
    	$ok = 1;
       	$message = "Admin Delete Successful";
    } else {
          $ok = 0;
   		  $message = " Admin Failed to Delete ";
}
        
}


	if(isset($_POST['add_admin'])){
		$ok = 1;
		$message = "";
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$date = time();
		//Check if Admin Exist
		$select = "SELECT con_id FROM control WHERE email = '{$email}'";
		$query = mysqli_query($con, $select);
		$row = mysqli_num_rows($query);
			if($row == "0"){
				$insert = "INSERT INTO control (admin_name, email, password, dates)VALUES('{$name}','{$email}','{$password}','{$date}')";
				$result = mysqli_query($con, $insert);
					if($result)
						{
							$ok = 1;
							$message = "An admin has been added successfully.";
						} else {
							$ok = 0;
							$message = " Admin Failed to add.";
						}
			} else {
				$ok = 0;
				$message = " Admin Exist";
			}
	}
?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div style="margin-right:auto; margin-left:auto; max-width:350px; margin-top:30px; margin-bottom:90px;">
					<?php if($_GET['status'] == "updated"): ?>
						<div class="alert alert-success alert-dismissable" style="font-size:14px;">
						    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
					            Admin Has been Updated Successfully!
						</div> 
      				<?php endif; ?>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="text-center">
								<h2 class="text-center">Admins Panel!</h2>
								
								<p class="text-center"><strong>Add, Delete and Update Admin Data</strong></p><hr>
								<p style="color: red;" class="text-center">Make sure you create admin first before deleting the currrent one.</p>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<h2>Admin List</h2>
				<?php
				//Get all the Admins
				$get = "SELECT * FROM control";
				$result = mysqli_query($con, $get);
				$row = mysqli_num_rows($result);

				?>
				 <?php if($row != "0"): ?>
				<table class="table table-hover">
						    <thead>
						      <tr>
						      	<th>ID</th>
						        <th>Admin Name</th>
						        <th>Admin Email</th>
						        <th>Admin Password</th>
						        <th>Actions</th>			        
						      </tr>
						    </thead>
						    <tbody>
						    	<?php while ($a = mysqli_fetch_array($result)){ ?>			   
						       <form role="form" action="admins.php?id=<?php echo $a['con_id']; ?>" method="POST">
							      	<tr>
							        <td><?php echo $a['con_id']; ?></td>
							        <td><?php echo $a['admin_name']; ?> </td>
							        <td><?php echo $a['email']; ?></td>
							        <td><?php echo $a['password']; ?></td>	        
							        <td>
						        	 
	  									<button type="submit" name="del" class="btn btn-danger btn-sm"  onclick="return confirm('You are about to Delete an Admin?','');">
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

			<div class="col-sm-6">
				<div style="margin-right:auto; margin-left:auto; max-width:350px; margin-top:30px; margin-bottom:90px;">
	       <div class="panel panel-default">
	    <div class="panel-body">
		<h3 class="head text-center">Create Admin</h3>
		<hr/>
		   <p style="color:red; text-align:center;"><?php echo $message; ?></p>
				<form role="form" method="POST" action="admins.php" id="login">
					<div class="form-group">
					 <div class="input-group"> 
					    <span class="input-group-addon"><i class="fa fa-user"></i></span>
					   <input name="name" type="text" class="form-control form_element" placeholder="Admin Name" required> 
					 </div>  

                    </div>
				   
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
					<input type="submit" name="add_admin" class="btn btn-green btn-success btn-block auth_button" value="Create">
				</form>	
				<hr/>		  		  
		</div> 
	  </div>
   </div>		
			</div>
		</div>
	</div>

<?php
	include('footer.php');
	
?>