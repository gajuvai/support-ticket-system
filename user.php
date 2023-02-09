<?php 
include('include/header.php');
?>
<title>Support Ticket System with PHP & MySQL</title>
<?php include('include/container.php');?>
<div class="container">	
	<div class="row home-sections">
	<h2>Support Ticket System</h2>	
	<?php include('menu.php'); ?>		
	</div> 
	
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-10">
				<h3 class="panel-title"></h3>
			</div>
			<div class="col-md-2" align="right">
				<button type="button" name="add" id="addUser" class="btn btn-success btn-xs">Add New</button>
			</div>
		</div>
	</div>
			
	<table id="listUser" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>S/N</th>
				<th>Name</th>					
				<th>Email</th>
				<th>Created</th>
				<th>Role</th>
				<th>Status</th>
				<th></th>
				<th></th>				
			</tr>
		</thead>
	</table>
	
</div>	
<?php include('include/footer.php');?>