<?php 
         include "db.php";

     $pageperlimit=3;
     $page=1;
     if (isset($_GET['page']) && $_GET['page'] >0 ) {
       $page=$_GET['page'];
     }
     $offset=($page-1) *$pageperlimit;

     if(isset($_GET['search']) && $_GET['search'] != ''){

         $search=$_GET['search'];
         $sql="SELECT * FROM `customer_data` WHERE name LIKE '%".$search."%' OR email LIKE '%".$search."%' limit ".$offset.','.$pageperlimit;

        $row=mysqli_query($con,$sql);
        $sqlcount="SELECT * FROM `customer_data` WHERE name LIKE '%".$search."%' OR email LIKE '%".$search."%'" ;
        $rowcount=mysqli_query($con,$sqlcount);

      
     
     }
     else {
        $sql="SELECT * FROM `customer_data` limit ".$offset.','.$pageperlimit;
        
        $row=mysqli_query($con,$sql);
        $sqlcount="SELECT * FROM `customer_data`";
        $rowcount=mysqli_query($con,$sqlcount);
     }
      $totaldata=mysqli_num_rows($rowcount);
     $pages=$totaldata/$pageperlimit;
     $newpages=ceil($pages);
     
    
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
  <a href="insert.php">Add DATA</a>
  <form method="get">
     <input type="text" name="search">
     <input type="submit" name="submit" value="submit">
  </form>
 	<table border="2">

 			<tr>
 				<th>id</th>
 				<th>name</th>
 				<th>email</th>
 				<th>phone</th>
 				<th>status</th>
        <th>hobby</th>
        <th>file</th>
 				<th>created_at</th>
 				<th>updated_at</th>
                <th>Action</th>
                <th>Action</th>

 			</tr>
     <?php 
     while ($prince=mysqli_fetch_assoc($row)) {
     
     

      ?>
 			<tr>

 					<td><?php echo $prince['id']; ?></td>
 					<td><?php echo $prince['name']; ?></td>
 					<td><?php echo $prince['email']; ?></td>
 					<td><?php echo $prince['phone']; ?></td>
 					<td><?php echo ($prince['status'] == 1)? "active" : "non-active"; ?></td>
          <td><?php echo $prince['hobby']; ?></td>
          <td><img src="http://localhost/photo/<?php echo $prince['file']; ?>" width="100px" height="100px" ></td>

              
 					<td><?php echo $prince['created_at']; ?></td>
 					<td><?php echo $prince['updated_at']; ?></td>
                    <td> <a href="delete.php?id=<?php echo $prince['id']; ?>" onclick="return confirm('are you sure to delete this data')" >delete</a> </td>
                    <td> <a href="update.php?id=<?php echo $prince['id']; ?>" onclick="return confirm('are you sure to update this data')">update</a> </td>
 			</tr>
 			
<?php } ?>
 	</table>
 
      <?php 

      for ($i=1; $i<=$newpages; $i++){

      ?>
<a href="view.php?page=<?php echo $i ?>&search=<?php echo (isset($_GET['search']) && $_GET['search'] != '')? $_GET['search'] : '';?>">page <?php  echo $i?></a>

 
 <?php } ?>
 </body>
 </html>


 