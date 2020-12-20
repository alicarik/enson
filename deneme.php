



<?php

	$arr = array(
		"amcik1" => "yarrak1",
		"amcik2" => "yarrak2",
		"amcik3" => "yarrak3",
	);

	foreach ($arr as $key=>$item)
	{
	    echo $key . "=>" . $item . "<br>";
	}



	$myHero=array();

	foreach ($arr as $key=>$item)
	{
		array_push($myHero, $arr[$key]);
	}

	echo "<pre>";
	print_r($myHero);
	echo "</pre>";
?>