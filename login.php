<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


	include "conn.php";

	if (!empty($_POST['username']) && !empty($_POST['password']))
	{

		$username = $_POST['username'];
		$password = $_POST['password'];

			
		$stmt = $conn->prepare("SELECT * FROM users WHERE user_name = (:user_name) AND user_password = (:user_password)");
		$stmt->bindParam(':user_name', $username);
		$stmt->bindParam(':user_password', $password);
		$stmt->execute();


			if ( $stmt->rowCount() )
			{
				foreach( $stmt as $row )
				{

					session_start();
    				$_SESSION["username"]  = $username;

					echo json_encode(array('success' => 1));
				}
			}
			else
			{
				echo json_encode(array('success' => 2));
			}


	}

	else
	{
	    echo json_encode(array('success' => 3));
	}


?>