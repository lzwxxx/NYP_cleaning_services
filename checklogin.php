<?php 
	$e = $_POST['email'] ;   
	$p = $_POST['pswd'] ;
	
	require_once("connection.php"); //CONNECT TO THE CONNECTION.PHP 


$sql = "SELECT * FROM userinfo WHERE email = '$e' and pword='$p' " ; 
$search_result = mysqli_query($conn , $sql);    // search table NOW!

// Return the number of rows in search result
$userfound = mysqli_num_rows($search_result);

if($userfound == 1)    
{
    session_start(); //MUST START THE SESSION TO CREATE A SESSION VARIABLE
    
    $user = mysqli_fetch_assoc($search_result);
    $_SESSION['MM_Username']=$user['username'];//use DB name //NEED TO FETCH THEN CAN USE $user['name']
    
    header("location:profile.php");
}
else 
{ 
    header("location:index.php?fail=1");
}
?>