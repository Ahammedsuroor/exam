<!DOCTYPE html>
	<html>
	<head>
		<title> Edit Employeee</title>
	</head>
	<body>
	             <?php
                      $id=$_GET['id'];
                      include("db_con.php");
                      $upd="select * from test where id='$id'";
                      $updation=mysqli_query($con,$upd);
                      $res=mysqli_fetch_array($updation);
                 ?>
	    <center><h1>Edit Employee</h1></center>
	    <center>
	    <form action="receive_update.php" method="post" enctype="multipart/form-data">
	    	<table>
	    		<tr>
	    			<td>Name</td>
	    			<td><input type="text" placeholder="name" name="txt_name" value="<?php echo $res['name'];?>"></td>
	    		</tr>
	    		<tr>
	    			<td>Phone</td>
	    			<td><input type="text" placeholder="Phone Number" name="txt_phone" value="<?php echo $res['phone'];?>"></td>
	    		</tr>
	    		<tr>
	    			<td>Email</td>
	    			<td><input type="text" placeholder="Email" name="txt_mail" value="<?php echo $res['email'];?>"></td>
	    		</tr>
	    		<tr>
	    			<td>Gender</td>
	    			<td>
	    			   <input type="radio" name="txt_rad" value="male" <?php if($res['gender']=="male"){ ?> checked <?php }?>>Male
	    			   <input type="radio" name="txt_rad" value="female" <?php if($res['gender']=="female"){ ?> checked <?php }?>>Female
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>Hobbies</td>
	    			<td>
	    			   <input type="checkbox" name="txt_box[]" value="music">Listening to Music<br>
	    			   <input type="checkbox" name="txt_box[]" value="Reading">Reading<br>
	    			   <input type="checkbox" name="txt_box[]" value="Browsing">Browsing<br>
	    			   <input type="checkbox" name="txt_box[]" value="Playing">Playing<br>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>Profile pic</td>
	    			<td><input type="file" placeholder="photo" name="txt_file"></td>
	    		</tr>
	    		<tr>
	    			<td>Country</td>
	    			<td>
	    			     <select name="txt_cnty">
	    			        <option value=""></option>
	    			        <option value="ind" <?php if($res['country']=="ind"){ ?> selected <?php }?>>india</option>
	    			        <option value="pak" <?php if($res['country']=="pak"){ ?> selected <?php }?>>Pakistan</option>
	    			     </select>    
	    		    </td>
	    		</tr>
	    	</table>
	    	<input type="submit" value="Update">
	    </form>
	    </center>
  </body>
</html>  	    
