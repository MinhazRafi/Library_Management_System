<?php
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Home</title>
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
				<h2>Welcome to Online Library System !!!</h2>
				<b> You can borrow book from here.<br><br>
				Create your own account, browse the website and borrow your desired book.
				</b><br><br>
				
				<table border="1" width="100%">
					<tr>
						<th>Bestseller</th>
						<th>Educational</th>
						<th>Self Help</th>
						<th>Islamic</th>
					</tr>
					<tr align="center">
						<td>
							Message<br>
							7 Habits of Highly Effective People<br>
							Productive Muslim<br>
							Rich Dad Poor Dad<br>
							Recharge Your Down Battery<br>
						</td>
						<td>
							Fundamentals of Electronics<br>
							Programming with C<br>
							Programming with C++<br>
							Programming with Java<br>
							Geometry with Vector Analysis<br>
						</td>
						<td>
							7 Habits of Highly Effective People<br>
							Productive Muslim<br>
							Rich Dad Poor Dad<br>
							Recharge Your Down Battery<br>
						</td>
						<td>
							Productive Muslim<br>
							Massage<br>
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

<?php
	
	}else{
		header('location: ../index.html');
	}
?>