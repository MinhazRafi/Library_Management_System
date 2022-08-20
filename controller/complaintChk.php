<?php
	session_start();
	require_once('../model/db_config.php');

	if(isset($_POST['submit'])){

		if ($_POST['complaint'] != null) {

			$username = $_SESSION['username'];
			$complaint = $_POST['complaint'];

			$conn = getConnection();
			$query = "INSERT INTO complaint VALUES('{$username}','{$complaint}')";
			mysqli_query($conn, $query);

			header('location: ../view/complaint.php?msg=done');
		}else{
			header('location: ../view/complaint.php?msg=blank');
		}

	}

?>