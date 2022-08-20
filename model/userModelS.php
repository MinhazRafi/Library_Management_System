<?php
	require_once('db_configS.php');

	function register($user)
	{
		$conn = getConnection();
		$sql = "SELECT username FROM student";
		$result = mysqli_query($conn, $sql);

		while($username = mysqli_fetch_assoc($result)){
			if ($username['username'] == $user['username']) {
				return false;
				break;
			}
		}

		$query = "INSERT INTO student VALUES('','{$user['username']}', 
				'{$user['password']}','{$user['cpassword']}', '{$user['name']}', '{$user['email']}', '{$user['dob']}', '{$user['gender']}', '{$user['blood_group']}', '{$user['picture']}')";
		mysqli_query($conn, $query);
		return true;
	}

	function validation($username, $password, $type)
	{
		if($type=="Member"){
			$conn = getConnection();
			$query = "SELECT * FROM member WHERE username='{$username}' and password='{$password}'";
			$result = mysqli_query($conn, $query);
			$user = mysqli_fetch_assoc($result);		
			return $user;			
		}
		if($type=="Admin"){
			$conn = getConnection();
			$query = "SELECT * FROM admin WHERE username='{$username}' and password='{$password}'";
			$result = mysqli_query($conn, $query);
			$user = mysqli_fetch_assoc($result);		
			return $user;			
		}
		if($type=="Teacher"){
			$conn = getConnection();
			$query = "SELECT * FROM teacher WHERE username='{$username}' and password='{$password}'";
			$result = mysqli_query($conn, $query);
			$user = mysqli_fetch_assoc($result);		
			return $user;			
		}
		if($type=="Student"){
			$conn = getConnection();
			$query = "SELECT * FROM student WHERE username='{$username}' and password='{$password}'";
			$result = mysqli_query($conn, $query);
			$user = mysqli_fetch_assoc($result);		
			return $user;			
		}
	}

?>