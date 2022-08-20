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
	<title>LoGGED IN DASHBOARD</title>

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
					<option>Add Book</option>
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
			<legend>Add Member</legend>
		<?php 
		$myfile = fopen('../model/addbook.json','r');
		$data= fread($myfile, filesize('../model/addbook.json'));
		$user=json_decode($data,true);
		
		echo $user[];

		$book_name="";
		foreach ($user as $value) {

			$book_name.=$value['Book name'];
			$author_name.=$value['Author name'];
			$edition.=$value['Edition'];
			$book_name="<br/>";
		}
		echo $book_name;

		 ?>

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