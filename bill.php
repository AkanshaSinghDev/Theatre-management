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
		<form action="https://paytm.com/" method="get">
<table>
<?php
$checkedboxes=0;
$amt1=0;$amt2=0;$amt3=0;$amt4=0;$amt5=0;$amt6=0;$amt7=0;$amt8=0;$amt9=0;$amt10=0;$amt11=0;$amt12=0;

if(isset($_POST["food1"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food1"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q1"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt1= $_POST["Q1"]*50;
echo $amt1;
} ?>
</td></tr>


<?php
if(isset($_POST["food2"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food2"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q2"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt2= $_POST["Q2"]*40;
echo $amt2;
} ?>
</td></tr>

<?php
if(isset($_POST["food3"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food3"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q3"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt3= $_POST["Q3"]*70;
echo $amt3;
} ?>
</td></tr>

<?php
if(isset($_POST["food4"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food4"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q4"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt4= $_POST["Q4"]*55;
echo $amt4;
} ?>
</td></tr>

<?php
if(isset($_POST["food5"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food5"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q5"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt5= $_POST["Q5"]*45;
echo $amt5;
} ?>
</td></tr>

<?php
if(isset($_POST["food6"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food6"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q6"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt6= $_POST["Q6"]*90;
echo $amt6;
} ?>
</td></tr>
<?php
if(isset($_POST["food7"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food7"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q7"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt7= $_POST["Q7"]*60;
echo $amt7;
} ?>
</td></tr>

<?php
if(isset($_POST["food8"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food8"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q8"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt8= $_POST["Q8"]*35;
echo $amt8;
} ?>
</td></tr>

<?php
if(isset($_POST["food9"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food9"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q9"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt9= $_POST["Q9"]*40;
echo $amt9;
} ?>
</td></tr>

<?php
if(isset($_POST["food10"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food10"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q10"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt10= $_POST["Q10"]*110;
echo $amt10;
} ?>
</td></tr>

<?php
if(isset($_POST["food11"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food11"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q11"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt11= $_POST["Q11"]*65;
echo $amt11;
} ?>
</td></tr>

<?php
if(isset($_POST["food12"]))
{
$checkedboxes++;
?>
<tr><td>Food Item:</td><td> <?php echo $_POST["food12"];
?></td><td>
&nbsp&nbsp&nbsp&nbsp&nbspQuantity:</td><td> <?php echo $_POST["Q12"];
?>
</td><td>&nbsp&nbsp&nbsp&nbsp&nbspTotal Amount:</td><td>
<?php
$amt12= $_POST["Q12"]*100;
echo $amt12;
} ?>
</td></tr>
<?php
$amt= $amt1+$amt2+$amt3+$amt4+$amt5+$amt6+$amt7+$amt8+$amt9+$amt10+$amt11+$amt12;
?>
<tr><td>Number of Items Selected: </td> <td> <?php
echo $checkedboxes;
?>
</td><td> Total Cost: </td><td>
<?php
echo $amt;
?>
</td></tr>
<tr><td>
<h4>Done</h4></td></tr>
</table>

</form>
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