<?php
    //CONNECT
    require_once("connection.php");

    //SPECIFY
    if(isset($_POST['cancel']) ) //BUTTON
    {
        $id = $_POST['id'];
    }
   
    $sql = "UPDATE booking SET status='C-Cancelled' WHERE bookingID='$id'";

    //DO IT
    mysqli_query($conn, $sql);
    
    header("location:booking.php");
?>