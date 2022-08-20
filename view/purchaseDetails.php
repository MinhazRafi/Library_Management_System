<html>
<head>
    <title></title>
    <script type="text/javascript" src="../js/purchase_check.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bg.css">
</head>

<body>
    
    <center>
    <h2> Purchase Book </h2>
          <form action="" method = "POST" onsubmit="purchaseValidation()">
            <table>

            <tr>
                <td>Category :</td>
            <td>
                <input id="incategory" type="text" name="category" onkeyup=" categorynotnull()"><br><span id='categoryS'></span>
            </td>
            </tr>
            
            <tr>
            <td> Book Name :</td>
            <td>
                <input id="inbookname" type="text" name="book_name" onkeyup=" booknamenotnull()"><br><span id='book_nameS'></span>
            </td>
            </tr>

            <tr>
            <td>Author :</td>
            <td>
                <input id="inauthor" type="text" name="author" onkeyup=" authornotnull()"><br><span id='authorS'></span>
            </td>
            </tr>

            <tr>
            <td>Payment method :</td>
            <td>
            <input id="bkash" type="radio" name="payment" value="bkash" onclick="paymentnotnul()"> Bkash
            <input id="nagad" type="radio" name="payment" value="nagad" onclick="paymentnotnul()"> Nagad
            <br><span id='paymentS'></span>
            </td>
            </tr>

            <tr>
            <td></td>
            <td><div><input type="submit" name="purchase" value="Purchase" ></div></td>
            </tr>

            </table>
         </form>
    </center>
</body>
</html>

<?php
   
   $conn = mysqli_connect('localhost', 'root', '', 'online_library');

if(isset($_POST['purchase']))
{

        $category= $_POST['category'];
        $book_name=$_POST['book_name'];
        $author=$_POST['author'];
        $payment=$_POST['payment'];


        if ($category != '' && $book_name != '' && $author != '' && $payment !='') {
            
        $query ="INSERT INTO purchase(category,book_name,author,payment) VALUES ('$category','$book_name','$author','$payment')";

        $query_run = mysqli_query($conn,$query);
    
    if ($query_run)
      {
        echo '<script> alert("done")</script>';
        header('location: ../view/dashboard.php');
      }
      else
      {
        echo '<script> alert("try again")</script>';
      }
  } 

}
?>