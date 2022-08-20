<?php

if(isset($_POST['Submit'])){
  $username= $_REQUEST['username'];
   $password= $_POST['password'];
   $cpassword=$_POST['cpassword'];
   $name= $_POST['name'];
   $email= $_POST['email'];
   $dob= $_POST['dob'];
   $gender=$_POST['gender'];
   $blood_group=$_POST['bg'];
   $picture='dp.png';

		



				$conn = mysqli_connect('localhost', 'root', '', 'online_library');
				$sql = "update student set password='$password',cpassword='$cpassword',name='$name',email='$email', dob='$dob', gender='$gender', blood_group='$blood_group' where username='$username'"; 
				$result = mysqli_query($conn, $sql);

				 echo "<script> alert('update successful'); window.location = '../view/updatestudent_info.php' </script>";
				
			
		
			
		

	}

	?>