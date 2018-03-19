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
		<h1 id="head">Admin Panel<br></h1><br><br>
		<a href="refreshment.php">Click here for Refreshments Portal</a>
		<h3>
			Total : 
			<?php
				$con=new mysqli('localhost','root','','bookdeticket');
				$inc=$con->query('SELECT SUM(mfare) FROM ticket');
				$mov=$con->query('SELECT SUM(cost) FROM mlist');
				$sale=$inc->fetch_row()[0];
				$movie=$mov->fetch_row()[0];
				$tot=$sale-$movie;
				$s=$sale+$movie;
				if($tot<0){
					$tot*=-1;
					echo $tot.' loss';
				}
				else
					echo $tot.' profit';
				echo "*";
			?>
		</h3>
		<h4 id="exp">Click to <span>view</span> details <strong>+</strong></h4>
		<div id="expand" style="display: none;">
			<table class="table">
				<thead>
					<td>S. No.</td>
					<td>Movie Name</td>
					<td>Profit / Loss</td>
				</thead>
				<tbody>
					<?php
						$i=1;
						$mq="SELECT mname, cost FROM mlist";
						$mn=$con->query($mq);
						while ($row=$mn->fetch_assoc()) {
							$q="SELECT SUM(mfare) FROM ticket WHERE mname='".$row['mname']."'";
							$res=$con->query($q);
							$res=$res->fetch_assoc()['SUM(mfare)'];
							echo "<tr><td>$i</td><td>".$row['mname']."</td><td>";
							$eff=$row['cost'];			
							if(isset($res)){
								$eff-=$res;
							}
							if($eff>0){
								echo "$eff Loss";
							}
							else{
								$eff*=-1;
								echo "$eff Profit";
							}
							echo "</td></tr>";
							$i++;
						}
					?>
				</tbody>
			</table>
			<br>
		</div>
		<svg id=svg></svg><br><br><br>
		<div id="foot" style="margin-top: 100px;">
			<h6 style="color: red;">* Overhead charges (Electricity, Staff etc.) not considered</h6>
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