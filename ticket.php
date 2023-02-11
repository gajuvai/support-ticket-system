<?php 
// include 'init.php'; 
include('include/header.php');
include('include/connection.php');

?>
<!-- add ticket modal  -->
		<div id="addticketmodal" class="modal fade">
			<div class="modal-dialog">
				<form method="post">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><i class="fa fa-plus"></i>Add Ticket</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="subject" class="control-label">Title</label>
								<input type="text" class="form-control" id="title" name="title" placeholder="Subject" required>			
							</div>						
							<div class="form-group">
								<label for="message" class="control-label">Description</label>							
								<textarea class="form-control" rows="5" id="description" name="description"></textarea>							
							</div>
							<div class="form-group">
								<label for="subject" class="control-label">Attachments</label>
								<input type="file" class="form-control" id="img" name="img" placeholder="Subject" required>			
							</div>	
							<div class="form-group">
								<label for="status" class="control-label">Status</label>							
								<label class="radio-inline">
									<input type="radio" name="status" id="open" value="0" checked required>Open
								</label>
									<label class="radio-inline">
										<input type="radio" name="status" id="close" value="1" required>Close
									</label>	
							</div>
						</div>
						<div class="modal-footer">
							<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div>
<!-- end add ticket modal  -->
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
					<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#addticketmodal">Create Ticket</button>
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
					<th>Comments</th>
					<th>Operations</th>				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>there some issues</td>
					<td>i d k</td>
					<td><span class="label label-success">Open</span></td>
					<td><a href="#" class="btn btn-success btn-xs update">ADD</a></td>
					<td><button type="button" name="update" id="" class="btn btn-info btn-xs update">EDIT</button>
					<button type="button" name="delete" id="" class="btn btn-danger btn-xs delete">CLOSE</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>	
<?php include('include/footer.php');?>