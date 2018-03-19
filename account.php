<?php
	session_start();
	if(!isset($_SESSION['user']))
		header('Location: login.php');
	if(isset($_POST['curr'])){
		$user=$_SESSION['user'];
		$q="SELECT psw1 FROM register WHERE email = '$user' ";
		$con=new mysqli('localhost','root','','bookdeticket');
		$res=$con->query($q);
		if ($_POST['curr']==$res->fetch_assoc()['psw1']) {
			$q="UPDATE register SET psw1='$_POST[new]' WHERE email='$_SESSION[user]'";
			$con->query($q);
			header('Location: login.php');
		}
		else
			$err="Old Password don't match";
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
			  <li role="presentation" class="active"><a href="index.php">Home</a></li>
			  <li role="presentation" class="active"><a href="review.php" target="_blank">Reviews</a></li>
			  <li role="presentation" class="active"><a href="account.php">Account</a></li>
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
		<h3>Change Password :</h3>
		<br>
		<div id="expand">
			<form method="post" action="account.php" onsubmit="return check()">
				<h6 style="color: red;" class="info">
					<?php
						if(isset($err))
							echo $err;
					?>
				</h6>
				<table class="table">
					<tr>
						<td>Current Password</td>
						<td><input type="Password" name="curr" required></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input type="Password" name="new" required id="newpass"></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="Password" name="conf" required id="conpass"></td>
					</tr>
					<tr>
						<td><button style="background: transparent; border-color: gray;	border-width: 1px;	border-radius: 15px; height: 30px; width: 120px; outline: none;">Update</button></td>
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
		function check() {
			if($('#newpass').val()!=$('#conpass').val()){
				$('.info').text("Passwords don't match");
				return false;
			}
		}
	</script>
</body>
</html>