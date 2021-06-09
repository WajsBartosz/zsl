<?php 
session_start();
$_SESSION['logged']=false;
unset($_SESSION['loggedu']);
header('location: ../index.php');
?>