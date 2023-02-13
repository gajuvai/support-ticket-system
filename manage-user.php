<?php
include('include/connection.php');
    $username = '';
    $email = '';
    $role = '';
    $status = '';
    $password = '';

if(isset($_POST['insertuser']))
{
    $username = $_POST['userName'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['newPassword'];

    $query = "INSERT INTO `ss_users`(`username`, `user_email`, `password`, `user_status`, `user_role`) VALUES ('$username', '$email', '$password', 'Active', '$role')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "One user added succesfully.";
        header('Location: user.php');
    }
    else
    {
        $_SESSION['message'] = "Something went worng.";
        header('Location: user.php');
    }
}

if(isset($_POST['edittuser']))
{
    $userid = $_POST['userid'];
    $username = $_POST['userName'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $password = $_POST['newPassword'];

    $query = "UPDATE `ss_users` SET `username`='$username',`user_email`='$email', `user_status`='$status',`user_role`='$role' `password`='$password' WHERE `user_id`='$userid'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated user info succesfully.";
        header('Location: user.php');
    }
    else
    {
        $_SESSION['message'] = "Something went worng.";
        header('Location: user.php');
    }
}

if(isset($_POST['deletedata']))
{
    $userid = $_POST['delete_id'];

    $query = "DELETE FROM `ss_users` WHERE `user_id`='$userid'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted user succesfully.";
        header('Location: user.php');
    }
    else
    {
        $_SESSION['message'] = "Something went worng.";
        header('Location: user.php');
    }
}

?>