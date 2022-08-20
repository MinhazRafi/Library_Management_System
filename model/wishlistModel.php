<?php
	session_start();
	require_once('db_config.php');

	if (isset($_GET['add'])) {

		$book = $_GET['add'];
		$username = $_SESSION['username'];

		$conn = getConnection();
		$query = "INSERT INTO wishlist VALUES('{$username}','{$book}')";
		mysqli_query($conn, $query);
	}

	if (isset($_GET['rmv'])) {
		
		$book = $_GET['rmv'];
		$username = $_SESSION['username'];

		$conn = getConnection();
		$query = "DELETE FROM wishlist WHERE book='{$book}' AND username='{$username}'";
		mysqli_query($conn, $query);
	}
?>