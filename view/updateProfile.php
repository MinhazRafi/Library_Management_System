<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	body
	{
		background-color: lightskyblue;
	}
		h1
		{
			font-family: roboto;
		}

		input
		{
			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 5px;
			padding: 10px 10px;
			margin: 5px 5px;

		}
	</style>
</head>
<body>
	<center>
		<h1>Update Profile</h1>

		<form action="" method="POST">
			<input type="text" name="Id" placeholder="Enter Id"><br>
			<input type="text" name="username" placeholder="Enter username"><br>
			<input type="password" name="password" placeholder="Enter password"><br>
			<input type="password" name="cpassword" placeholder="Enter cpassword"><br>
			<input type="text" name="name" placeholder="Enter name"><br>
			<input type="email" name="email" placeholder="Enter email"><br>
			<label>Upload image</label>
			<input type="file" name="picture"><br>
			<input type="submit" name="update" value="Update">
		</form>
	</center>
</body>
</html>

<?php
   
   $conn = mysqli_connect('localhost', 'root', '', 'Online_Library');

if(isset($_POST['update']))
{
	    $Id=$_POST['Id'];
	    $password= $_POST['password'];
      $cpassword=$_POST['cpassword'];

        if ($password==$cpassword) {
        	
	    $query = "UPDATE `student` SET username='$_POST[username]', password='$_POST[password]', cpassword='$_POST[cpassword]', 
	    name='$_POST[name]', email='$_POST[email]', picture='$_POST[picture]' where Id = $Id";

	    $query_run = mysqli_query($conn,$query);
    
    if ($query_run)
      {
    	echo '<script> alert("data updated")</script>';
    	header('location: ../view/dashboard.php');
      }
      else
      {
      	echo '<script> alert("data not updated")</script>';
      }
  }
  else
  {
  	echo "Password dont match";
  }
    

}
?>