<!DOCTYPE html>
	<html>
	<head>
		<title> Add Employeee</title>
		<style type="text/css">
		   .wdt{
                 width: 60px;
		       }
		</style>
	</head>
	<body>
	    <center><h1>Add Employee</h1></center>
	    <center>
	    <form action="receive.php" method="post" enctype="multipart/form-data">
	    	<table>
	    		<tr>
	    			<td>Name</td>
	    			<td><input type="text" placeholder="name" name="txt_name" required></td>
	    		</tr>
	    		<tr>
	    			<td>Phone</td>
	    			<td><input type="text" placeholder="Phone Number" name="txt_phone" required></td>
	    		</tr>
	    		<tr>
	    			<td>Email</td>
	    			<td><input type="text" placeholder="Email" name="txt_mail" required></td>
	    		</tr>
	    		<tr>
	    			<td>Gender</td>
	    			<td>
	    			   <input type="radio" name="txt_rad" value="male" required>Male
	    			   <input type="radio" name="txt_rad" value="female" required>Female
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>Hobbies</td>
	    			<td>
	    			   <input type="checkbox" name="txt_box[]" value="Music">Listening to Music<br>
	    			   <input type="checkbox" name="txt_box[]" value="Reading">Reading<br>
	    			   <input type="checkbox" name="txt_box[]" value="Browsing">Browsing<br>
	    			   <input type="checkbox" name="txt_box[]" value="Playing">Playing<br>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>Profile pic</td>
	    			<td><input type="file" placeholder="photo" name="txt_file" required></td>
	    		</tr>
	    		<tr>
	    			<td>Country</td>
	    			<td>
	    			     <select name="txt_cnty">
	    			        <option value=""></option>
	    			        <option value="ind">india</option>
	    			        <option value="pak">Pakistan</option>
	    			     </select>    
	    		    </td>
	    		</tr>
	    	</table>
	    	<input type="submit" value="Save">
	    </form>
	    </center>
	        <center>
	        <table border="1">
	        	<tr>
	        		<th>SI No</th>
	        		<th>Pic</th>
	        		<th>Name</th>
	        		<th>Phone</th>
	        		<th>Email</th>
	        		<th colspan="2">Action</th>
	        	</tr>
	             	<?php
	             	     include("db_con.php");
	             	     $data="select * from test";
	             	     $result=mysqli_query($con,$data);
	             	     while ($res=mysqli_fetch_array($result)) 
	             	        {
	             	?>
	             	  <tr>
	             	  	   <td class="wdt"><?php echo $res['id']; ?></td>
	             	  	   <td class="wdt"><img src="<?php echo $res['pic']; ?>" width="50" height="50"></td>
	             	  	   <td class="wdt"><?php echo $res['name']; ?></td>
	             	  	   <td class="wdt"><?php echo $res['phone']; ?></td>
	             	  	   <td class="wdt"><?php echo $res['email']; ?></td>
	             	  	   <td class="wdt"><a href="update.php?id=<?php echo $res['id']; ?>">edit</a></td>
	             	  	   <td class="wdt"><a href="delete.php?id=<?php echo $res['id']; ?>">delete</a></td>
	             	  </tr>
	             	<?php            
	             	        }
	             	?>
	        </table>     	
	        </center>
	</body>
</html>