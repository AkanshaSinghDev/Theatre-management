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
	<style type="text/css">
		input{
			height: 30px;
			width: initial;
		}
		td{
			border: 0 !important;
		}
		thead{
			background: green;
			color: white;
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
		<h3>View Shedule :</h3><br>
		<div id="expand">
			<form method="post" action="shedule.php">
				<table class="table">
					<tr>
						<td>Screen number</td>
						<td><input type="number" name="sid"></td>
					</tr>
					<tr>
						<td>Screen Type:</td>
						<td>
							<input type="radio" name="scrt" value="2D" style="vertical-align: bottom;"> 2D<br>
							<input type="radio" name="scrt" value="3D" style="vertical-align: bottom;"> 3D
						</td>
					</tr>
					<tr>
						<td>Date:</td>
						<td><input type="date" name="dt"></td>
					</tr>
					<tr>
						<td><button style="background: transparent; border-color: gray;	border-width: 1px;	border-radius: 15px; height: 30px; width: 100px; outline: none;">Submit</button></td>
					</tr>
				</table>
			</form>
			<br><br>
		</div>
		<div id="expand">
			<table class=table>
				<?php
					if(isset($_POST['sid']) || isset($_POST['scrt']) || isset($_POST['scrt']))
					if($_POST['sid']>0 || isset($_POST['scrt']) || $_POST['dt']){
						$q="SELECT * FROM screen WHERE";
						$add=array();
						if($_POST['sid']>0)
							array_push($add, " sid=".$_POST['sid']);
						if(isset($_POST['scrt']))
							array_push($add, " Screen_type='".$_POST['scrt']."'");
						if(isset($_POST['dt']) && $_POST['dt'])
							array_push($add, " date='".$_POST['dt']."'");
						$q=$q.implode(" AND ", $add);
						$con=new mysqli('localhost','root','','osp');
						$res=$con->query($q);
						if(mysqli_num_rows($res)){
							echo "<thead>
								<td>Screen no.</td>
								<td>Movie Name</td>
								<td>Time</td>
								<td>Date</td>
								<td>Type</td>
								<td>Platinum</td>
								<td>Gold</td>
								<td>Silver</td>
							</thead><tbody>";
							while ($row=$res->fetch_row()){
								$q0="SELECT name FROM movie WHERE id=$row[1]";
								$na=$con->query($q0);
								$na=$na->fetch_row()[0];
								echo "<tr><td>$row[0]</td><td>$na</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
							}
							echo "</tbody>";
						$con->close();
						}
						else
							$err='No show is sheduled';
					}
				?>
			</table>
			<br>
		</div>
		<h6 style="color: red;">
			<?php
				if(isset($err))
					echo $err;
			?>
		</h6>
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
</body>
</html>