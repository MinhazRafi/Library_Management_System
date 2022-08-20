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
  
	
	<div class="book">
		<center><h2>History of Books</h2>
	<?php
	   $conn = getConnection();
        $sql="SELECT * FROM `book`";
        $result=mysqli_query($conn,$sql);
        echo"<table class='table table-bordered table-hover'>";
        echo"<tr style='background-color:teal;'>";
        echo "<th>"; echo"ID";echo"</th>";
        echo "<th>"; echo"Book Name";echo"</th>";
        echo "<th>"; echo"Authors Name";echo"</th>";
       
        echo"</tr>";
        while($row=mysqli_fetch_assoc($result))
        {
        	echo"<tr>";
        	echo"<td>";echo $row['bid'];echo"</td>";
        	echo"<td>";echo $row['bookName'];echo"</td>";
        	echo"<td>";echo $row['authorsName'];echo"</td>";
        	
        	echo"</tr>";
       }
       echo "</table>";
        
	;?>
    </center>
	</div>
</body>
</html>