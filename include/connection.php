<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "support_system";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

?>
