

<?php 

  include 'connection.php';

  include 'session.php';

   if(isset($_GET['id'])){
   
    $id=$_GET['id'];

    $select_row="SELECT * FROM `customer_data` WHERE id=".$id;


    $stor=mysqli_query($con,$select_row);

    $save=mysqli_fetch_array($stor);

    $hobby_arry = array();

     $htr_store= $save['hobby'];
    
     if ( $htr_store != '') {
     	$hobby_arry = explode(',', $htr_store);
     }
   }





  if(isset($_POST['submit'])){

     $name=$_POST['name'];
     $email=$_POST['email'];
      $number=$_POST['number'];
     $status=$_POST['status'];
     $hobby_str="";

     $updatefileyes = '';

         if (isset($_FILES) && $_FILES['file']['name'] != '') {

   
        $destinationDir = 'D:\xampp\htdocs\sky\customer\image';
        $destinationFilename = $_FILES['file']['name']; 

        $destinationfile = $destinationDir . '/' . $destinationFilename;
        move_uploaded_file($_FILES['file']['tmp_name'], $destinationfile);

        $updatefileyes = ", `file`='$destinationFilename'";
    }



     if(isset($_POST['hobby']) && count($_POST['hobby'])>0){

       $hobby_str=implode(',',$_POST['hobby']);

      

     }


     $ins="UPDATE `customer_data` SET `name`='$name',`email`='$email',`number`='$number',`status`='$status',`hobby`='$hobby_str',`file`='$destinationFilename' WHERE id=".$id;

    
       mysqli_query($con,$ins);

       //header('location:view.php');

  }

 ?>





<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
   <form method="POST" enctype="multipart/form-data">
   	<table>
   		 <tr>
   		 	<td><label>name:</label></td>
   		 	<td><input type="text" name="name" placeholder="enter yor name.." value="<?php echo $save['name']; ?>"></td>
   		 </tr>
   		 <tr>
   		 	<td><label>email:</label></td>
   		 	<td><input type="text" name="email" placeholder="enter yor email.." value="<?php echo $save['email']; ?>"></td>
   		 </tr>
   		 <tr>
   		 	<td><label>number:</label></td>
   		 	<td><input type="text" name="number" placeholder="enter yor number.." value="<?php echo $save['number']; ?>"></td>
   		 </tr>
   		 <tr>
   		 	<td><label>status:</label></td>
   		 	<td><input type="radio" name="status" value="1" <?php echo($save['status']==1)? 'checked' : ''; ?> >yes</td>
   		 	<td><input type="radio" name="status" value="0" <?php echo($save['status']==0)? 'checked' : ''; ?>>no</td>
   		 </tr>
   		 <tr>
   		 	<td><label>hobby:</label></td>
   		 	<td>
   		 		<input type="checkbox" name="hobby[]" value="football" <?php echo (in_array('football', $hobby_arry)) ? 'checked' : ''; ?> >football
                <input type="checkbox" name="hobby[]" value="pool" <?php echo (in_array('pool', $hobby_arry)) ? 'checked' : ''; ?>>pool
                 <input type="checkbox" name="hobby[]" value="cricket" <?php echo (in_array('cricket', $hobby_arry)) ? 'checked' : ''; ?>>cricket
               <input type="checkbox" name="hobby[]" value="bowling" <?php echo (in_array('bowling', $hobby_arry)) ? 'checked' : ''; ?>>bowling
   		 	</td>

   		 </tr>
   		  <tr>
   		 	<td><label>file-upload:</label></td>
   		 	<td>
   		 		  <input type="file" name="file">
   		 		  <img width="100" src="http://localhost/sky/customer/image/<?php echo $save['file']; ?>" alt="<?php echo $save['file']; ?>"/>
   		 	</td>

   		 </tr>
   		 <tr>
   		 	<td><input type="submit" name="submit" value="submit"></td>
   		 	
   		 </tr>
   		
   	</table>
   </form>
</body>
</html>