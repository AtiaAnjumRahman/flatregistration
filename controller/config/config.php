<?php
	session_start();

	// Define database
	define('dbhost', 'localhost');
	define('dbuser', 'admin');
	define('dbpass', 'admin');
	define('dbname', 'project');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost.";port=3306; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
