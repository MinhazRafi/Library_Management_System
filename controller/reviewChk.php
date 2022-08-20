<?php
	session_start();
	require_once('../model/db_config.php');

	if(isset($_POST['submit'])){

		if ($_POST['book'] != '' && $_POST['review'] != '') {

			$book = $_POST['book'];
			$review = $_POST['review'];

			$conn = getConnection();
			$query = "INSERT INTO review VALUES('{$book}','{$review}')";
			mysqli_query($conn, $query);

			header('location: ../view/review.php?msg=done');			
		}else{
			header('location: ../view/review.php?msg=blank');
		}
	}

?>