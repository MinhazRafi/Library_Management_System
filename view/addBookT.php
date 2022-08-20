<?php
require_once('header.php');
include'../model/DB_config.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>add book</title>
    <link rel="stylesheet" type="text/css" href="../css/addBookT.css">
    <script type="text/javascript" src="../js/addbook_check.js"></script>
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
  <a href="books.php">Books</a>
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
  <form id ="addBook" method="post" action="../controller/addbook_check.php" onsubmit="return validation()">
  <div class="book">
    <center><h2>Add book in your book list</h2></center>
    <div class="c1">
      <label><b>Book Name:</b></label>
      <input type="text" name="bookName" id="bn" onkeyup=" bookNamenull()"><br><br>
      <span id='bookN'></span><br>
      <label><b>Authors Name:</b></label>
      <input type="text" name="authorsName" id="an" onkeyup=" authorsNamenull()"><br><br>
      <span id='authorsN'></span><br>
      <label><b>Publisher:</b></label>
      <input type="text" name="publisher" id="p" onkeyup=" publishernull()"><br><br>
      <span id='publishers'></span><br>
      <label><b>Edition:</b></label>
      <input type="text" name="edition" id="e" onkeyup="editionnull()"><br><br>
      <span id='editions'></span><br>
      <label><b> Status:</b></label>
      <input type="text" name=" status" id="s" onkeyup="  statusnull()"> <br><br>
      <span id='statuss'></span><br>
      <label><b>Quantity:</b></label>
      <input type="number" name="quantity" id="q" onkeyup=" quantitynull()"> <br><br>
      <span id='quantitys'></span><br>
      <input type="submit" name="submit" value=" submit" style="background-color: teal;">
    </div>
</body>
</html>

<?
