<?php
require_once('../view/header.php');
include'../model/DB_config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Books</title>
<link rel="stylesheet" type="text/css" href="../css/deleteBooks.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<!--_________________sidenav_______________-->
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

 <div style="color: white; margin-left: 60px; font-size: 20px;">

</div>

 <a href="editProfile.php">Profile</a>
<a href="../view/addBookT.php">Add Books</a>
<a href="books.php">Book</a>
<a href="reportT.php">Issue Information</a>
</div>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
document.getElementById("mySidenav").style.width = "300px";
document.getElementById("main").style.marginLeft = "300px";
document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0";
document.getElementById("main").style.marginLeft= "0";
document.body.style.backgroundColor = "white";
}
</script>
<div class="srch">
<form class="c1" method="post" name="frm">
<input class="c2" type="text" name="search" placeholder="seaech books.." required="">
<button type="submit" name="submit" class="btn">
<span class="fa fa-search"></span>
</button>
</form>
<form class="c1" method="post" name="frm">
<input class="c2" type="text" name="bid" placeholder="Enter Book ID.." required="">
<button type="submit" name="submit1" class="btn">Delete
</button>
</form>
</div>
<div class="book">
<center>
<h2>List of Books</h2>
</center>
<?php

 if(isset($_POST['submit']))
{
$conn = getConnection();
$sql="SELECT * from `book` where bookName like '%$_POST[search]%' ";
$result=mysqli_query($conn,$sql);

 if(mysqli_num_rows($result)==0)
{
echo"No book found.Try again...";
}

 else{

 echo"<td>";echo"<table class='table table-bordered table-hover'>";
echo"<tr style='background-color:teal;'>";
echo "<th>"; echo"ID";echo"</th>";
echo "<th>"; echo"Book Name";echo"</th>";
echo "<th>"; echo"Authors Name";echo"</th>";
echo "<th>"; echo" Publisher";echo"</th>";
echo "<th>"; echo"Edition";echo"</th>";
echo "<th>"; echo"Status";echo"</th>";
echo "<th>"; echo"Quantity";echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_assoc($result))
{
echo"<tr>";
echo"<td>";echo $row['bid'];echo"</td>";
echo"<td>";echo $row['bookName'];echo"</td>";
echo"<td>";echo $row['authorsName'];echo"</td>";
echo"<td>";echo $row['publisher'];echo"</td>";
echo"<td>";echo $row['edition'];echo"</td>";
echo"<td>";echo $row['status'];echo"</td>";
echo"<td>";echo $row['quantity'];echo"</td>";
echo"</tr>";
}
echo "</table>";
}

 }
else{
$conn = getConnection();
$sql="SELECT * FROM `book`";
$result=mysqli_query($conn,$sql);
echo"<table class='table table-bordered table-hover'>";
echo"<tr style='background-color:teal;'>";
echo "<th>"; echo"ID";echo"</th>";
echo "<th>"; echo"Book Name";echo"</th>";
echo "<th>"; echo"Authors Name";echo"</th>";
echo "<th>"; echo" Publisher";echo"</th>";
echo "<th>"; echo"Edition";echo"</th>";
echo "<th>"; echo"Status";echo"</th>";
echo "<th>"; echo"Quantity";echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_assoc($result))
{
echo"<tr>";
echo"<td>";echo $row['bid'];echo"</td>";
echo"<td>";echo $row['bookName'];echo"</td>";
echo"<td>";echo $row['authorsName'];echo"</td>";
echo"<td>";echo $row['publisher'];echo"</td>";
echo"<td>";echo $row['edition'];echo"</td>";
echo"<td>";echo $row['status'];echo"</td>";
echo"<td>";echo $row['quantity'];echo"</td>";
echo"</tr>";
}
echo "</table>";
}
if(isset($_POST['submit1']))
{

 $conn = getConnection();
$sql="DELETE FROM `book` where bid='$_POST[bid]' ";
$result=mysqli_query($conn,$sql);


echo "<script> alert('Delete Successful..'); window.location = '../view/deleteBook.php' </script>";

}
?>

 </div>
</body>
</html>