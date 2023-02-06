<?php
    session_start();
       
    //CONNECT
    require_once("connection.php");

    //SPECIFY
    if(isset($_POST['update']) ) //BUTTON
    {
        $id = $_POST['id'];
        $uname = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $add = $_POST['add'];
        $contact = $_POST['contact'];
        
    }
    
    $sql = "UPDATE userinfo SET name='$name', username='$uname', email='$email', address='$add', contactNo=$contact WHERE id=$id "; 


    //DO IT
    mysqli_query($conn, $sql);
    
    header("location:profile.php");
?>