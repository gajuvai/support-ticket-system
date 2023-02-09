<?php
include('include/header.php');
include('include/connection.php');
$errorMessage = "";
if(isset($_POST["login"])){
    if(!empty($_POST["email"]!=''&& $_POST["password"]!='')) {	
    $email = $_POST['email'];
    $password = $_POST['password'];

    // INSERT INTO `ss_users`(`user_id`, `username`, `user_email`, `password`, `user_status`, `user_role`)
    $sqlQuery = "SELECT * FROM ss_users WHERE user_email='$email' AND password='$password' AND user_status = 'Active'";
	$resultSet = mysqli_query($conn, $sqlQuery);
	$isValidLogin = mysqli_num_rows($resultSet);	
	if($isValidLogin){
		$userDetails = mysqli_fetch_assoc($resultSet);
		$_SESSION["userid"] = $userDetails['user_id'];
		$_SESSION["user_name"] = $userDetails['username'];
		$_SESSION['user_type'] == $userDetails['user_role'];
		
		header("location: ticket.php"); 		
		
	} else {		
			$errorMessage = "Invalid login!";		 
		}
}else{
    $errorMessage = "Enter Both user and password!";	
}
}
?>

<title>Support Ticket System with PHP & MySQL</title>
<?php include('include/container.php');?>
<div class="container contact">	
	<h2>Support Ticket System</h2>	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#00796B;color:white;">
				<div class="panel-title">User Login</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
                <?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="email" name="email" placeholder="email" style="background:white;">                                        
					</div>                                
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password"placeholder="password">
					</div>
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-success">						  
						</div>						
					</div>	
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('include/footer.php');?>