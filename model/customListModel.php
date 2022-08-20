<?php
	require_once('db_configS.php');
	
	function register($category, $book_name,$author){

		$conn = getConnection();
		$sql = "INSERT INTO custom_list(category,book_name,author) VALUES ('$category','$book_name','$author')";
		$result = mysqli_query($conn, $sql);
		return true;
	
	}
?>