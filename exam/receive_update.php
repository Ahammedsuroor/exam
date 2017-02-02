<?php
      	$name=$_POST['txt_name'];
      	$phone=$_POST['txt_phone'];
      	$email=$_POST['txt_mail'];
      	$gend=$_POST['txt_rad']; 
        $country=$_POST['txt_cnty'];
       include("db_con.php");
       $id=$_GET['id'];
       $upd="update test set name='$name',phone='$phone',email='$email',gender='$gend',country='$country' where id='$id'";
       $updation=mysqli_query($con,$upd);
         if($updation)
         	 {
         	 	header("Location:index.php");
         	 }
?>