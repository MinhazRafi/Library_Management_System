<html>
<head>
	<title>Islamic</title>
	<link rel="stylesheet" type="text/css" href="../css/mem.css">
	<script type="text/javascript" src="../js/booksM.js"></script>
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
			
			<?php
				session_start();
				if(isset($_COOKIE['flag'])){
			?>
			<td width="15%" align="center">
				<a href="profileM.php">Edit Profile</a><br><br>
				<a href="../controller/logoutM.php">Logout</a>
			</td>
			<?php
				}else{
			?>
			<td width="15%" align="center">
				<a href="login.php">Login</a><br><br> 
				<a href="registration.php">Create Account</a>
			</td>
			<?php
				}
			?>
			
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
						<th><h2><u>Islamic Books</u></h2><th>
					</tr>
					<tr align="center">
						<td>
							<input type="text" name="book" id="book" placeholder="Search" onkeyup="islamic()">
							<hr>
						</td>
					</tr>
					<tr>
						<td align="center">
							<ol>
								<b id="result">
									<?php
										require_once('../model/db_config.php');

										$conn = getConnection();
										$query = "SELECT bookname FROM books WHERE category='islamic'";
										$result = mysqli_query($conn, $query);

										while ($data = mysqli_fetch_assoc($result)){ ?>
											<li><?=$data['bookname']?></li><br>
									<?php
										}
									?>
								</b><br>
							</ol>
						</td>
					</tr>
				</table>
			</td>
			<?php
				if(isset($_COOKIE['flag'])){
			?>
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
			<?php
				}else{
			?>
			<td></td>
			<?php
				}
			?>
		</tr>
	
	</table>

</body>
</html>