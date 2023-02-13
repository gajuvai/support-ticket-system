
<nav class="navbar navbar-inverse" style="background:#00796B;color:#f6f8f9;font-weight:bold;">
	<div class="container-fluid">		
		<ul class="nav navbar-nav menus">
			
			<li id="ticket"><a href="ticket.php" class="navbar-brand">Ticket</a></li>

			<?php
			$role = $_SESSION["usertype"];
			// echo $role;
			if($role == 'Admin'){
				echo "<li id='department'><a href='customer.php' >Customer</a></li>
						<li id='user'><a href='user.php' >Users</a></li>";
			}?>										
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="logout.php" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span> 
				<img src="//gravatar.com/avatar/?s=100" width="20px">&nbsp;<?php  echo "Hello " .$_SESSION["name"]. ".";?></a>
				<!-- <img src="//gravatar.com/avatar/?s=100" width="20px">&nbsp;<?php  echo "Hello";?></a> -->
				<ul class="dropdown-menu">					
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>