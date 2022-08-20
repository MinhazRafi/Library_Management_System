<?php
	
	session_start();

	require_once('../model/customListModel.php');

	if (isset($_POST['add'])) {

		$category = $_POST['category'];
		$book_name = $_POST['book_name'];
		$author = $_POST['author'];

			if($category != '' && $book_name != '' && $author != ''){
			

			$status = register($category, $book_name,$author);

			if($status){
				
				$_SESSION['category'] = $category;
				$_SESSION['book_name'] = $book_name;
				$_SESSION['author'] = $author;
				setcookie('flag', 'true', time()+3600, '/');
				header('location: ../view/dashboard.php');
			}else{
				echo 'invalid input';
			}


		}else{
			echo "Provide information please...";
		}
	}else{
		echo "invalid request...";
	}

?>
		
			


