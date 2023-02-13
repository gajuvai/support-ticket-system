<?php 
// include 'init.php'; 
include('include/header.php');
include('include/connection.php');

$ticket_id  = $_GET['ticketId'];

?>

<script src="assets/js/main.js"></script>

<title>Support Ticket System with PHP & MySQL</title>
<?php include('include/container.php');?>
<div class="container">	
	<div class="row home-sections">
	<h2>Support Ticket System</h2>	
	<?php include('menu.php'); ?>		
	</div> 
	<section class="comment-list">          
		<article class="row">            
			<div class="col-md-10 col-sm-10">
				<div class="panel panel-default arrow left">
					<div class="panel-heading right">

                    <?php
					$query = "SELECT * FROM `ss_tickets` WHERE `id`='$ticket_id'";
					$query_run = mysqli_query($conn, $query);
					$row = mysqli_fetch_assoc($query_run);
					
					if($row['status']=="Open"){
					   echo "<button type='button' class='btn btn-success btn-sm'>
					        <span class='glyphicon glyphicon-eye-open'></span> Open
					    </button>";
                    }else{
                        echo "<button type='button' class='btn btn-danger btn-sm'>
					         <span class='glyphicon glyphicon-eye-close'></span> Closed
					    </button>";
                    }?>   

					<span class="ticket-title"><?php echo $row['title'];?></span>
					</div>
					<div class="panel-body">						
						<div class="comment-post">
						<p>
                        <?php echo $row['description'];?>
						</p>
						</div>                 
					</div>
					<div class="panel-heading right">
						<span class="glyphicon glyphicon-time"></span> <time class="comment-date"><i class="fa fa-clock-o"></i><?php echo $row['created_on'];?></time>
						&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span><?php echo $row['created_by'];?>
					</div>
				</div>			 
			</div>
		</article>		
		
	       <!-- Database stored comments	 -->
           <?php
               $query = "SELECT * FROM `ss_comments` WHERE `t_id`='$ticket_id'";
               $query_run = mysqli_query($conn, $query);
               if($query_run)
               {
                   foreach($query_run as $row)
                   {
           ?>
                <article class="row">
                    <div class="col-md-10 col-sm-10">
                        <div class="panel panel-default arrow right">
                            <div class="panel-heading">							
                                    <span class="glyphicon glyphicon-user"></span><?php echo $row['comment_by'];?>
                                     &nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> <time class="comment-date"><i class="fa fa-clock-o"></i><?php echo $row['comment_on'];?></time>							
                            </div>
                            <div class="panel-body">						
                                <div class="comment-post">
                                <p>
                                <?php echo $row['comment'];?>
                                </p>
                                </div>                  
                            </div>
                            
                        </div>
                    </div>            
                </article>
		         <?php }
                }?>
              
		<form method="post" action="manage-ticket.php">
			<article class="row">
				<div class="col-md-10 col-sm-10">				
					<div class="form-group">							
						<textarea class="form-control" rows="5" name="message" placeholder="Enter your reply..." required></textarea>	
					</div>				
				</div>
			</article>  
			<article class="row">
				<div class="col-md-10 col-sm-10">
					<div class="form-group">							
						<button name="reply" class="btn btn-success">Post</button>		
					</div>
				</div>
			</article> 	
			<input type="hidden" name="tid"  value="<?php echo $ticket_id; ?>" />			
		</form>

	</section>
</div>

<?php include('include/footer.php');?>