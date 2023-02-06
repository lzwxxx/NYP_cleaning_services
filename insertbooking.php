<?php
    session_start();
    if(isset($_SESSION['MM_Username']))
    {
         $u = $_SESSION['MM_Username'];
        $category = $_POST['category'];
        $service = $_POST['service'];
        $date = $_POST['datepicker'];
        $time = $_POST['time'];

        //CONNECTION
        require_once("connection.php");

        //SPECIFY WHAT TO DO 
        $sql = "INSERT INTO booking (username,categoryName,serviceName,date,time,status) VALUES ('$u','$category','$service','$date','$time','B-Booked')";

        //DO IT
        $result = mysqli_query($conn,$sql);

        if ($result == true)
        {
            header("location:booking.php");
        }
        else
        {
            header("location:index.php"); //when smth goes wrong 
        }
    }
    else
    {
        header("location:booking.php?fail=1");
    }
   
?>
