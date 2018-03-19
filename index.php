<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>VIT Cinema</title>
	<link rel=icon href="images/back.png">
	<meta name='viewport' content="width=device-width, height=device-height, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="navbar">
			<h3>VIT <strong>Cinema</strong></h3>
			<ul class="nav nav-tabs">
			  <li role="presentation" class="active"><a href="index.php">Home</a></li>
			  <li role="presentation" class="active"><a href="review.php">Reviews</a></li>
			  <li role="presentation" class="active"><a href="account.php">Account</a></li>
			  <li role="presentation" class="active"><a href="main2.html">Get Near cinemas</a></li>
			  <li role="presentation" class="active"><a href="login.php" style="background: #f75b10; color: white;">
			  	<?php
			  		session_start();
			  		if(isset($_SESSION['user']))
			  			echo "Logout";
			  		else
			  			echo "Login";
			  	?>
			  </a></li>
			</ul>
		</div>
		<h1 id="head">VIT Cinema delivers<br>A Seamless Entertainment Experience<br></h1><br><br>
		<div id="open">
			<a href="book.php">
				Book your tickets
				<img src="images/arrow.png">
			</a>
		</div><br><br><br>
		<h3 id="slide-head">Now showing</h3>
		<div id="slide-wrap">
			<div style="background-image:url('images/slide1.png');" class="first"></div>
			<div class="second" style="background-image:url('images/slide2.png');"></div>
			<div id="main" style="background-image:url('images/slide3.png');"></div>
			<div class="second" style="background-image:url('images/slide4.png');"></div>
			<div style="background-image:url('images/slide5.png');" class="first"></div>
		</div>
		<div id="foot">
			<img src="images/clabs-grey.png" style="height: 25px;">
			<h4 style="margin-left: 10px;">VIT <strong>Cinema 2k17</strong></h4>
			<div id="footer">
				<img src="images/youtube.png">
				<h6>YouTube</h6>
				<img src="images/twitter.png">
				<h6>Twitter</h6>
				<img src="images/facebook.png">
				<h6>Facebook</h6>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src=script.js></script>
</body>
</html>