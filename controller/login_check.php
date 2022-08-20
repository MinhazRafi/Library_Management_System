<?php
	session_start();
	require_once('../model/userModel.php');

	if (isset($_POST['Submit'])) {

		//$ck = 0;

		$username = $_POST['username'];
		$password = $_POST['password'];
		$type = $_POST['type'];

		if ($_POST['username'] == "" && $_POST['password'] == "") {
			//echo "Enter Correct Information";
			echo "<script> alert('Please fill all the Information'); window.location = '../view/login.php' </script>";
		}else{
			
			if ($type == "Admin") {
					
				$conn = mysqli_connect('localhost', 'root', '', 'online_library');
				$sql = "select * from admin where username = '$username' and password = '$password'"; 
				$result = mysqli_query($conn, $sql);

				if($result->num_rows == 1  ){

					$row = mysqli_fetch_assoc($result);
					
	                $_SESSION['name'] = $row['name'];
					$_SESSION['password']=$row['password'];
					$_SESSION['cpassword']=$row['cpassword'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['gender'] = $row['gender'];
					$_SESSION['dob'] = $row['dob'];
					$_SESSION['bg'] = $row['blood_group'];
					$_SESSION['picture'] = $row['picture'];


					setcookie('flag', true, time()+3600, '/');
					header('location: ../view/profile.php');
				}else{
					echo "<script> alert('Invalid Admin'); window.location = '../view/login.php' </script>";
				}

			}elseif ($type == "Student") {
					
				$conn = mysqli_connect('localhost', 'root', '', 'online_library');
				$sql = "select * from student where username = '$username' and password = '$password'"; 
				$result = mysqli_query($conn, $sql);

				if($result->num_rows == 1  ){

					$row = mysqli_fetch_assoc($result);
					
					$_SESSION['name'] = $row['name'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['gender'] = $row['gender'];
					$_SESSION['dob'] = $row['dob'];
					$_SESSION['bg'] = $row['blood_group'];
					$_SESSION['picture'] = $row['picture'];


					setcookie('flag', true, time()+3600, '/');
					header('location: ../view/dashboard.php');
				}else{
					echo "<script> alert('Invalid Student'); window.location = '../view/login.php' </script>";
				}

			}elseif ($type == "Teacher") {
					
				$conn = mysqli_connect('localhost', 'root', '', 'online_library');
				$sql = "select * from teacher where username = '$username' and password = '$password'"; 
				$result = mysqli_query($conn, $sql);

				if($result->num_rows == 1  ){

					$row = mysqli_fetch_assoc($result);
					
					$_SESSION['name'] = $row['name'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['gender'] = $row['gender'];
					$_SESSION['dob'] = $row['dob'];
					$_SESSION['bg'] = $row['blood_group'];
					$_SESSION['picture'] = $row['picture'];


					setcookie('flag', true, time()+3600, '/');
					header('location: ../view/index.php');
				}else{
					echo "<script> alert('Invalid Teacher'); window.location = '../view/login.php' </script>";
				}

			}elseif ($type == "Member") {
					
				$user = validation($username, $password, $type);
				if ($user != "") {
					setcookie('flag', 'true', time()+1800, '/');
					$_SESSION['Id'] = $user['Id'];
					$_SESSION['username'] = $user['username'];
					$_SESSION['password'] = $user['password'];
					$_SESSION['name'] = $user['name'];
					$_SESSION['email'] = $user['email'];
					$_SESSION['dob'] = $user['dob'];
					$_SESSION['gender'] = $user['gender'];
					$_SESSION['blood_group'] = $user['blood_group'];
					$_SESSION['picture'] = $user['picture'];
					header('location: ../view/home.php');				
				}else{
					echo "<script> alert('Invalid Member'); window.location = '../view/login.php' </script>";
					header('location: ../view/login.php?msg=wrong');
				}

			}elseif ($type == "Select") {
				
				echo "<script> alert('Please select user type'); window.location = '../view/login.php' </script>";

			}
		
		}

}

?>