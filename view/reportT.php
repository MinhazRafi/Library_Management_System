<?php
require_once('header.php');
include'../model/DB_config.php';
?>
<!DOCTYPE html>
<html>
<head>
 <title>Ajak</title>
 <style type="text/css">
      .rep{
      padding: 50px;
      margin-top: 150px;
   padding-bottom: 30px;
   margin-left: 500px;
   margin-right: 500px;
   align-content: center;
      width: 600px;
     height: 300px;
      background-color: black;
      opacity: .9;
      color: white;
      align-content: center;
    }
    h1{
         align-content: center;
      color: darkviolet;
    }
    .report{
      width: 100%;
      height: 100px;
    }
    .btn{
      margin-left: 120px;
      width: 50%;
      height: 40px;
      background-color: green;
    }
    .sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
 </style>
 <script type="text/javascript" src="reportT.js"></script>
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
  <a href="reports.php">Issue Information</a>
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

<div class="rep">
 	<center><h1>Report your issue</h1></center><br>
    <form method="post" action="../controller/reportT_check.php" name="forms" onsubmit="re(this);return false">
 	<input type="text" name="report" id="report" value="" class="report" placeholder="Enter your issue"><br><br><br>
 	<input type="submit" class="btn" name="submit" value="submit" >
		</form>			

    



</body>
</html>