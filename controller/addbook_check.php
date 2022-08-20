<?php
	session_start();

	if(isset($_POST['submit'])){

		$bookName= $_POST['bookName'];
		$authorsName= $_POST['authorsName'];
		$publisher= $_POST['publisher'];
		$edition= $_POST['edition'];
		$status= $_POST['status'];
		$quantity= $_POST['quantity'];

		if($bookName != '' && $authorsName != '' && $publisher != ''&& $edition != ''&& $status!='' && $quantity!= ''){
			
			 $conn = mysqli_connect('localhost', 'root', '', 'Online_Library');
        $sql = "insert into book values('', '$bookName', '$authorsName', '$publisher', '$edition', '$status','$quantity')"; 
        $result = mysqli_query($conn, $sql);
			header('location: ../view/books.php');
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>