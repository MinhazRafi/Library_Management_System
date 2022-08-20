<?php 
session_start();
if(!isset($_COOKIE['flag']))
	{
		
		header('location:../view/login.php');
	}
	else{
		$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Student</title>
	<script type="text/javascript" src="../js/registration_check.js"></script>
	<style type="text/css">
		body{
		    background:#C0C0C0;
		    margin:0;
		    padding:0;
		    font-family: sens-serif;
		    
		}
		.box{
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    background:black;
		    text-align: center;
		    border-radius: 10px;
		    
		}

		.box a{
			color:red;
		}
		.box details{
			padding: 30px;

			color:red;
		}
		#print{
			padding-bottom: 30px;
			color:white;
		}
		label{
			color: white;
		}
	</style>

</head>
<body>
	<form method="post" action="../controller/picCheck.php" enctype="multipart/form-data">
	<table width="50%">
		<tr>
			<td>
		<fieldset class="box">
	
	
	<table width="100%">
		
		<tr>
			<td valign="top" width="40%">
				<details>
					<summary>ADD</summary>
					<a href="../view/addmember.php">Add Member</a><br>
					<a href="../view/addstudent.php">Add Student</a><br>
					<a href="../view/addteacher.php">Add Teacher</a>

				</details>
					
				<br>
				<details>
					<summary>Delete</summary>
	                <a href="deletemember.php">Delete Member</a><br>
					<a href="deletestudent.php">Delete Student</a><br>
					<a href="deleteteacher.php">Delete Teacher</a>
				</details>
				<br>
				<details>
					<summary>Book</summary>
					<a href="../view/book.php">Add book</a><br>
					<option>Delete Book</option>
				</details><br>
				<details>
					<summary>Update</summary>
					<a href="../view/updatemember_info.php">Update member Info</a><br>
					<a href="../view/updatestudent_info.php">Update Student Info</a><br>
					<a href="../view/updateteacher_info.php">Update Teacher Info</a><br>
					<a href="../view/updateown_profile.php">Update Own Profile</a>
				</details><br><br><br><br><br><br>
                  <br><br><br>

				<a href="../view/profile.php" >BACK</a>
			
			</td>
		<td colspan="2">
		<fieldset class="regi">
			<legend style="color: red">CHANGE PROFILE PICTURE</legend>

								<table>
									<tr>
										<td><img src="../asset/<?php echo $_SESSION['picture']; ?>" width="200px"></td>
									</tr>
									<tr>
										<td>
											<input type="file" name="image" >
										</td>
									</tr>
									<tr>
										<td>
											<input type="submit" name="submit" value="Upload">
										</td>
									</tr>
								</table>	


	    </fieldset>
        </td>

		</tr>

					
	</table>

</fieldset>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php

	}
	
?>