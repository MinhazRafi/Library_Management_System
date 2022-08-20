
<?php
include'../model/DB_config.php';
session_start();

    if(isset($_POST['submit'])){
    	$bookName= $_POST['bookName'];
    	$reviews= $_POST['reviews'];
    

        if($bookName!=''&& $reviews!='')
        {
        

        $conn =getConnection();
        $sql = "INSERT INTO `review`  VALUES ('', '$bookName',$reviews); "; 
        $result = mysqli_query($conn, $sql);
        header('location: ../view/index.php');
        }
        else{
      echo "null value found...";
    }
}
  else{
    echo "invalid request...";
    }
        ?>
