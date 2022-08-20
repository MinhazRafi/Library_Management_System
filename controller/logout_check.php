<?php

	setcookie('cook', true, time()-3600, '/');
	header('location: ../view/login.php');

?>