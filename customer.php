<?php 
// include 'init.php'; 
include('include/header.php');
?>
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
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="addCustomer" id="createModal" class="btn btn-success btn-xs">Create Customer</button>
				</div>
			</div>
		</div>
		<table id="listTickets" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>S/N</th>
					<th>Name</th>
					<th>Description</th>
					<th>Status</th>
					<th></th>
					<th></th>
					<th></th>					
				</tr>
			</thead>
			<tbody>
			 <tr>
					<td>1</td>
					<td>Rabin</td>
					<td>CEO</td>
					<td><span class="label label-success">Active</span></td>
					<td><button class="btn btn-primary  btn-xs">Contact</button>&nbsp;
					<td><button type="button" name="update" id="" class="btn btn-warning btn-xs update">Edit</button></td>
				    <td><button type="button" name="update" id="" class="btn btn-danger btn-xs delete">Delete</button></td>	
					</td>					
				</tr>
			</tbody>
		</table>
	</div>

	<!-- add user modal -->
	<div id="Modal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="modalForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Add Customer</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="subject" class="control-label">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Subject" required>			
					</div>						
					<div class="form-group">
						<label for="message" class="control-label">Email</label>							
						<input type="email" class="form-control" id="email" name="email" placeholder="Subject" required>							
					</div>
                    <div class="form-group">
						<label for="subject" class="control-label">Phone Number</label>
						<input type="number" class="form-control" id="phone_no" name="phone_no" placeholder="Subject" required>			
					</div>	
					<div class="form-group">
						<label for="subject" class="control-label">Pan Number</label>
						<input type="number" class="form-control" id="pan_no" name="pan_no" placeholder="Subject" required>			
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="customerId" id="customerId" />
					<input type="hidden" name="action" id="action" value="" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
	</div>
</div>	
<?php include('include/footer.php');?>