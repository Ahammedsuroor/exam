<?php
     $id=$_GET['id'];
     include("db_con.php");
     $del="delete from test where id='$id'";
     $deletion=mysqli_query($con,$del);
     if($deletion)
     	 {
     	 	header("Location:index.php");
     	 }
?>