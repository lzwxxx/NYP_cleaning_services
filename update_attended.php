<?php
    //CONNECT
    require_once("connection.php");

    //SPECIFY
    if(isset($_POST['yes']) ) //BUTTON
    {
        $id = $_POST['id'];
    }


    //$id = $_POST['cid']; FOR BUTTON
//    $sql = "DELETE FROM booking WHERE bookingID='$id'";
    $sql = "UPDATE booking SET status='A-Attended' WHERE bookingID='$id'";

    //DO IT
    mysqli_query($conn, $sql);
    
    header("location:booking.php");
?>