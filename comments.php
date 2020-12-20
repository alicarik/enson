




<?php


		include "conn.php";


		$stmt = $conn->prepare("SELECT * FROM articles WHERE link=:link");
		$stmt->bindParam(':link',$message);
		$stmt->execute();

		if ($stmt->rowCount())
		{
			$message2 = $row['ID'];
		}



		$stmt = $conn->prepare("SELECT * FROM comments INNER JOIN users ON comments.userID = users.ID
			WHERE articleID=:articleID");
		$stmt->bindParam(':articleID',$message2);
		$stmt->execute();


		echo '<div id="page-comment-container">';


			echo '<b>Comments</b>';

			if ($stmt->rowCount())
			{
			     foreach( $stmt as $row )
			     {
			     	echo '<div id="page-comment">';
				     	echo $row['user_name'];
				     	echo "<br>";
				     	echo $row['commentText'];
					echo '</div>';
			     }
			}

		echo '</div>';


		echo '<div id="page-comment-entry-container">
				
				<label for="fname">First name:</label>
				<input type="text" id="commentator-name" name="commentator-name">
				<br>
				<label for="fname">First name:</label>
				<input type="text" id="comment-content" id="comment-content">

			</div>';






?>




<script type="text/javascript">



    $.ajax({
        type: "POST",
        url: 'insert-comment.php',
        dataType: 'json',
        success: function(data)
        {

            var i;
            for (i = 0; i < data.length; i++)
            {
                whole_anim_data.push(data[i]);
            }

            $('#main-picture-container').html(
                '<a href="page.php?link='  + whole_anim_data[0]['link'] + '" target="_blank"><div class="main-picture"> <img src="photos/' + whole_anim_data[0]['my_photo'] + '" alt="" /></div></a>');


        }
    });




</script>