<?php
require_once('header.php');
include'../model/DB_config.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Feedback</title>
 
  <link rel="stylesheet" type="text/css" href="../css/FeedbackT.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
  <div class="Feedback">
    <center>
    <h1>If you have any suggesions or questions please comment below.</h1>
    <form style="" action="" method="post">
      <input class="text" type="text" name="comment" placeholder="Write something..."><br>  
      <br>
      <br>
      <input class="btn" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;">   
    </form>
  </center>
<br><br>
  <div class="scroll" >
    <?php
      if(isset($_POST['submit']))
      {
        $conn = getConnection();
        $sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
        if(mysqli_query($conn,$sql))
        {
          $sql="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
          $result=mysqli_query($conn,$sql);

          echo "<table class='table table-bordered'>";
          while ($row=mysqli_fetch_assoc($result)) 
          {
            echo "<tr>";
              echo "<td>"; echo $row['comment']; echo "</td>";
            echo "</tr>";
          }
        }

      }

      else
      {
         $conn = getConnection();
        $sql="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
          $result=mysqli_query($conn,$sql);

          echo "<table class='table table-bordered'>";
          while ($row=mysqli_fetch_assoc($result)) 
          {
            echo "<tr>";
              echo "<td>"; echo $row['comment']; echo "</td>";
            echo "</tr>";
          }
      }
    ?>
  </div>
  </div>
</body>
</html>
