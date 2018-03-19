<?php

include 'connect2.php';


$city2= $_POST["city3"];
$xcor2 = $_POST["xcor3"];
$ycor2= $_POST["ycor3"];


if($db->query("INSERT INTO details ( CITY, XCOR, YCOR) VALUES('$city2',$xcor2,$ycor2)")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:main2.html");

?>
