<?php
session_start();

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
				$sql = "update admin set password='$password',cpassword='$cpassword',name='$name',email='$email', dob='$dob', gender='$gender', blood_group='$blood_group' where username='$username'"; 
				$result = mysqli_query($conn, $sql);

				if($result == 1 ){

					$conn = mysqli_connect('localhost', 'root', '', 'online_library');
					$sql1="select* from admin where username='$username'";
					$result1 = mysqli_query($conn, $sql1);


					$row = mysqli_fetch_assoc($result1);
					$_SESSION['name'] = $row['name'];
					$_SESSION['password']=$row['password'];
					$_SESSION['cpassword']=$row['cpassword'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['gender'] = $row['gender'];
					$_SESSION['dob'] = $row['dob'];
					$_SESSION['bg'] = $row['blood_group'];
					$_SESSION['picture'] = $row['picture'];


				
				
			}

				 echo "<script> alert(' update successful'); window.location = '../view/about.php' </script>' ";
				
			
		
			
		

	}

	?>