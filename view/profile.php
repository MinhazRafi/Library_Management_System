<?php 
session_start();
if(!isset($_COOKIE['flag']))
	{
		
		header('location:../view/login.php');
	}
	else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	
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
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    background:black;
		    text-align: center;
		    border-radius: 10px;
		    
		}

		 details{
			padding: 30px;

			color:red;
		}
		a{
			color: white;
		}

		
	</style>
</head>
<body>
		<table width="80%">
		<tr>
		<td>
	<form method="POST" action="../controller/login_check.php" >
		<table width="100%" height="700px">
			<tr>
				<td>
					<table align="center" >
						<tr>
							<td>
								<fieldset class="box">
									<form method="post" action=""></form>
	<table width="100%">
		
		<tr>
			<td>
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
				</details>
			
			</td>
			<td valign="top" width="50%">
				<?php $link=$_SESSION['username'];
				
				//print_r($_SESSION);
				//echo "Welcome, ".$link;
				//print_r($_SESSION['check']);
				?>
		

                <h3 style="color: white"><?php echo "Welcome,"?>
                 <a href="../view/about.php"><?php  echo $link ?><img src="../asset/<?php echo $_SESSION['picture']; ?>" width='100px'></a></h3>

             
			</td>
			<td width="10%" valign="top"> <a href="../controller/logout_check.php">Logout</a></td>

		</tr>

					
	</table>
								</fieldset>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		</td>
       </tr>
      </table>
	</form>
</body>
</html>
<?php

	}
	
?>

