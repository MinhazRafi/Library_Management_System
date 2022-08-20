<!DOCTYPE html>
<html>
<head>
	<title>Update Member</title>
		<style type="text/css">
		body{
		    background:#C0C0C0;
		    margin:0;
		    padding:0;
		    font-family: sens-serif;
		     background: url("../asset/abc.jpg");
			 background-repeat: no-repeat;
			 background-size:100%


		    
		}
		.box{
			background-color:rgba(0,0,0,0.8);
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    background:black;
		    text-align: center;
		    border-radius: 10px;
		    padding: 60px;
		}
		.box h2{
		    color: #fff;
		    text-transform: uppercase;
		    font-weight: 500;
		}
		.label{
			color: #fff;
		    text-transform: uppercase;
		    font-weight: 500;
		}
		.box td{
			color: #fff;
		    text-transform:none;
		    font-weight: 500;
		}
		.box input[type = "text"]{
		    border: 0;
		    background: none;
		    text-align: center;
		    border: 2px solid #009900;
		    padding: 6px 6px;
		    outline: none;
		    color: #48dbfb;
		    border-radius: 15px;

		}

		.box input[type="submit"]{
		    border: 0;
		    background: none;
		    display: block;
		    margin: 20px auto;
		    text-align: center;
		    border: 2px solid #1dd1a1;
		    padding: 14px 40px;
		    outline: none;
		    color: #ffffff;
		    border-radius: 24px;
		    transition: 0.25s;
		    cursor: pointer;
		}
		#print{
			padding-bottom: 30px;
			color:white;
		}
		details{
			color: red;
		}
		a{
			color:white;
		}



 

	</style>
	

</head>
<body>
	<form method="post" action="">
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
					<a href="../view/addteacher.php">Add Teacher</a><br>
					<a href="../view/addadmin.php">Add Admin</a>

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
									<table>
										<tr><td><a style="color:red" href="../controller/updatemember_table.php">Update from list</a></td></tr>
										<tr><tr><td class="label">Search by username</td></tr>
										<tr>
											<td><input type="text" name="searchbox" value=""></td>
										</tr>
										<tr>
											<td><input type="submit" name="submit" value="search"></td>
										</tr>
										<tr><td align="left"><a style="color:red" href="../view/profile.php">back</a></td></tr>
										
										
<?php 

	if(isset($_POST['submit']))
	{
		$username=$_POST['searchbox'];
		$conn = mysqli_connect('localhost', 'root', '', 'online_library');

	$sql = "select * from member where username like '$username%'";
                    
	$result = mysqli_query($conn, $sql);

	
	echo "<table border=1> 

			<tr>
				<td>Username</td>
				<td>Update</td>
				
			</tr>
";

	while ($row = mysqli_fetch_assoc($result)) {
				 $username= $row['username'];
				   $password= $row['password'];
				   $cpassword=$row['cpassword'];
				   $name= $row['name'];
				   $email= $row['email'];
				   $dob= $row['dob'];
				   $gender=$row['gender'];
				   $blood_group=$row['blood_group'];
				   $picture=$row['picture'];
		
		echo 	"<tr>
					<td>{$row['username']}</td>

					<td>
						<a href=../controller/updateMemberDetails.php?username=$username>Update</a>
					</td>
					
				</tr>";


	}
	

	echo "</table>";
	}
	
	
?>
										



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