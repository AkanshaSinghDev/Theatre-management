<html>
<head>
<style>
	body{
  background: url("back.png") no-repeat ;
  background-position: top-left; 
background-size: 25%;
background-attachment: fixed;
font-family: Montserrat;
}

h1,a{
	
	margin-top: 10%;
	margin-left: 40%;
}
</style>
</head>
<body>

<?php
$con = @mysql_connect('localhost','root','') or die('Could not Connect!');
mysql_select_db('RatingsDatabase');


$rating = $_POST['rating'];
$to_user = $_POST['to_user'];
$review = $_POST['subject'];
$query = "INSERT INTO `Movies` (`MovieID`, `Rating`, `Review`, `Name`, `UserID`) VALUES ('0001', '$rating', '$review', '$to_user', NULL)";

if(mysql_query($query)){
	echo "<h1>Success!</h1>";
}
else{
	echo "Unable to Connect!";
}

?>
<br>
<a href="Review3.php"><span align=center>Go Home</span></a>
</body>
</html>