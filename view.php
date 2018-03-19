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
	margin-left: 30%;
}

h3,h2{
	margin-left: 30%;
}
</style>
</head>
<body>


<?php
$con = @mysql_connect('localhost','root','') or die('Could not Connect!');
mysql_select_db('bookdeticket');

$to_user = $_POST['to_user'];
$query = "SELECT * FROM MOVIES WHERE NAME='$to_user'";
$totalRating = 0.0;
$totalUsers = 0;
$average = 0.0;
$count = 0;

if($query_run = mysql_query($query)){

	while($query_row = mysql_fetch_assoc($query_run)){
		$rating = $query_row['Rating'];
		$totalRating = $totalRating + $rating;
		$totalUsers = $totalUsers + 1; 
		
	}

	
	$average = $totalRating/$totalUsers;
		echo '<h1>Average Rating of <i><b>'.$to_user.' </i></b>: '.$average.'</h1>'.'<br>';

	echo '<h2><u>Reviews</u></h2>';

	$query_run1 = mysql_query($query);

	while($query_row1 = mysql_fetch_assoc($query_run1)){
		$movieName = $query_row1['Name'];
		$rating = $query_row1['Rating'];
		$review = $query_row1['Review'];
		$count = $count + 1;
		echo '<h3>'.$count.'. '.$review.' (Rated: '.$rating.') '.'</h3>'.'<br>';
		

	}
	
}
else{
	mysql_error();
}





?>



<a href="review.php">Go Back</a>
</body>
</html>

