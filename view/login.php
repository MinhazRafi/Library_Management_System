<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/mem.css">
	<style type="text/css">
		.box{
		    position: absolute;
		    transform: translate(-50%, -50%);
		    background:black;
		    text-align: center;
		    border-radius: 10px;
		}
		.box h2{
		    color: #fff;
		    text-transform: uppercase;
		    font-weight: 500;
		}
		.label{
			color: #fff;
		    text-transform: uppercase;
		    font-weight: 500;
		}
		.box input[type = "text"], .box input[type = "password"]{
		    border: 0;
		    background: none;
		    text-align: center;
		    border: 2px solid #009900;
		    padding: 6px 6px;
		    outline: none;
		    color: #48dbfb;
		    border-radius: 15px;
		}
		.box select{
			border: 0;
		    background: none;
		    text-align: center;
		    border: 2px solid #48dbfb;
		    padding: 6px 6px;
		    outline: none;
		    color: green;
		    border-radius: 15px;
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
		.box input[type="submit"]:hover{
		    background: #1dd1a1;
		}
		.box a{
			color: #FFFF99;
		}
	</style>
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
				
				<form method="post" action="../controller/login_check.php">
					<table align="center">
						<tr>
							<td>
								<fieldset class="box">
									<table>
										<tr>
											<td colspan="2">
												<h2 align="center">Login</h2>
											</td>
										</tr>

										<tr>
											<td class="label">
												User type
											</td>
											<td>
												<select name="type" id="type">
													<option value="Select">Select</option>
													<option value="Admin">Admin</option>
													<option value="Teacher">Teacher</option>
													<option value="Student">Student</option>
													<option value="Member">Member</option>
												</select>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<br>
											</td>
										</tr>
										<tr>
											<td class="label">
												Username
											</td>
											<td>
												<input type="text" name="username" id="username" value=""> <br>
												<span style="color: red" id="user"> </span>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<br>
											</td>
										</tr>
										<tr>
											<td class="label">
												Password
											</td>
											<td>
												<input type="password" name="password" id="password" value=""> <br>
												<span style="color: red" id="pass"> </span>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<b style="color: white;">
												<?php

													if(isset($_GET['msg'])){
														$msg = $_GET['msg'];

														if($msg == 'null'){
															echo "Null value found. Please provide correct username and password!!!";
														}
														if($msg == 'wrong'){
															echo "Incorrect username or password or type!!!";
														}
														if($msg == 'invalid'){
															echo "Invalid request, please try again!!!";
														}
														if($msg == 'ok'){
															echo "Registration completed. Please Login!!!";
														}
													}
												?>
												</b>
												<br>
												<hr>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<div id="result"></div>
												<input type="submit" name="Submit" value="Login">
											</td>
										</tr>
										<tr>
											<td align="center" colspan="2">
												<a href="registration.php">Create an Account?</a>
											</td>
										</tr>
									</table>
								</fieldset>
							</td>
						</tr>
					</table>
				</form>
			</td>
			<td></td>
		</tr>
	
	</table>

</body>
</html>