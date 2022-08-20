<?php
	session_start();
	require_once('../model/userModel.php');

	// registration check
	if(isset($_POST['Submit'])){

	   $username	= $_POST['username'];
	   $password	= $_POST['password'];
	   $cpassword	=$_POST['cpassword'];
	   $name		= $_POST['name'];
	   $email		= $_POST['email'];
	   $dob			= $_POST['dob'];
	   $gender		=$_POST['gender'];
	   $blood_group	=$_POST['bg'];
	   $picture		='dp.png';
	   $type		=$_POST['type'];
	   
	   if($username !=''  && $password!=''&& $cpassword!='' && $name!='' && $email!='' && $dob!='' && $gender!='' && $blood_group!='' && $type!=''){
		
			if($password==$cpassword && strlen($username)>2 && strlen($password)>4){
				$user = ['username'=>$username, 'password'=>$password, 'cpassword'=>$cpassword, 'name'=>$name, 'email'=>$email,'dob'=>$dob, 'gender'=>$gender, 'blood_group'=>$blood_group, 'picture'=>$picture, 'type'=>$type];
				if (register($user)) {
					header("location:../view/login.php");
				}else{
					header('location: ../view/registration.php?msg=reg');
				}
			}else{
				header('location:../view/registration.php?msg=userpass');
			}

		}else{
			header('location: ../view/registration.php?msg=null');
		}
	}else{
		header('location: ../view/registration.php?msg=invalid');
	}
?>