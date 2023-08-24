<?php 

include 'connection.php';

if(isset($_POST['login'])){

	$email=$_POST['email'];
	$password=md5($_POST['password']);

	$sql_login="SELECT * FROM `customer_data` WHERE email='$email' AND password='$password'";

	$sqlfire=mysqli_query($con,$sql_login);
	$sqlfetch=mysqli_fetch_assoc($sqlfire);

	$sqlcount=mysqli_num_rows($sqlfire);

  
     if ($sqlcount>0) {
     	
         $_SESSION['validate']=1;
    	$_SESSION['email']=$email;
    	$_SESSION['name']=$sqlfetch['name'];

         header('location:view.php');

     }else{
         echo '<div>emailadrres and password is unmatched..</div>';

         header("location:login.php");
     }



}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
     <form method="POST">
     	<table align="center" width="30%">
     		<tr>
     			<td>email</td>
     			<td><input type="email" name="email"></td>
     		</tr>
     			<tr>
     			<td>password</td>
     			<td><input type="password" name="password"></td>
     		</tr>
     		<tr>
     			<td colspan="2" align="center">
     				<input type="submit" name="login" value="login">
     			</td>
     		</tr>
     	</table>
     </form>
</body>
</html>