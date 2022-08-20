<?php

	session_start();
	if (isset($_POST['submit'])) {

		$file_info = $_FILES['image'];
		$file = $file_info['name'];
		$filename = $file_info['tmp_name'];
		$destination = '../asset/' . $file_info['name'];
		$username = $_SESSION['username'];

		if(move_uploaded_file($filename, $destination)){

			$conn = mysqli_connect('localhost', 'root', '', 'online_library');
			$sql = "update admin set picture = '$file' where username = '$username'";
			$result = mysqli_query($conn, $sql);

			if($result == 1){

				$sql1 = "select * from admin where username = '$username'"; 
				$result1 = mysqli_query($conn, $sql1);

				$row = mysqli_fetch_assoc($result1);

				$_SESSION['picture'] = $row['picture'];

				header('location: ../view/changeProfilePicture.php');
			}
			else
			{

				echo "Failed to Update";
			}
			
		}
	}
?>