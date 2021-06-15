<?php

	if(isset($_REQUEST['submit'])){

		$email = $_REQUEST['email'];

		if($email == ""){
			echo "invalid email!";
		}else{
			echo $email;
		}

	}else{
		echo 'invalid request';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="post" action="#">

		<h4>Email</h4><input type="email" name="email" value=""/><br>
                <input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>