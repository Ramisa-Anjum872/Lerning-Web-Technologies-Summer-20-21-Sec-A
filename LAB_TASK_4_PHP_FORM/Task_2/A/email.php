<?php

	if(isset($_REQUEST['submit'])){

		$Email = $_REQUEST['email'];

		if($username == ""){
			echo "invalid email!";
		}else{
			echo $email;
		}

	}else{
		echo 'invalid request';
	}
?>