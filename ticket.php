<?php 
// include 'init.php'; 
include('include/header.php');
include('include/connection.php');

?>
<script src="assets/js/main.js"></script>

<!-- add ticket modal  -->
		<div id="addticketmodal" class="modal fade">
			<div class="modal-dialog">
				<form method="post" action="manage-ticket.php">
					<div class="modal-content">
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><i class="fa fa-plus"></i>Add Ticket</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="subject" class="control-label">Title</label>
								<input type="text" class="form-control" name="title" placeholder="Subject" required>			
							</div>						
							<div class="form-group">
								<label for="message" class="control-label">Description</label>							
								<textarea class="form-control" rows="5" name="description"></textarea>							
							</div>
							<div class="form-group">
								<label for="subject" class="control-label">Attachments</label>
								<input type="file" class="form-control" name="img" placeholder="Subject">			
							</div>	
							<!-- <div class="form-group">
								<label for="status" class="control-label">Status</label>				
								<select name="status" class="form-control">
									<option  value="Open" select>Open</option>				
									<option  value="Close">Close</option>	
								</select>						
							</div> -->
						</div>
						<div class="modal-footer">
							<input type="submit" name="insertticket" class="btn btn-info" value="Save" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div>
<!-- end add ticket modal  -->
<!-- edit ticket modal  -->
		<div id="editticketmodal" class="modal fade">
			<div class="modal-dialog">
				<form method="post" action="manage-ticket.php">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><i class="fa fa-plus"></i>Add Ticket</h4>
						</div>
						<div class="modal-body">

							<input type="hidden" name="ticketid" id="edit_ticketid">
							<div class="form-group">
								<label for="subject" class="control-label">Title</label>
								<input type="text" class="form-control" id="edit_tickettitle" name="title" placeholder="Subject" required>			
							</div>						
							<div class="form-group">
								<label for="message" class="control-label">Description</label>							
								<textarea class="form-control" rows="5" id="edit_ticketdescription" name="description"></textarea>							
							</div>
							<div class="form-group">
								<label for="subject" class="control-label">Attachments</label>
								<input type="file" class="form-control" id="edit_ticketimg" name="img" placeholder="Subject">			
							</div>	
							<div class="form-group">
								<label for="status" class="control-label">Status</label>				
								<select id="edit_ticketstatus" name="status" class="form-control">
									<option value="Open">Open</option>				
									<option value="Close">Close</option>	
								</select>						
							</div>
						</div>
						<div class="modal-footer">
							<input type="submit" name="editticket" class="btn btn-info" value="Update" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div>
<!-- end edit ticket modal  -->
<!-- close ticket modal  -->
	<div id="closeticketmodal" class="modal fade">
		<div class="modal-dialog">

			<form action="manage-ticket.php" method="POST">
			    <div class="modal-content">
					<div class="modal-body">
						<input type="hidden" name="close_ticketid" id="delete_cid">
						<h4> Do you want to Closed this Ticket ??</h4>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
						<button type="submit" name="closedata" class="btn btn-primary"> Yes !! Delete it. </button>
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
					<th>Title</th>
					<th>Created By</th>
					<th>Created On</th>
					<th>Status</th>
					<th></th>				
				</tr>
			</thead>
			
			<!-- // displying ticket on dashboard  -->
			<?php 
			if($_SESSION["usertype"] == 'SuperAdmin'){
				$query = "SELECT * FROM `ss_tickets`";
			}else{
				$name = $_SESSION["name"];
				$query = "SELECT * FROM `ss_tickets` WHERE `created_by`='$name'";
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
							<td style="display:none;" class="ticketId"> <?php echo $row['id'];?> </td>
							<td><?php echo $sn?></td>
							<td> <?php echo $row['title']; ?> </td>
							<td> <?php echo $row['created_by']; ?> </td>
							<td> <?php echo $row['created_on']; ?> </td>
							<td style="display:none;"> <?php echo $row['description']; ?> </td>
							<td style="display:none;"> <?php echo $row['attachments']; ?> </td>
							<td> <?php if($row['status'] == 'Open'){echo "<span class='label label-success'>Open</span>";}else{echo "<span class='label label-danger'>Close</span>";} ?> </td>
							<td>
								<a href="view-ticket.php?ticketId=<?php echo $row['id'];?>" class="btn btn-success btn-xs update">View Ticket</a>
								<button type="button" class="btn btn-info btn-xs editticketbtn" <?php if($_SESSION["usertype"]=='GeneralUser'){echo 'disabled';}?> >Edit</button>
								<button type="button" class="btn btn-danger btn-xs closeticketbtn" <?php if($_SESSION["usertype"]=='GeneralUser'){echo 'disabled';} if($row['status']=='Close'){echo 'disabled';}?> >Close</button>
							</td>
						</tr>
					<?php  
					$sn++;         
				}
			}
			
			if($sn == 1){ ?>
				<tr><td colspan="7">No Such a ticket available.</td></tr>
			<?php }
			?>
		</tbody>
		</table>
	</div>
</div>	
<?php include('include/footer.php');?>