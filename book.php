	<?php 
	session_start();
	if(!isset($_SESSION['user']))
		header('Location: login.php');
	?>  
<!DOCTYPE html>
<html lang="en-US">
<head>
		<title>VIT Cinema</title>
		<link rel=icon href="images/favicon.png">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:800');
		@import url('https://fonts.googleapis.com/css?family=Montserrat');
			body{
	background-image: url('images/back.png');
	background-repeat: no-repeat;
	background-size: 25%;
	margin: 0;
	padding: 0;
	font-family: Montserrat;
}
			.wrap {
			  overflow: hidden;
			  margin: 10px;
			}
			.box {
			  float: left;
			  position: relative;
			  width: 20%;
			  padding-bottom: 20%;
			}
			.boxInner {
			  position: absolute;
			  left: 10px;
			  right: 10px;
			  top: 10px;
			  bottom: 10px;
			  overflow: hidden;
			}
			.boxInner img {
			  width: 100%;
			}
			.titleBox
			{
				font-size: 15px;	
			}
			.boxInner .titleBox {
			  position: absolute;
			  bottom: 0;
			  left: 0;
			  right: 0;
			  margin-bottom: -50px;
			  background: #000;
			  background: rgba(0, 0, 0, 0.5);
			  color: #FFF;
			  padding: 10px;
			  text-align: center;
			  -webkit-transition: all 0.3s ease-out;
			  -moz-transition: all 0.3s ease-out;
			  -o-transition: all 0.3s ease-out;
			  transition: all 0.3s ease-out;
			}
			body.touch .boxInner:hover .titleBox, body.touch .boxInner.touchFocus .titleBox {
			  margin-bottom: 0;
			}
			@media only screen and (max-width : 480px) {
			  /* Smartphone view: 1 tile */
			  .box {
				width: 100%;
				padding-bottom: 100%;
			  }
			}
			@media only screen and (max-width : 650px) and (min-width : 481px) {
			  /* Tablet view: 2 tiles */
			  .box {
				width: 50%;
				padding-bottom: 50%;
			  }
			}
			@media only screen and (max-width : 1050px) and (min-width : 651px) {
			  /* Small desktop / ipad view: 3 tiles */
			  .box {
				width: 33.3%;
				padding-bottom: 33.3%;
			  }
			}
			@media only screen and (max-width : 1290px) and (min-width : 1051px) {
			  /* Medium desktop: 4 tiles */
			  .box {
				width: 25%;
				padding-bottom: 25%;
			  }
			}
			.container{
			width: 85%;
			}
