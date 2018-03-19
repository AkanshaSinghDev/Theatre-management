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
		<h3>Refreshment Billing</h3>
		<form action="bill.php" method="post"> 
	<br>
 <table>
 <tr> <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbspFood Item </td>
 <td> Cost </td>
 <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspQuantity </td>
 </tr>
 <tr><td><input type="checkbox" name="food1" value="French fries">French Fries</td> <td> Rs.50</td> <td> <input type="text" name="Q1" id="a1"></td></tr>  
 <tr><td><input type="checkbox" name="food2" value="Normal Popcorn" >Normal Popcorn</td> <td>Rs.40 </td> <td><input type="text" name="Q2" id="a2"></td> </tr> 
 <tr><td><input type="checkbox" name="food3" value="Caramel Popcorn" >Caramel Popcorn</td> <td>Rs.70</td> <td> <input type="text" name="Q3" id="a3"></td> </tr> 
 <tr><td><input type="checkbox" name="food4" value="Pepsi" >Pepsi</td> <td> Rs.55</td> <td><input type="text" name="Q4" id="a4"></td></tr>   
 <tr><td><input type="checkbox" name="food5" value="Slice" >Slice</td><td> Rs.45</td><td> <input type="text" name="Q5" id="a5"></td> </tr> 
 <tr><td><input type="checkbox" name="food6" value="Nachos" >Nachos </td><td>Rs.90 </td><td><input type="text" name="Q6" id="a6"></td></tr> 
 <tr><td><input type="checkbox" name="food7" value="Butter Popcorn" >Butter Popcorn</td> <td>Rs.60</td> <td><input type="text" name="Q7" id="a7"></td></tr> 
 <tr><td><input type="checkbox" name="food8" value="Samosa" >Samosa</td> <td>Rs.35</td><td> <input type="text" name="Q8" id="a8"></td> </tr>
 <tr><td><input type="checkbox" name="food9" value="Sweet Corn" >Sweet Corn</td> <td>Rs.40</td> <td><input type="text" name="Q9" id="a9"></td></tr> 
 <tr><td><input type="checkbox" name="food10" value="Chicken wings" >Chicken wings</td><td> Rs.110</td><td> <input type="text" name="Q11" id="a10"></td></tr> 
 <tr><td><input type="checkbox" name="food11" value="Smileys" >Smileys </td> <td> Rs 65 </td> <td><input type="text" name="Q11" id="a11"></td></tr> 
 <tr><td><input type="checkbox" name="food12" value="Burger" >Burger</td> <td> Rs.100 </td><td><input type="text" name="Q12" id="a12"></td></tr> 
 
 <tr><td><button type="submit"> Check Out </button></td></tr> 
</table>
</form>
<br><br>
<a href="add-refreshment.php"><h3>Add new items</h3></a>
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