<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ResponsiveSlides.js &middot; Responsive jQuery slideshow</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

</head>


<body>



<div id="main-page">



    <?php

        include 'header.php';

    ?>



    <div id="main-animation">

        <div id="main-picture-container">

        </div>

        <div id="main-button-container">
            <div class="main-button" id="main-button1">1</div>
            <div class="main-button" id="main-button2">2</div>
            <div class="main-button" id="main-button3">3</div>
        </div>

    </div>




</div>





</body>



<script type="text/javascript">



    var whole_anim_data = [];


    $.ajax({
        type: "POST",
        url: 'pull-article.php',
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




    $('.main-button').mouseover(function(){
        
        var selectedNumber = $(this).attr('id');
        //console.log(selectedNumber);

        selectedNumber = selectedNumber.slice(11,12);

        selectedNumber = selectedNumber - 1;
        console.log(selectedNumber);
        //console.log(my_all_data);


        $('#main-picture-container').html(
            '<a href="page.php?link='  + whole_anim_data[selectedNumber]['link'] + '" target="_blank"><div class="main-picture"> <img src="photos/' + whole_anim_data[selectedNumber]['my_photo'] + '" alt="" /></div></a>');

    });




</script>

</html>