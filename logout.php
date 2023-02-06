<?php
    session_start();
    unset($_SESSION['MM_Username']);
    header('location:index.php');
?>