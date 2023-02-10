<?php 
// include 'init.php'; 
include('include/header.php');
include('include/connection.php');

?>
<title>Support Ticket System with PHP & MySQL</title>>
<?php include('include/container.php');?>
<div class="container">	
	<div class="row home-sections">
	<h2>Support Ticket System</h2>	
	<?php include('menu.php'); ?>		
	</div> 
	<div class="">   		
		<p>View and manage tickets that may have responses from support team.</p>	

		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="createModal" class="btn btn-success btn-xs">Create Ticket</button>
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
					<td>there some issues</td>
					<td>i d k</td>
					<td><span class="label label-success">Open</span></td>
					<td><a href="#" class="btn btn-success btn-xs update">View Ticket</a></td>
					<td><button type="button" name="update" id="" class="btn btn-warning btn-xs update">Edit</button></td>
					<td><button type="button" name="delete" id="" class="btn btn-danger btn-xs delete">Close</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php include('add-ticket.php'); ?>	
</div>	
<?php include('include/footer.php');?>