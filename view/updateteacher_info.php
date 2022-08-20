<!DOCTYPE html>
<html>
<head>
	<title>Update Teacher</title>
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

 

	</style>
	

</head>
<body>
	<form method="POST" action="" >
		<table width="100%" height="700px" border="1">
			<tr>
				<td>
					<table align="center" >
						<tr>
							<td>
								<fieldset class="box">
									<table>
										<tr><td><a style="color:red" href="../controller/updateteacher_table.php">Update from list</a></td></tr>
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

	$sql = "select * from teacher where username like '$username%'";
                    
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
						<a href=../controller/updateTeacherDetails.php?username=$username>Update</a>
					</td>
					
				</tr>";


	}
	

	echo "</table>";
	}
	
	
?>
										
										

									</td>
									</tr>
									</table>
								</fieldset>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>