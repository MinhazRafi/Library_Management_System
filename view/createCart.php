<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <style type="text/css">
	h1
		{
			font-family: roboto;
		}
	body
	{
		background-color: lightskyblue;
	}
	</style>
</head>
<body>
		<form action="../controller/createCartCheck.php" method = "POST">
			<center>
		    <h1>Add Book in cart</h1>
			<label>Category :</label>
            <input type="text" name="category">
			<label>Book Name :</label>
			<input type="text" name="book_name">
			<label>Author :</label>
			<input type="text" name="author">
			<input type="submit" name="add" value="Add to cart">
			</center>
		</form>
</body>
</html>