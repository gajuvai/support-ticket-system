<?php 
include('include/header.php');
include('include/connection.php');
?>
<script src="assets/js/main.js"></script>

<!-- add user modal  -->
	<div id="addusermodal" class="modal fade">
		<div class="modal-dialog">
    		<form action="manage-user.php" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add User</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="username" class="control-label">Name*</label>
							<input type="text" class="form-control" name="userName" placeholder="User name" required>			
						</div>
						
						<div class="form-group">
							<label for="email" class="control-label">Email*</label>
							<input type="email" class="form-control" name="email" placeholder="Email" required>			
						</div>
						
						<div class="form-group">
							<label for="status" class="control-label">Role</label>				
							<select name="role" class="form-control">
							<option value="SuperAdmin">SuperAdmin</option>				
							<option value="GeneralUse">GeneralUser</option>	
							</select>						
						</div>	

						<div class="form-group">
							<label for="username" class="control-label">New Password</label>
							<input type="password" class="form-control" name="newPassword" placeholder="Password">			
						</div>											
						
					</div>
					<div class="modal-footer">
						<input type="submit" name="insertuser" class="btn btn-info" value="Save" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- end add user data  -->
<!-- edit user modal  -->
	<div id="editusermodal" class="modal fade">
		<div class="modal-dialog">
    		<form action="manage-user.php" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
					</div>
					<div class="modal-body">
					    <input type="hidden" name="userid" id="edit_userid">

						<div class="form-group">
							<label for="username" class="control-label">Name*</label>
							<input type="text" class="form-control" id="edit_userName" name="userName" placeholder="User name" required>			
						</div>
						
						<div class="form-group">
							<label for="email" class="control-label">Email*</label>
							<input type="email" class="form-control" id="edit_email" name="email" placeholder="Email" required>			
						</div>
						
							<div class="form-group">
								<label for="status" class="control-label">Role</label>				
								<select name="role" id="edit_role" class="form-control">

								<?php if($_SESSION["usertype"] == 'SuperAdmin'){
									echo "<option  value='SuperAdmin'>SuperAdmin</option>";}?>		
								<option  value="GeneralUser">GeneralUser</option>	
								</select>						
							</div>	
						
						<div class="form-group">
							<label for="status" class="control-label">Status</label>				
							<select id="edit_status" name="status" class="form-control">
							<option value="Active">Active</option>

							<?php if($_SESSION["usertype"] == 'SuperAdmin'){				
							echo"<option value='Deactive'>Deactive</option>";	}?>
							</select>						
						</div>

						<?php if($_SESSION["usertype"] == 'GeneralUser'){
						echo "<div class='form-group'>
							<label for='username' class='control-label'>New Password</label>
							<input type='password' class='form-control' id='newPassword' name='newPassword' placeholder='Password' required>			
						</div>";}?>
						
					</div>
					<div class="modal-footer">
						<input type="submit" name="edittuser" class="btn btn-info" value="Update" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- end edit user data  -->
<!-- delete user modal  -->
   <div id="deleteusermodal" class="modal fade">
		<div class="modal-dialog">

			<form action="manage-user.php" method="POST">
			    <div class="modal-content">
					<div class="modal-body">
						<input type="hidden" name="delete_id" id="delete_id">
						<h4> Do you want to Delete this Data ??</h4>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
						<button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- end delete user modal  -->

<title>Support Ticket System with PHP & MySQL</title>
<?php include('include/container.php');?>
<div class="container">	
	<div class="row home-sections">
	<h2>Support Ticket System</h2>	
	<?php include('menu.php'); ?>		
	</div> 
	<?php if($_SESSION["usertype"] == 'SuperAdmin'){
	echo "<div class='panel-heading'>
		<div class='row'>
			
			<div class='col-md-12' align='right'>
				<button type='button' class='btn btn-success btn-xs' data-toggle='modal' data-target='#addusermodal'>Add User</button>
			</div>
		</div>
	</div>";
	}?>
			
	<table id="listUser" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>					
				<th>Email</th>
				<th>Role</th>
				<th>Status</th>
				<th></th>				
			</tr>
		</thead>

		<!-- // displying user on dashboard  -->
		<?php
		if($_SESSION["usertype"] == 'SuperAdmin'){
			$query = "SELECT * FROM `ss_users`";
		}else{
			$name = $_SESSION["name"];
			$query = "SELECT * FROM `ss_users` WHERE `username`='$name'";
		}
		$query_run = mysqli_query($conn, $query);
		$sn = 1;
		if($query_run)
		{
			foreach($query_run as $row)
			{
		?> 
				<tbody>
					<tr>
						<td style="display:none;" class="userId"> <?php echo $row['user_id'];?> </td>
						<td><?php echo $sn?></td>
						<td> <?php echo $row['username']; ?> </td>
						<td> <?php echo $row['user_email']; ?> </td>
						<td> <?php echo $row['user_role']; ?> </td>
						<td> <?php if($row['user_status'] == 'Active'){echo "<span class='label label-success'>Active</span>";}else{echo "<span class='label label-danger'>Deactive</span>";} ?> </td>
						<td>
							<button type="button" class="btn btn-info btn-xs edituserbtn">Edit</button>
							<button type="button" class="btn btn-danger btn-xs deleteuserbtn" <?php if($_SESSION["usertype"] == 'GeneralUser'){echo "disabled";}?>>Delete</button>
						</td>
					</tr>
				<?php  
				$sn++;         
			}
		}
		
		if($sn == 1){ ?>
			<tr><td colspan="7">No Such a user available.</td></tr>
		<?php }
		?>
       </tbody>
	</table>

</div>
<?php include('include/footer.php');?>

