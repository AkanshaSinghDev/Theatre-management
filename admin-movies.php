<?php
	session_start();
	if(isset($_SESSION['user'])){
		if($_SESSION['user']!='admin')
			header('Location: index.php');
	}
	else
		header('Location: index.php');
	if(isset($_POST['name']))
		if(isset($_POST['language'])){
			$q="INSERT INTO movie(name, cost, duration, cast, genre, language) VALUES ('".$_POST['name']."',".$_POST['cost'].", '". $_POST['duration']."', '".$_POST['cast']."', '".$_POST['genre']."', '".implode(', ', $_POST['language'])."')";			
			$con=new mysqli('localhost','root','','osp');
			$con->query($q);
			$con=new mysqli('localhost','root','','bookdeticket');
			$q="INSERT INTO mlist VALUES ('".$_POST['name']."','',".$_POST['cost'].")";
			$con->query($q);
			$err='Added movie transaction';
		}
		else
			$err='Language not selected';
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
	<style type="text/css">
		input{
			height: 30px;
			width: initial;
		}
		td{
			border: 0 !important;
		}
	</style>
</head>
<body>
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
		<h1 id="head">Admin Panel<br></h1><br><br>
		<h3>New Movie :</h3>
		<br>
		<div id="expand">
			<form method="post" action="admin-movies.php">
				<h6 style="color: red;">
					<?php
						if(isset($err))
							echo $err;
					?>
				</h6>
				<table class="table">
					<tr>
						<td>Movie Name</td>
						<td><input type="text" name="name" required></td>
					</tr>
					<tr>
						<td>Movie Cost(in &#8377;)</td>
						<td><input type="number" name="cost" required></td>
					</tr>
					<tr>
						<td>Movie duration</td>
						<td><input type="time" name="duration" required></td>
					</tr>
					<tr>
						<td>Cast (sperated by commas)</td>
						<td><textarea name="cast" required></textarea></td>
					</tr>
					<tr>
						<td>Genre</td>
						<td>
							<select name="genre">
								<option value="Action">Action</option>
								<option value="Adventure">Adventure</option>
								<option value="Comedy">Comedy</option>
								<option value="Crime">Crime</option>
								<option value="Drama">Drama</option>
								<option value="Historical">Historical</option>
								<option value="Horror">Horror</option>
								<option value="Magical">Magical</option>
								<option value="Paranoid">Paranoid</option>
								<option value="Political">Political</option>
								<option value="Romance">Romance</option>
								<option value="Science Fiction">Science Fiction</option>
								<option value="thriller">Thriller</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Languages available</td>
						<td>
							<input type="checkbox" name="language[]" style="vertical-align: middle; width: 20px;" value="english"> English<br>
							<input type="checkbox" name="language[]" style="vertical-align: middle; width: 20px;" value="hindi"> Hindi<br>
							<input type="checkbox" name="language[]" style="vertical-align: middle; width: 20px;" value="tamil"> Tamil<br>
						</td>
					</tr>
					<tr>
						<td><button style="background: transparent; border-color: gray;	border-width: 1px;	border-radius: 15px; height: 30px; width: 100px; outline: none;">Submit</button></td>
					</tr>
				</table>
			</form>
			<br><br>
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
</body>
</html>