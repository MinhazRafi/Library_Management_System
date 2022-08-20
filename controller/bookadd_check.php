<?php
	if (isset($_POST['submit'])) {
		
		$bookname = $_POST['bname'];
		$authorname = $_POST['aname'];
		$edition = $_POST['edition'];

		$ck = 1;

		if ($bookname == "" && $authorname == "" && $edition == "" ) {
			echo "Fill all the information";
		}else{
			

			
				$book = [
						'Book name'=>$bookname,	
						'Author name'=>$authorname,
						'Edition'=>$edition,
						
					];

					$decode[] = $book;

					$curr_encode=json_encode($decode);

					$myfile = fopen('../model/addbook.json', 'a');
					fwrite($myfile, $curr_encode);
					fclose($myfile);
					header('location: ../view/profile.php');
			}
			

				
			}
		

		
		
	
?>