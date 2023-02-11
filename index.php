<?php  
session_start();
include('include/header.php');
if(isset($_SESSION["userid"])){
    	
}else{
    header("location: login.php");
}

// header("location: ticket.php");
?>