<?php



	$servername = "localhost";
	$username = "root";
	$password = "root";

	try
	{
	  $conn = new PDO("mysql:host=$servername;dbname=enson;charset=utf8", $username, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  //echo json_encode(array('success' => 1));
	}
	catch(PDOException $e) {
		print $e->getMessage();
		die();
	  //echo json_encode(array('success' => 2));
	}




?>