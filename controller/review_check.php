<?php
	
	$name = $_POST['name'];

	if($name == null){
		echo 'invalid submission';
	}else{
		echo "Your review is submitted ";		
	}

?>