<?php	
	session_start();
	require_once('../model/userModel.php');
	
	// edit profile
	if(isset($_POST['update'])){

		$id= $_SESSION['Id'];
		$username= $_SESSION['username'];
		$name= $_POST['name'];
		$email= $_POST['email'];
		$dob= $_POST['dob'];
		$gender= $_POST['gender'];
		$blood_group= $_POST['blood_group'];
		
		if(isset($_FILES['picture']) && $_FILES['picture']['size'] > 0){
			$filename = $_FILES['picture']['name'];
			$filesize = $_FILES['picture']['size'];
			$filetemp = $_FILES['picture']['tmp_name'];
			$ext = explode('.', $filename);
			$location = '../asset/images/'.$username.'.'.end($ext);
			$picture = $username.'.'.end($ext);
		}else{
			$picture = $_SESSION['picture'];
		}
		
		$user = ['Id'=>$id, 'username'=>$username, 'name'=>$name, 'email'=>$email, 'dob'=>$dob, 'gender'=>$gender, 'blood_group'=>$blood_group, 'picture'=>$picture];
		editProfile($user);

		move_uploaded_file($filetemp, $location);
		$_SESSION['name'] = $name;
		$_SESSION['email'] = $email;
		$_SESSION['dob'] = $dob;
		$_SESSION['gender'] = $gender;
		$_SESSION['blood_group'] = $blood_group;
		$_SESSION['picture'] = $picture;

		header('location: ../view/profileM.php?msg=done');
	}else{
		header('location: ../view/profileM.php?msg=invalid');
	}
?>