<?php

session_start();
if(!isset($_COOKIE['flag'])){
	header('location: login.php' );
}
?>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>