
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ResponsiveSlides.js &middot; Responsive jQuery slideshow</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>



<div id="main-page">


	<?php



	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);





	    include 'header.php';


		include "conn.php";





		$stmt = $conn->prepare("SELECT * FROM articles WHERE link=:link");
		$stmt->bindParam(':link',$message);
		$message = $_GET['link'];
		$stmt->execute();


		if ($stmt->rowCount())
		{
		     foreach( $stmt as $row )
		     {
		     	
		     }
		}


		echo '<div id="page-container">

				<div id="page-title">'

					. $row['title'] .

				'</div>
				
				<div id="page-text">

					<div id="page-photo"><img src="photos/'

						. $row['my_photo'] .

					'"></div>

					'

						. $row['text'] .

				'</div>


			</div>';


			include "comments.php";



	?>







</div>