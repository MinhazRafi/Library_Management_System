<?php
	session_start();
	require_once('../model/userModel.php');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	deleting($id);
	header('location: logoutM.php');
?>