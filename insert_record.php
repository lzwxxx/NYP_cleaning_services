<?php 
    if(isset($_POST['submit']))
    {
        $u = $_POST['name'];
        $s = $_POST['username'];
        $e = $_POST['email'];
        $p = $_POST['pswd'];
        $cp = $_POST['cpswd'];
        $a = $_POST['add'];
        $c = $_POST['contact'];

        require_once("connection.php");
        $esql = "SELECT id FROM userinfo WHERE email = '$e'";
        $eresult = mysqli_query($conn, $esql);
        if (mysqli_num_rows($eresult) > 0) //email
        {
          header("location:register.php?fail=1"); 
        }
        else if ($p != $cp) //password
        {
            header("location:register.php?fail=2"); 
        }
        else
        {
            $sql = "INSERT INTO userinfo (name,username,pword,cpword,email,address,contactNo) VALUES ('$u','$s','$p','$cp','$e','$a','$c')";

            $dothis= mysqli_query($conn, $sql);
            header("location:index.php");
        }
    }
?>

