<?php 
session_start();

unset($_SESSION['validate']);
unset($_SESSION['email']);
unset($_SESSION['name']);

header("location:login.php");
?>