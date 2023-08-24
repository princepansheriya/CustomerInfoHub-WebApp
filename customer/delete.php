<?php 

   include "db.php";

   if(isset($_GET['id'])){

   	$id=$_GET['id'];

   $darshn="DELETE FROM `customer_data` WHERE id=".$id;

   mysqli_query($con,$darshn);

   header("location:view.php");

   }


 ?>