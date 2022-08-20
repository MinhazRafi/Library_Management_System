<?php
require_once('../view/header.php');
include'../model/DB_config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Books</title>
    <link rel="stylesheet" type="text/css" href="../css/search.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body>
  <div class="srch">
     <form class="c1" method="post" name="frm">
        
             <input class="c2" type="text" name="search" placeholder="Search books.." required="">
             <button  type="submit" name="submit" class="btn">
                 <span class="fa fa-search"></span>
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
        echo "<th>"; echo"  Publisher";echo"</th>";
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
        echo "<th>"; echo"  Publisher";echo"</th>";
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
        
  ?>
  </div>
</body>
</html>