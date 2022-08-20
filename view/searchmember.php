
<?php

$search=$_POST['search'];
		$conn = mysqli_connect('localhost', 'root', '', 'online_library');

	$sql = "select * from member where username like '%{$search}%'";
                    
	$result = mysqli_query($conn, $sql);

	
	echo "<table border=1> 

			<tr>
				<td>Username</td>
				<td>Delete</td>
				
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
						<a href=../controller/deleteMemberDetails.php?username=$username>delete</a>
					</td>
					
				</tr>";


	}
	

	echo "</table>";
	
	

/*
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$conn = mysqli_connect('localhost', 'root', '', 'HRMS');
	$sql = "select * from employees where username like '%$username'"; 
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows == 1) {
		
		$sql = "select * from employees where username like '%{$username}' and password like '%{$password}'"; 
		$result = mysqli_query($conn, $sql);

		if($result->num_rows == 1  ){

			echo "Success";
		}else {
			echo "Wrong Username or Password";
		}

	}

	*/


?>
