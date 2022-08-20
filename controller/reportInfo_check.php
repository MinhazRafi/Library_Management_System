<?php
	
	$name = $_POST['name'];

	if($name == null){
		echo 'Invalid Please fill the box then submit';
	}else{
		echo "Your report issue is submitted. Have patience! ";		
	}

?>