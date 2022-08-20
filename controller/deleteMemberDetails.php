<!DOCTYPE html>
<html>
<head>
	<title>Delete Member</title>
		<style type="text/css">
		body{
		    background:#C0C0C0;
		    margin:0;
		    padding:0;
		    font-family: sens-serif;
		    
		}
		.box{
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    background:black;
		    text-align: center;
		    border-radius: 10px;
		}
		.box legend{
		    color: red;
		    text-transform: uppercase;
		    font-weight: 500;
		}

		.box td{
			color: #fff;
		    text-transform: uppercase;
		    font-weight: 500;
		}


		.box input[type="submit"]{
		    border: 0;
		    background: none;
		    display: block;
		    margin: 20px auto;
		    text-align: center;
		    border: 2px solid #1dd1a1;
		    padding: 14px 40px;
		    outline: none;
		    color: #ffffff;
		    border-radius: 24px;
		    transition: 0.25s;
		    cursor: pointer;
		}
 

	</style>
	

</head>
<body>
		<form method="POST" action="" >
		<table width="100%" height="700px" border="1">
			<tr>
				<td>
					<table align="center" >
						<tr>
							<td>
								<fieldset class="box">
<?php

	if(isset($_POST['submit'])){
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
			    $sql = "delete from member where username='$username'";
				$result = mysqli_query($conn, $sql);

				header('location: ../view/deletemember.php');
			
		

	}

//print_r($_REQUEST);
$username=$_REQUEST['username'];
//echo $name;

$conn = mysqli_connect('localhost', 'root', '', 'online_library');
$sql="select* from member where username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

	echo "<form method=POST action=><fieldset><legend> Member Details</legend>
	<table>
	<tr>
	<td>
	Name: {$row['username']}
	</td>
	</tr>

	<tr>
	<td>
	password: {$row['password']}
	</td>
	</tr>

	<tr>
	<td>
	Email: {$row['email']}
	</td>
	</tr>
	</table>
	<hr>
	<input type=submit name=submit value=Delete>
	</fieldset>
	</from>
	";
	//echo $row['name'];
	//echo $row['buyingPrice'];
	//echo $row['sellingPrice'];


//$conn = mysqli_connect('localhost', 'root', '', 'product_db');

//$sql = "delete from products where name='$name'"; 

//$result = mysqli_query($conn, $sql);



//header('location: ../VIEW/displayProduct.php');
?>
								</fieldset>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

