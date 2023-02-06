<?php
    //CONNECT
    require_once("connection.php");

    //SPECIFY
    if(isset($_POST['id']) ) //BUTTON
    {
        $id = $_POST['id'];
        $udate = $_POST['udate'];
        $utime = $_POST['utime'];
    }
    else
    {
        $id=0;
        $udate=0;
        $utime=0;
    }
    
    $sql = "UPDATE booking SET date='$udate', time='$utime' WHERE bookingID='$id'"; 

    $sql1 = "UPDATE booking SET date='$udate' WHERE bookingID='$id'"; 
    $sql2 = "UPDATE booking SET time='$utime' WHERE bookingID='$id'"; 
    //DO IT
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql1);
    mysqli_query($conn, $sql2);
    header("location:booking.php");
?>