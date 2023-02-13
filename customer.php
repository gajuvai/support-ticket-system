<?php 
include('include/header.php');
include('include/connection.php');
?>
<script src="assets/js/main.js"></script>

<!-- add customer modal -->
		<div id="addcustomermodal" class="modal fade">
			<div class="modal-dialog">
				<form method="post" action="manage-customer.php">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><i class="fa fa-plus"></i> Add Customer</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="subject" class="control-label">Name</label>
								<input type="text" class="form-control" id="name" name="customername" placeholder="Subject" required>			
							</div>						
							<div class="form-group">
								<label for="message" class="control-label">Email</label>							
								<input type="email" class="form-control" id="email" name="customeremail" placeholder="Subject" required>							
							</div>
							<div class="form-group">
								<label for="subject" class="control-label">Phone Number</label>
								<input type="number" class="form-control" id="phone_no" name="customerphone" placeholder="Subject" required>			
							</div>	
							<div class="form-group">
								<label for="subject" class="control-label">Pan Number</label>
								<input type="number" class="form-control" id="pan_no" name="pan_no" placeholder="Subject" required>			
							</div>
						</div>
						<div class="modal-footer">
							<input type="submit" name="insertcustomer" class="btn btn-info" value="Save" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div>
<!-- end add customar modal  -->
<!-- edit user modal -->
		<div id="editcustomermodal" class="modal fade">
			<div class="modal-dialog">
				<form method="post" action="manage-customer.php">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Customer</h4>
						</div>
						<div class="modal-body">
							<input type="hidden" name="customerid" id="edit_customerid">

							<div class="form-group">
								<label for="subject" class="control-label">Name</label>
								<input type="text" class="form-control" id="edit_customername" name="customername" placeholder="Subject" required>			
							</div>						
							<div class="form-group">
								<label for="message" class="control-label">Email</label>							
								<input type="email" class="form-control" id="edit_customeremail" name="customeremail" placeholder="Subject" required>							
							</div>
							<div class="form-group">
								<label for="subject" class="control-label">Phone Number</label>
								<input type="text" class="form-control" id="edit_phone_no" name="customerphone" placeholder="Subject" required>			
							</div>	
							<div class="form-group">
								<label for="subject" class="control-label">Pan Number</label>
								<input type="text" class="form-control" id="edit_pan_no" name="pan_no" placeholder="Subject" required>			
							</div>
						</div>
						<div class="modal-footer">
							<input type="submit" name="editcustomer" class="btn btn-info" value="Update" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div>
<!-- end edit customar modal  -->
<!-- delete customer modal  -->
	<div id="deletecustomermodal" class="modal fade">
		<div class="modal-dialog">

			<form action="manage-user.php" method="POST">
			    <div class="modal-content">
					<div class="modal-body">
						<input type="hidden" name="delete_id" id="delete_cid">
						<h4> Do you want to Delete this Data ??</h4>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
						<button type="submit" name="delete_customer_data" class="btn btn-primary"> Yes !! Delete it. </button>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- end delete customer modal  -->

<title>Support Ticket System with PHP & MySQL</title>
<?php include('include/container.php');?>
<div class="container">	
	<div class="row home-sections">
	<h2>Support Ticket System</h2>	
	<?php include('menu.php'); ?>		
	</div> 
	<div class="">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-12" align="right">
					<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#addcustomermodal">Add Customer</button>
				</div>
			</div>
		</div>
		<table id="listTickets" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>S/N</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th></th>					
				</tr>
			</thead>

			<!-- // displying user on dashboard  -->
			<?php $query = "SELECT * FROM `ss_customer`";
			$query_run = mysqli_query($conn, $query);
			$sn = 1;
			if($query_run)
			{
				foreach($query_run as $row)
				{
			?>
					<tbody>
						<tr>
							<td style="display:none;" class="customerId"> <?php echo $row['cid'];?> </td>
							<td><?php echo $sn?></td>
							<td> <?php echo $row['c_name']; ?> </td>
							<td> <?php echo $row['c_email']; ?> </td>
							<td> <?php echo $row['c_phone']; ?> </td>
							<td style="display:none;"> <?php echo $row['pan_no']; ?> </td>
							<td>
								<button type="button" class="btn btn-info btn-xs editcustomerbtn">Edit</button>
								<button type="button" class="btn btn-danger btn-xs deletecustomerbtn">Delete</button>
							</td>
						</tr>
					<?php  
					$sn++;         
				}
			if($sn==1){ ?>
				<tr><td colspan="5">No Such a user available.</td></tr>
			<?php }}
			?>
		</table>
	</div>
</div>	
<?php include('include/footer.php');?>