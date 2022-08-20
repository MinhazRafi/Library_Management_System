<?php
require_once('header.php');
include'../model/DB_config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
     <link rel="stylesheet" type="text/css" href="../css/book.css">
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
  <a href="deleteBook.php">Delete Book</a>
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
	
	<div class="book">
		<center><h2>List of Books</h2></center>
	<?php
	   $conn = getConnection();
        $sql="SELECT * FROM `book`";
        $result=mysqli_query($conn,$sql);
        echo"<table class='table table-bordered table-hover'>";
        echo"<tr style='background-color:teal;'>";
        echo "<th>"; echo"ID";echo"</th>";
        echo "<th>"; echo"Book Name";echo"</th>";
        echo "<th>"; echo"Authors Name";echo"</th>";
        echo "<th>"; echo"Publisher";echo"</th>";
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
        
	;?>
	</div>
</body>
</html>