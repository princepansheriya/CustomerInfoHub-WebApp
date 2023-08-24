<?php 

if (isset($_SESSION['validate'])&& $_SESSION['validate']==1) {
	
}
else{
	header("location:login.php");
}


?>
<a href="logout.php">logout</a>
<div>WELCOME,<?php echo($_SESSION['name']) ?></div>