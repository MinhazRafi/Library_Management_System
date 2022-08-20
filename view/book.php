<?php 
session_start();
if(!isset($_COOKIE['flag']))
	{
		
		header('location:../view/login.php');
	}
	else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add book</title>

</head>
<body>
	<form method="post" action="../controller/bookadd_check.php">
	<table width="50%">
		<tr>
			<td>
		<fieldset>
	
	
	<table width="100%">
		
		<tr>
			<td valign="top" width="40%">
				<details>
					<summary>ADD</summary>
					<a href="../view/addmember.php">Add Member</a><br>
					<a href="../view/addstudent.php">Add Student</a><br>
					<a href="../view/addteacher.php">Add Teacher</a>

				</details>
					
				<br>
				<details>
					<summary>Delete</summary>
	                <a href="deletemember.php">Delete Member</a><br>
					<a href="deletestudent.php">Delete Member</a><br>
					<a href="deleteteacher.php">Delete Member</a>
				</details>
				<br>
				<details>
					<summary>Book</summary>
					<a href="../view/book.php">Add book</a><br>
					<option>Delete Book</option>
				</details><br>
				<details>
					<summary>Update</summary>
					<a href="../view/updatemember_info.php">Update member Info</a><br>
					<a href="../view/updatestudent_info.php">Update Student Info</a><br>
					<a href="../view/updateteacher_info.php">Update Teacher Info</a><br>
					<a href="../view/updateown_profile.php">Update Own Profile</a>
				</details><br><br><br><br><br><br>
                  <br><br><br>

				<a href="../view/profile.php" >BACK</a>
			
			</td>
		<td colspan="2">
		<fieldset>
			<legend>Add Book</legend>
		<table width="100%">
			<tr>
				<td width="30%">Book Name</td>
				<td>:<input type="text" name="bname"></td>
			</tr>

			<tr>
				<td>Author Name</td>
				<td>:<input type="text" name="aname"></td>
			</tr>
			<tr>
				<td>Edition</td>
				<td>:<input type="text" name="edition"></td>
			</tr>
			
			<tr>
				<td>
					<input type="submit" name="submit" value="Add">
					
				</td>
			</tr>
		</table>

	    </fieldset>
        </td>

		</tr>

					
	</table>

</fieldset>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php

	}
	
?>