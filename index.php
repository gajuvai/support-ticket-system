<?php  
session_start();
include('include/header.php');
if(isset($_SESSION["userid"])){
    	
}else{
    header("location: login.php");
}
?>
<title>Support Ticket System with PHP & MySQL</title>
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
					<button type="button" name="add" id="createTicket" class="btn btn-success btn-xs">Create Ticket</button>
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
		</table>
	</div>
	<!-- <?php include('add_ticket_model.php'); ?> -->
</div>	
<?php include('include/footer.php');?>