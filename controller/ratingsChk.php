<?php
	session_start();
	require_once('../model/db_config.php');

	if(isset($_POST['submit'])){

		if ($_POST['book'] != '' && $_POST['ratings'] != '') {

			$book = $_POST['book'];
			$ratings = $_POST['ratings'];

			$conn = getConnection();
			$query = "INSERT INTO ratings VALUES('{$book}','{$ratings}')";
			mysqli_query($conn, $query);

			header('location: ../view/ratings.php?msg=done');
		}else{
			header('location: ../view/ratings.php?msg=blank');
		}
		
	}

?>