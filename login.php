<?php
	session_start();
	session_unset();
	$l=false;
	$con=new mysqli('localhost','root','','bookdeticket');
	if(isset($_POST['user']) && isset($_POST['pass'])){
		$user=$_POST['user'];
		$query="SELECT psw1 FROM register WHERE email = '$user' ";
		$res=$con->query($query);
		print_r($res);
		if($res->fetch_assoc()['psw1']==$_POST['pass']){
			$_SESSION['user']=$user;
			if($user=='admin')
				header('Location: cpanel.php');
			else
				header('Location: index.php');
		}
		else
			$l=true;
	}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>VIT Cinema</title>
	<link rel=icon href="images/favicon.png">
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
			  <li role="presentation" class="active"><a href="review.php" target="_blank">Reviews</a></li>
			  <li role="presentation" class="active"><a href="account.php">Account</a></li>
			  <li role="presentation" class="active"><a href="login.php" style="background: #f75b10; color: white;">Login</a></li>
			</ul>
		</div>
		<form style="width: 100%; text-align: center; margin-bottom: 100px;" action="login.php" method="post">
			<h1 id="head">Login</h1><br><br>
			<input type="text" name="user" placeholder="Username" required><br><br>
			<input type="password" name="pass" placeholder="Password" required><br><br><br>
			<button id="open">Submit</button><br><br>
			<a href="reg.html">New User?</a>
			<h6 class="info">
				<?php
					if($l)
						echo "Wrong username or password";
				?>
			</h6>
		</form>
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