<?php
	session_start();
	require_once('db_config.php');

	if (isset($_GET['islamic'])) {

		$book = $_GET['islamic'];
		$conn = getConnection();
		$query = "SELECT bookname FROM books WHERE category='islamic' AND bookname LIKE '%{$book}%'";
		$result = mysqli_query($conn, $query);
		$books = [];

		while ($data = mysqli_fetch_assoc($result)){
			$books[] = $data;
		}

		header('Content-type: application/json');
		echo json_encode($books);
	}

	if (isset($_GET['bestseller'])) {

		$book = $_GET['bestseller'];
		$conn = getConnection();
		$query = "SELECT bookname FROM books WHERE bestseller='yes' AND bookname LIKE '%{$book}%'";
		$result = mysqli_query($conn, $query);
		$books = [];

		while ($data = mysqli_fetch_assoc($result)){
			$books[] = $data;
		}

		header('Content-type: application/json');
		echo json_encode($books);
	}

	if (isset($_GET['educational'])) {

		$book = $_GET['educational'];
		$conn = getConnection();
		$query = "SELECT bookname FROM books WHERE category='educational' AND bookname LIKE '%{$book}%'";
		$result = mysqli_query($conn, $query);
		$books = [];

		while ($data = mysqli_fetch_assoc($result)){
			$books[] = $data;
		}

		header('Content-type: application/json');
		echo json_encode($books);
	}

	if (isset($_GET['selfhelp'])) {

		$book = $_GET['selfhelp'];
		$conn = getConnection();
		$query = "SELECT bookname FROM books WHERE category='self help' AND bookname LIKE '%{$book}%'";
		$result = mysqli_query($conn, $query);
		$books = [];

		while ($data = mysqli_fetch_assoc($result)){
			$books[] = $data;
		}

		header('Content-type: application/json');
		echo json_encode($books);
	}
?>