<?php
   	include("config.php");
   	
   	$link=Connection();
	$temp1=$_POST["temp1"];
	$hum1=$_POST["hum1"];
	$lat=$_POST["lat"];
	$long=$_POST["long"];
	$query = "INSERT INTO `HUMIDITY` (`temperature`, `humidity`, 'longitude', 'latitude') 
		VALUES ('".$temp1."','".$hum1."', '".$lat."', '".$long."')"; 
   	
   	mysql_query($query,$link);
	mysql_close($link);
   	header("Location: index.php");
?>