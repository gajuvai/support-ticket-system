<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["name"]);
unset($_SESSION["usertype"]);
header('Location: login.php');
die();
?>