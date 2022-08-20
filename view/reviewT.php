<?php
require_once('header.php');
include'../model/DB_config.php';

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review</title>
    <link rel="stylesheet" type="text/css" href="../css/reviewsT.css">
    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <form method="post" action="../controller/reviewsT_check.php" >
      <div class="stars">
        <center><h1><label>Review</label></h1></center><br>
        <label>Book name:</label><br>
        <input type="text" name="bookName" class="c1">
        <br><br>
        <label>Book review</label>
     <input type="text" name="reviews" class="c1" placeholder="Enter your review">
        
      <div>

        <input type="submit" name="submit" class="btn">
      </div>
       </div>
    </form>
</body>
</html>