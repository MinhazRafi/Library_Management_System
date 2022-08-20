<html>
<head>
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="../css/mem.css">
	<script type="text/javascript" src="../js/registration_check.js"></script>
</head>
<body>
	<table height="100%" width="100%">
		<tr height="20%" class="c2">
			<td width="15%">
				<a href="../index.html"><img src="../asset/online_library.png", height="165px", width="260px"></a>
			</td>
			
			<td align="center" class="c1">
				<h1>Online Library System</h1>
				<h4>Borrow your desired book</h4>
			</td>
			
			<td width="15%" align="center">
				<a href="login.php">Login</a><br><br> 
				<a href="registration.php">Create Account</a>
			</td>
			
		</tr>
		
		<tr class="c2">
			<td align="center">
				<h3><u>Categories</u></h3>
				<ul align="left">
					<li><a href="bestseller.php"> Bestseller </a></li><br>
					<li><a href="educational.php"> Educational </a></li><br>
					<li><a href="selfhelp.php"> Self Help </a></li><br>
					<li><a href="islamic.php"> Islamic </a></li><br>
				</ul>
			</td>
			
			<td align="center">
				<form id="register" method="post" action="../controller/registration_check.php" onsubmit="validation()">
					<fieldset style="width:500px" class="register">
						<legend>Create Account</legend>
						<table>
							<tr>
								<td>Username : </td>
								<td><input id="inuser" type="text" name="username" onkeyup=" usernotnull()"><br><span id='userN'></span></td>
							</tr>
							<tr>
								<td>Password : </td>
								<td><input id="inpass" type="password" name="password" onkeyup="passnotnull()"><br><span id='pass'></span></td>
							</tr>
							<tr>
								<td>Confirm Password : </td>
								<td><input id="incpass" type="password" name="cpassword" onkeyup="cpassnotnull()"><br><span id='cpass'></span></td>
							</tr>
							<tr>
								<td>Name : </td>
								<td><input id="inname"  type="text" name="name" onkeyup="namenotnull()"><br><span id='name'></span></td>
							</tr>
							<tr>
								<td>Email : </td>
								<td><input id="inemail" type="email" name="email" onkeyup="emailnotnull()"><br><span id='email'></span></td>
							</tr>
							<tr>
								<td>Date of Birth : </td>
								<td><input id="indob" type="date" name="dob" onkeyup="dobnotnull()"><br><span id='dob'></span></td>
							</tr>
							<tr>
								<td>Gender : </td>
								<td>
									<input id="male" type="radio" name="gender" value="male" onclick="gendernotnull()"> Male
									<input id="female" type="radio" name="gender" value="female" onclick="gendernotnull()"> Female
									<input id="other" type="radio" name="gender" value="other" onclick="gendernotnull()"> Other  
									<br><span id='gender'></span>
								</td>
							</tr>
							<tr>
								<td>Blood Group : </td>
								<td>
									<select id="inbg" name="bg">
										<option value="" onclick="bgnotnull()"></option>
										<option value="O+" onclick="bgnotnull()">O+</option>
										<option value="O-" onclick="bgnotnull()">O-</option>
										<option value="A+" onclick="bgnotnull()">A+</option>
										<option value="A-" onclick="bgnotnull()">A-</option>
										<option value="B+" onclick="bgnotnull()">B+</option>
										<option value="B-" onclick="bgnotnull()">B-</option>
										<option value="AB+" onclick="bgnotnull()">AB+</option>
										<option value="AB-" onclick="bgnotnull()">AB-</option>
									</select>  
									<br><span id='bg'></span>
								</td>
							</tr>
							<tr>
								<td>User Type : </td>
								<td>
									<input id="member" type="radio" name="type" value="member" onclick="typenotnull()"> Member
									<input id="student" type="radio" name="type" value="student" onclick="typenotnull()"> Student
									<input id="teacher" type="radio" name="type" value="teacher" onclick="typenotnull()"> Teacher  
									<br><span id='type'></span>
								</td>
							</tr>

							<tr>
								<td></td>
								<td><div class="red"><input type="submit" name="Submit" value="Submit" ></div></td>
							</tr>
						</table>
					</fieldset>
				</form>
				<b>
				<?php

					if(isset($_GET['msg'])){
						$msg = $_GET['msg'];

						if($msg == 'null'){
							echo "Null value found. Please fill up the blank fields correctly!!!";
						}
						if($msg == 'invalid'){
							echo "Invalid request, please try again!!!";
						}
						if($msg == 'userpass'){
							echo "Username should be at least 3 characters!!!<br>
								  Password should be at least 5 characters!!!<br>
								  Password and Confirm Password should be similar!!!";
						}
						if($msg == 'register'){
							echo "Please register first!!!";
						}
						if($msg == 'reg'){
							echo "username is already available. Please register with different one!!!";
						}
					}
				?>
				</b>
			</td>
			<td></td>
		</tr>
	
	</table>

</body>
</html>