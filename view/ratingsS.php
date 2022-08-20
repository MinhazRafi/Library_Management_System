<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" type="text/css" href="../css/bg.css">
</head>
<body>
    <form action="" method = "POST">
    <center>
	<h1>Give your valuable ratings on your books</h1>
    
    <label>Book Name: </label>
    <input type="text" id='name' name="name" value=""/><br><br>
    <label>Ratings: </label>
    <select id="rating" name="ratings">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">8</option>
        <option value="10">10</option>
    </select><br><br>
    <input type="submit" name="submit" value="Submit">
    </center>
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $ratings = $_POST['ratings'];

            if($name != '' && $ratings != '')
            {
                echo "submitted";
            }
            else
            {
                echo "please fill out the field";
            }
}
?>

