<?php 

include "db.php";  

if(isset($_POST['submit'])){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $status=$_POST['status'];
  
  $hobby='';
  
  if (isset($_POST['hobby']) && count($_POST['hobby']) > 0) {
   $hobby = implode(',', $_POST['hobby']);
   
  }

  



     $org_name=$_FILES['file']['name'];
     $byd_name=$_FILES['file']['tmp_name'];




     $path="D:\xampp\htdocs\prince\customer\photo"."/".$org_name;

     move_uploaded_file($byd_name, $path);



  $sql="INSERT INTO `customer_data`(`name`, `email`, `phone`, `status`,`hobby`,`file`) VALUES ('$name','$email','$phone','$status','$hobby','$org_name')";


 

  if(mysqli_query($con,$sql)){
     echo "your data add succesfully";
     header("location:view.php");
  }
  else{
     echo "your data NOT  add succesfully";
     echo mysqli_error($con);
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

	<form method="post" enctype="multipart/form-data">
     <table border="2">
      <tr>
       <td> <label>name</label> </td>
       <td> <input type="text" name="name" required> </td>

    </tr>
    <tr>
       <td> <label>email</label> </td>
       <td> <input type="email" name="email" required> </td>

    </tr>
    <tr>
       <td> <label>phone</label> </td>
       <td> <input type="text" name="phone" required> </td>

    </tr>
    <tr>
       <td> <label>status</label> </td>
       <td>  <input type="radio"  name="status" value="1" required>
           <label >active </label>
           <input type="radio"  name="status" value="0" required>
           <label >non-active </label></td>

      </tr>
      <tr>
         <td> <label>hobby</label> </td>
         <td>  

            <input type="checkbox"  name="hobby[]" value="blogging">
            <label > blogging</label><br>
            <input type="checkbox"  name="hobby[]" value="reading">
            <label > reading</label><br>
            <input type="checkbox"  name="hobby[]" value="running">
            <label > running </label>

         </td>

      </tr>
      <tr>
          <td> <label>file</label></td>
          <td> <input type="file" name="file"> </td>
      </tr>
      <tr>
       <td> <input type="submit" name="submit" value="submit"> </td>
    </tr>


 </table>
</form>

</body>
</html>