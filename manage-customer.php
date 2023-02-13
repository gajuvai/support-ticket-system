<?php
include('include/connection.php');
    $username = '';
    $email = '';
    $phone = '';
    $panno = '';
   

if(isset($_POST['insertcustomer']))
{
    $name = $_POST['customername'];
    $email = $_POST['customeremail'];
    $phone = $_POST['customerphone'];
    $panno = $_POST['pan_no'];

    $query = "INSERT INTO `ss_customer`( `c_name`, `c_email`, `c_phone`, `pan_no`) VALUES ('$name', '$email', '$phone', '$panno')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "One Customer added succesfully.";
        header('Location: customer.php');
    }
    else
    {
        $_SESSION['message'] = "Something went worng.";
        header('Location: customer.php');
    }
}


if(isset($_POST['editcustomer']))
{
    $cid =  $_POST['customerid'];
    $name = $_POST['customername'];
    $email = $_POST['customeremail'];
    $phone = $_POST['customerphone'];
    $panno = $_POST['pan_no'];

    $query = "UPDATE `ss_customer` SET `c_name`='$name',`c_email`='$email', `c_phone`='$phone', `pan_no`='$panno' WHERE `cid`='$cid'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated customer info succesfully.";
        header('Location: customer.php');
    }
    else
    {
        $_SESSION['message'] = "Something went worng.";
        header('Location: customer.php');
    }
}

if(isset($_POST['delete_customer_data']))
{
    $cid = $_POST['delete_id'];

    $query = "DELETE FROM `ss_customer` WHERE `cid`='$cid'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted customer succesfully.";
        header('Location: customer.php');
    }
    else
    {
        $_SESSION['message'] = "Something went worng.";
        header('Location: customer.php');
    }
}

?>