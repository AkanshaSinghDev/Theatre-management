<?php
	session_start();
	if(isset($_SESSION['user'])){
		if($_SESSION['user']!='admin')
			header('Location: index.php');
	}
	else
		header('Location: index.php');
	if(isset($_POST['sid'])){
		$sid=$_POST["sid"];
		$mname=$_POST["mn"];
		$time=$_POST["st"];
		$screen=$_POST["scrt"];
		$date=new DateTime($_POST["dt"]);
		$pla=$_POST["pt"];
		$gold=$_POST["gd"];
		$silver=$_POST["sl"];
		$today=new DateTime();
		if($sid<=0)
			$err='Invalid screen id';
		else if($today>=$date){
			$err='Invalid Date';
		}
		else if($pla<0)
			$err='Invalid Platinum ticket amount';
		else if($gold<0)
			$err='Invalid Gold ticket amount';
		else if($silver<0)
			$err='Invalid Silver ticket amount';
		else{
			$q="INSERT INTO screen VALUES($sid,'$mname', '$time','$screen', '".$_POST["dt"]."', $pla, $gold, $silver)";			
			$con=new mysqli('localhost','root','','osp');
			if($con->query($q))
				$err='Show Sheduled!';
			else
				$err='Already a show sheduled on the given screen on same date and time';
			$con->close();
		}
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
		<a href='shedule.php'>View sheduled shows</a>
		<h3>Enter Schedule:</h3>
		<br>
		<div id="expand">
			<form method="post" action="admin-screens.php">
				<h6 style="color: red;">
					<?php
						if(isset($err))
							echo $err;
					?>
				</h6>
				<table class="table">
					<tr>
						<td>Screen number:</td>
						<td><input type="number" name="sid" required></td>
					</tr>
					<tr>
						<td>Movie Name:</td>
						<td>
							<select name="mn" required style="min-width: 100px; height: 30px;">
								<?php
									$q="SELECT name, id FROM movie";			
									$con=new mysqli('localhost','root','','osp');
									$res=$con->query($q);
									while ($row=$res->fetch_row())
										echo "<option value=".$row[1].">".$row[0]."</option>";
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Show timing:</td>
						<td><input type="time" name="st" required></td>
					</tr>
					<tr>
						<td>Screen Type:</td>
						<td>
							<input type="radio" name="scrt" value="2D" checked style="vertical-align: bottom;"> 2D<br>
							<input type="radio" name="scrt" value="3D" style="vertical-align: bottom;"> 3D
						</td>
					</tr>
					<tr>
						<td>Date:</td>
						<td><input type="date" name="dt" required></td>
					</tr>
					<tr>
						<td>Price :</td>
						<td></td>
					</tr>
					<tr>
						<td> Platinum -</td>
						<td><input type="number" name="pt" required value="300"></td>
					</tr>
					<tr>
						<td> Gold -</td>
						<td><input type="number" name="gd" required value="200"></td>
					</tr>
					<tr>
						<td> Silver -</td>
						<td><input type="number" name="sl" required value="150"></td>
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
	<script type="text/javascript">
		function show() {
			$('#info').show();
		}
	</script>
</body>
</html>