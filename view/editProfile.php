<?php
require_once('header.php');
include'../model/DB_config.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>profile</title>
 
  <link rel="stylesheet" type="text/css" href="../css/editProfile.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
	  <div class="edit">
    <h2>Edit Profile</h2>

    <center>
      <span >Welcome</span>
      </center>
      <form action="" method="post">
        <label><h4><b>Id:</b></h4></label>
        <input  class="forms" type="text" name="Id" placeholder="Enter Id"><br>
        <label><h4><b>Name:</b></h4></label>
        <input class="forms" type="text" name="name" placeholder="Enter name"><br>
        <label><h4><b>Username:</b></h4></label>
        <input class="forms" type="text" name="username" placeholder="Enter username"><br>
        <label><h4><b>Password:</b></h4></label>
        <input class="forms" type="password" name="password" placeholder="Enter password">
         <label><h4><b>Confirm Password:</b></h4></label>
        <input class="forms" type="password" name="cpassword" placeholder="Enter cpassword"><br>
        <label><h4><b>Upload image:</b></h4></label>
      <input class="froms" type="file" name="picture"><br>

       <input type="submit" name="update" value="Update" class="btn" style=" background-color: green;
       text-align: center;width: 100px;height: 30px;margin-left: 200px;">
      </form>
      
  </div>
</body>
</html>
<?php
   
  
$conn = getConnection();
if(isset($_POST['update']))
{
      $Id=$_POST['Id'];
      $password= $_POST['password'];
      $cpassword=$_POST['cpassword'];

        if ($password==$cpassword) {
          
      $sql = "UPDATE `teacher` SET username='$_POST[username]', password='$_POST[password]', cpassword='$_POST[cpassword]',
      name='$_POST[name]', picture='$_POST[picture]' where Id = $Id";

      $result = mysqli_query($conn,$sql);
    
    if ($result>0)
      {
      echo '<script> alert("Successful")</script>';
      }
      else
      {
        echo '<script> alert("Error")</script>';
      }
  }
  else
  {
    echo "Password don't match";
  }
    
}
?>