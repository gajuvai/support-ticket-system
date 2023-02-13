<?php
include('include/connection.php');
    $title = '';
    $desc = '';
    $status = '';
    $attachement = '';

if(isset($_POST['insertticket']))
{
    $title = $_POST['title'];
    $desc = $_POST['description'];
    // $status = $_POST['status'];
    $attachement = $_POST['img'];
    $createdby = $_SESSION["name"];

    $query = "INSERT INTO `ss_tickets`(`title`, `description`, `attachments`, `status`, `created_by`, `created_on`, `last_updated_on`) VALUES ('$title', '$desc', '$attachement', 'Open', '$createdby', NOW(), NOW())";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "One Ticket added succesfully.";
        header('Location: ticket.php');
    }
    else
    {
        $_SESSION['message'] = "Something went worng.";
        header('Location: ticket.php');
    }
}

if(isset($_POST['editticket']))
{
    $ticketid = $_POST['ticketid'];
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $status = $_POST['status'];
    $attachement = $_POST['img'];

    $query = "UPDATE `ss_tickets` SET `title`='$title',`description`='$desc',`attachments`='$attachement',`status`='$status',`last_updated_on`=NOW() WHERE `id`='$ticketid '";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated ticket info succesfully.";
        header('Location: ticket.php');
    }
    else
    {
        $_SESSION['message'] = "Something went worng.";
        header('Location: ticket.php');
    }
}

if(isset($_POST['closedata']))
{
    $ticketid = $_POST['close_ticketid'];

    $query = "UPDATE `ss_tickets` SET `status`='Close' WHERE `id`='$ticketid'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Ticket closed succesfully.";
        header('Location: ticket.php');
    }
    else
    {
        $_SESSION['message'] = "Something went worng.";
        header('Location: ticket.php');
    }
}

if(isset($_POST['reply'])){
    $user = $_SESSION["name"];
    $comment = $_POST['message'];
    $ticket_id = $_POST['tid'];

    $query = "INSERT INTO `ss_comments`(`comment`, `comment_by`, `comment_on`, `t_id`) VALUES ('$comment','$user', NOW(),'$ticket_id')";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        header("Location: ticket.php");
        // echo $_SERVER[HTTP_REFERER]; 
        
    }
    else
    {
        header('Location: ticket.php');
    }
    // echo "hi";
   }

?>