.nav{
	margin-top: 30px;
}
.nav h3{
	margin: 0;
	width: 200px;
	margin-left: 10%;
	display: inline-block;
}
.nav-tabs{
	display: inline-block;
	position: absolute;
	right: 0;
	margin-top: 0;
}
.navbar{
	margin-top: 70px;
}
.navbar h3{
	display: inline; 
	margin-left: 15%;
}
.active{
	text-align: center;
	width: 150px;
}
.active a{
	margin-right: 0 !important;
	border-bottom: 1px;
}
.nav-tabs>li>a{
	border-radius: 0;
	font-size: 12px;
}
.nav-tabs>li.active>a{
	border-color: #e9ebea;
	border-width: 0.5px;
}
#slide-head{
	text-align: center;
	font-weight: 600;
}
#slide-wrap{
	width: 100%;
	margin-top: 20px;
	margin-bottom: 100px;
	height: 350px;
	display: inline-flex;
}
#slide-wrap div{
	border: 1px solid #e9ebea;
	flex: 1;
	height: 100%;
	overflow-x: hidden;
	background-repeat: no-repeat;
	background-size: cover;
}
#slide-wrap img{
	height: 100%;
	transition: all 1s ease; 
}
#main{
	flex: 1;
}
.second{
	flex: 1 !important;
}
#foot{
	margin-bottom: 40px;
}
#foot img{
	height: 20px;
}
#foot h4{
	display: inline-block;
	vertical-align: middle;
	color: #959595 !important;
}
#footer{
	display: inline-block;
	position: absolute;
	right: 0;
	width: 50%;
}
#footer img, #footer h6{
	display: inline-block;
}
#footer h6{
	font-weight: 300;
}
#footer img{
	margin-left: 15%;
}
#meet{
	display: flex;
	width: 100%;
	margin-bottom: 50px;
}
#meet div{
	flex: 1;
}
#meet img{
	height: 350px;
	width: 100%;
}
.logo{
	height: 40px !important;
	width: 40px !important;
	margin-left: 40px;
	margin-right: 40px;
}
.active a{
	cursor: pointer;
}
@media only screen and (max-width: 1030px){
	body{
		background-size: 40%;
	}
	.navbar h3{
		margin-left: 5%;
	}
}
@media only screen and (max-width: 780px){
	.container{
		width: 100%;
	}
	#footer img{
		margin-left: 10%;
	}
	.navbar h3{
		display: none;
	}
}
@media only screen and (max-width: 420px){
	.active{
		width: initial;
	}
	#head{
		margin-top: 30px;
		font-size: 40px;
	}
	#info{
		width: initial;
	}
	.first, .second{
		display: none;
	}
	#footer{
		display: block;
		position: static;
		width: initial;
		margin-top: 20px;
	}
	#meet{
		display: block;
	}
}
@media only screen and (max-width: 380px){
	.nav>li>a{
		padding: 5px 10px;
	}
	#open{
		font-size: 10px;
	}
	#footer img{
		margin-left: 5%;
	}
}
@media only screen and (max-width: 330px){
	.navbar{
		margin-top: 50px;
		margin-bottom: 0;
	}
	.nav-tabs>li>a{
		font-size: 10px;
	}
	#head{
		margin-top: 0px;
		font-size: 10px;
	}
	#info{
		font-size: 15px;
	}
	#open{
		font-size: 15px;
	}
	#meet img{
		height: 250px;
	}
}html{
	margin: 0;
	padding: 0;
}
		</style>
	</head>
	<body class="touch">
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
		</div>
		
	<form action = "savemovie.php" method = "POST">
	 </br></br>
	 <h6><p align="right"><?php echo "User : " . $_SESSION["user"] . "<br>";?></p></h6>
		<div class="box">
		  <div class="boxInner">
			<center>
				<input type="image" src="img/airlift.png" alt="Airlift" name="name" value="AIRLIFT">
			</center>
			<div class="titleBox">Airlift</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/apocalypse.png" alt="X-Men : Apocalypse" name="name" value="X-MEN : APOCALYPSE">
		  </center>
			<div class="titleBox">X-Men : Apocalypse</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/avatar.png" alt="Avatar" name="name" value="AVATAR">
		  </center>
			<div class="titleBox">Avatar</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/avengers.png" alt="Avengers" name="name" value="AVENGERS">
		  </center>
			<div class="titleBox">Avengers</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/captain.png" alt="Captain America : The Winter Soldier" name="name" value="CAPTAIN AMERICA : THE WINTER SOLDIER">
		  </center>
			<div class="titleBox">Captain America : The Winter Soldier</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/deadpool.png" alt="Deadpool" name="name" value="DEADPOOL">
		  </center>
			<div class="titleBox">Deadpool</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/hobbit.png" alt="Hobbit" name="name" value="HOBBIT">
		  </center>
			<div class="titleBox">Hobbit</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/logan.png" alt="Logan" name="name" value="LOGAN">
		  </center>
			<div class="titleBox">Logan</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/nemo.png" alt="Finding Nemo" name="name" value="FINDING NEMO">
		  </center>
			<div class="titleBox">Finding Nemo</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/poc.png" alt="Pirates of Caribbean" name="name" value="PIRATES OF CARIBBEAN">
		  </center>
			<div class="titleBox">Pirates of Caribbean </div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/potter.png" alt="Harry Potter and the Order of Phoenix" name="name" value="HARRY POTTER AND THE ORDER OF PHOENIX">
		  </center>
			<div class="titleBox">Harry Potter and the Order of Phoenix</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/starwars.png" alt="Star Wars : The Force Awakens" name="name" value="STAR WARS : THE FORCE AWAKENS">
		  </center>
			<div class="titleBox">Star Wars : The Force Awakens</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/thor.png" alt="Thor" name="name" value="THOR">
		  </center>
			<div class="titleBox">Thor</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/tintin.png" alt="The Adventures of Tintin" name="name" value="THE ADVENTURES OF TINTIN">
		  </center>
			<div class="titleBox">The Adventures of Tintin</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/wolverine.png" alt="X-Men : The Wolverine" name="name" value="X-MEN : THE WOLVERINE">
		  </center>
			<div class="titleBox">X-Men : The Wolverine</div>
		  </div>
		</div>
	  </div>
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
	<script type="text/javascript" src=script.js></script>
</body>
</html>