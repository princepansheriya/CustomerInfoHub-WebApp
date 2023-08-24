
<?php 

           include "db.php";  

if(isset($_GET['id'])){

   $id=$_GET['id'];


   $prince="SELECT * FROM `customer_data` WHERE id=".$id;

  $ravi=mysqli_query($con,$prince);


   $prince=mysqli_fetch_assoc($ravi);

}

           if(isset($_POST['submit'])){

          $name=$_POST['name'];
          $email=$_POST['email'];
          $phone=$_POST['phone'];
          $status=$_POST['status'];
          $hobby='' ;

          if(isset($_POST['id']) && count($_POST['hobby']) > 0){
            $hobby = explode (',', $_POST['hobby']);

          }

            


           $sql="UPDATE `customer_data` SET `name`='$name',`email`='$email',`phone`='$phone',`status`='$status' , `hobby`='$hobby'  WHERE id=".$id;

           	

           	if(mysqli_query($con,$sql)){
           		echo "your data add succesfully";
           		header("location:view.php");
           	}
           	{
           		echo "your data NOT  add succesfully";
           	}

}
 ?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form method="post">
    <table border="2">
   <tr>
   		<td> <label>name</label> </td>
   		<td> <input type="text" name="name" required value="<?php echo $prince['name']; ?>"> </td>

   </tr>
   <tr>
   		<td> <label>email</label> </td>
   		<td> <input type="email" name="email" required value="<?php echo $prince['email']; ?>">  </td>

   </tr>
   <tr>
   		<td> <label>phone</label> </td>
   		<td> <input type="text" name="phone" required> </td>

   </tr>
   <tr>
   		<td> <label>status</label> </td>
   		<td>  <input type="radio"  name="status" value="0" required>
  <label >active </label>
  <input type="radio"  name="status" value="1" required>
  <label >non-active </label></td>

   </tr>
  
  <tr>
         <td> <label>hobby</label> </td>
         <td>  

               <input type="checkbox"  name="hobby[]" value="">
               <label > rlogging</label><br>
                  <input type="checkbox"  name="hobby[]" value="">
                <label > reading</label><br>
                <input type="checkbox"  name="hobby[]" value="">
              <label > running </label>

         </td>

   </tr>




   <tr>
   		<td> <input type="submit" name="submit" value="submit"> </td>
   </tr>


    </table>
	</form>

</body>
</html>