<?php
	session_start();
	if(isset($_SESSION['user'])){
		if($_SESSION['user']!='admin')
			header('Location: index.php');
	}
	else
		header('Location: login.php');
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
	<script type="text/javascript">
		

	</script>
	<div class="container">
		<div class="navbar">
			<h3>VIT <strong>Cinema</strong></h3>
			<ul class="nav nav-tabs">
			  <li role="presentation" class="active"><a href="cpanel.php">Home</a></li>
			  <li role="presentation" class="active"><a href="admin-movies.php">Manage Movies</a></li>
			  <li role="presentation" class="active"><a href="admin-screens.php">Screens</a></li>
			  <li role="presentation" class="active"><a href="login.php" style="background: #f75b10; color: white;">
			  	<?php
			  		if(isset($_SESSION['user']))
			  			echo "Logout";
			  		else
			  			echo "Login";
			  	?>
			  </a></li>
			</ul>
		</div>
		<h1 id="head">Admin Panel<br></h1>
		<h3>Add Refreshment Item</h3>
		<form method=post action="added.php">
Food Item: <input type="text"  name="Food_Item"><br>
Cost: <input type="text" name="Cost"><br>
Quantity: <input type="text" name="Quantity"><br><br>
<input type="submit" name="Submit"><br>
</form>
<br><br>
		<div id="foot" style="margin-top: 100px;">
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
	<script src="//cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>
	<script src="svg-donut-chart-framework.js"></script>
	<script type="text/javascript">
		programmingSkills[0].value=Math.round(<?php echo $sale/$s;?>*100);
		programmingSkills[1].value=Math.round(<?php echo $movie/$s;?>*100);
		if (programmingSkills[1].value==100) {
			programmingSkills[1].value=99.9999;
			programmingSkills[0].value=.001;
		}
	</script>
</body>
</html>