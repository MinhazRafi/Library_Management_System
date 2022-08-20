<?php
	session_start();
	$Id = $_SESSION['Id'];
?>

<html>
<head>
	<title>Edit Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/mem.css">
</head>
<body>
	<table height="100%" width="100%">
		<tr height="20%" class="c2">
			<td width="15%">
				<a href="home.php"><img src="../asset/online_library.png", height="165px", width="260px"></a>
			</td>
			
			<td align="center" class="c1">
				<h1>Online Library System</h1>
				<h4>Borrow your desired book</h4>
			</td>
			
			<td width="15%" align="center">
				<button onclick="deleteAcc()">Delete Account?</button><br><br>
				<a href="../controller/logoutM.php">Logout</a>
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
				<img src="../asset/images/<?php echo $_SESSION['picture']; ?>" height="150px" width="150px" border="1">
				
				<form method="post" action="../controller/editProfile.php" enctype="multipart/form-data">
					<fieldset style="width:500px">
						<legend>Edit Profile</legend>
						<table>
							<tr>
								<td>User ID : </td>
								<td><b><?php echo $_SESSION['Id']; ?></b></td>
							</tr>
							<tr>
								<td>Username : </td>
								<td><b><?php echo $_SESSION['username']; ?></b></td>
							</tr>
							<tr>
								<td>Name : </td>
								<td><input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"></td>
							</tr>
							<tr>
								<td>Email : </td>
								<td><input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"></td>
							</tr>
							<tr>
								<td>Date of Birth : </td>
								<td><input type="date" name="dob"  value="<?php echo $_SESSION['dob']; ?>"></td>
							</tr>
							<tr>
								<td>Gender : </td>
								<td>
									<input type="radio" name="gender" value="male" <?php if($_SESSION['gender']=="male"){ echo 'checked'; }?>> Male
									<input type="radio" name="gender" value="female" <?php if($_SESSION['gender']=="female"){ echo 'checked'; }?>> Female
									<input type="radio" name="gender" value="other" <?php if($_SESSION['gender']=="other"){ echo 'checked'; }?>> Other
								</td>
							</tr>
							<tr>
								<td>Blood Group : </td>
								<td>
									<select name="blood_group">
										<option value="O+" <?php if($_SESSION['blood_group']=="O+"){ echo 'selected'; }?>>O+</option>
										<option value="O-" <?php if($_SESSION['blood_group']=="O-"){ echo 'selected'; }?>>O-</option>
										<option value="A+" <?php if($_SESSION['blood_group']=="A+"){ echo 'selected'; }?>>A+</option>
										<option value="A-" <?php if($_SESSION['blood_group']=="A-"){ echo 'selected'; }?>>A-</option>
										<option value="B+" <?php if($_SESSION['blood_group']=="B+"){ echo 'selected'; }?>>B+</option>
										<option value="B-" <?php if($_SESSION['blood_group']=="B-"){ echo 'selected'; }?>>B-</option>
										<option value="AB+" <?php if($_SESSION['blood_group']=="AB+"){ echo 'selected'; }?>>AB+</option>
										<option value="AB-" <?php if($_SESSION['blood_group']=="AB-"){ echo 'selected'; }?>>AB-</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Change Profile Picture : </td>
								<td>
									<input type="file" name="picture">
								</td>
							</tr>
							
							<tr>
								<td></td>
								<td><input type="submit" name="update" value="Update"></td>
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
						if($msg == 'done'){
							echo "Profile updated successfully!!!";
						}
						if($msg == 'invalid'){
							echo "Invalid request, please try again!!!";
						}
						if($msg == 'wrong'){
							echo "Please fill up correctly!!!";
						}
					}
				?>
				</b>
			</td>
			<td>
				<ul align="left">
					<li><a href="history.php"> History </a></li><br>
					<li><a href="wishlist.php"> Wishlist </a></li><br>
					<li><a href="customlist.php"> Custom List </a></li><br>
					<li><a href="ratings.php"> Ratings </a></li><br>
					<li><a href="review.php"> Review </a></li><br>
					<li><a href="refer.php"> Refer Friends </a></li><br>
					<li><a href="point.php"> Redeem Points </a></li><br>
					<li><a href="complaint.php"> Complaint </a></li><br>
				</ul>
			</td>
		</tr>
	
	</table>

	<script type="text/javascript">
		function deleteAcc() {
			let text = prompt("To delete your account, type 'yes' or 'YES' here :", "");
			if (text == "yes" || text == "YES") {
			  	window.location = "../controller/delete_account.php?id=<?=$Id?>";
			}
		}
	</script>

</body>
</html>