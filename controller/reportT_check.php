<?php
include'../model/DB_config.php';
session_start();

    if(isset($_POST['submit'])){
      $report= $_POST['report'];

        if($report!='')
        {
        

        $conn =getConnection();
        $sql = "INSERT INTO `report`  VALUES ('', '$report'); "; 
        $result = mysqli_query($conn, $sql);
        header('location: ../view/index.php');
        }
        else{
      echo "null value found...";
    }
  }else{
    echo "invalid request...";
    }
        ?>

    