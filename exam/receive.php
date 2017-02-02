<?php
      	$name=$_POST['txt_name'];
      	$phone=$_POST['txt_phone'];
      	$email=$_POST['txt_mail'];
      	$gend=$_POST['txt_rad'];
      	$check=$_POST['txt_box'];
      	$ch_db=implode(",",$check);
        $image=$_FILES['txt_file'];
        $src=$image['tmp_name'];
        $path="image/".$image['name'];
        move_uploaded_file($src, $path); 
        $country=$_POST['txt_cnty'];
       include("db_con.php");
       $ins="insert into test(pic,name,phone,email,gender,hobby,country) values ('$path','$name','$phone','$email','$gend','$ch_db','$country')";
       $insert=mysqli_query($con,$ins);
         if($insert)
         	 {
         	 	header("Location:index.php");
         	 }
?>