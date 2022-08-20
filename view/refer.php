<?php 
	session_start();
?>

<html>
<head>
	<title>Refer Friends</title>
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
				<a href="profileM.php">Edit Profile</a><br><br>
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
				<table width="40%">
					<tr>
						<th><h2><u>Refer Your Friends</u></h2><th>
					</tr>
					<tr align="center">
						<td>
						<b>Refer your friend by using this URL below :</b><br><br>
						www.online-library.com/?user=<?php echo $_SESSION['username']; ?>
						</td>
					</tr>
				</table>
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

</body>
</html>