<?php


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);




	include "conn.php";



		$stmt = $conn->prepare("SELECT * FROM articles ORDER BY ID DESC");
		$stmt->execute();


		$AllArticles = array();


		if ($stmt->rowCount())
		{

			foreach($stmt as $row)
			{

				array_push($AllArticles,$row);

			}

		}

		echo json_encode($AllArticles);

		//echo $AllArticles[3][6][1];



/*
	else
	{
		$stmt = $conn->prepare("SELECT * FROM articles WHERE id=:id");
		$stmt->bindParam(':id',$message);
		$message = $_POST['selectedNumber'];
		$stmt->execute();


		if ($stmt->rowCount())
		{
		     foreach( $stmt as $row )
		     {
		     		$myArticle = array();
		     		array_push($myArticle, $row['my_photo'], $row['link']);
		     }
		}

		echo json_encode($myArticle);
	}
*/


?>