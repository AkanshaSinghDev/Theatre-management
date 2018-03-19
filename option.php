<h1>
	<?php 
	session_start();
	
	?>  
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>VIT Cinema</title>
	<link rel=icon href="images/favicon.png">
	<meta name='viewport' content="width=device-width, height=device-height, initial-scale=1">
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	input{
			height: 30px;
			width: initial;
		}
		td{
			width: 200px;
		}
		table{
			margin-left: 50px;
		}
		
		.button {
    background-color: #4CAF50;
    border: 1px;
    color: white;
    padding: 15px 34px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	align:center;
	border-radius:5px;
}
	#login {
    padding-top: 50px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login h1 {
    color: #1fa67b;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 5px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\e013';
    color: #1fa67b;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ccc;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #6d6d6d;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
	margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
	text-align: center;
	display: block;
}

/*    --------------------------------------------------
	:: Inputs & Buttons
	-------------------------------------------------- */
.form-control {
    color: #212121;
}
.btn-custom {
    color: #fff;
	background-color: #1fa67b;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #fff;
}	

.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 200; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 10px;
}

label{
	margin-bottom: 10px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 1px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
	</style>
	<script>
	function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}
div
{
	font-size:10px;
}
</script>

</head>

<body topmargin="0">
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
		
	<h6><p align="right"><?php echo "User : " . $_SESSION["user"] . "<br>";?></p></h6>
	
	<div id="expand">
			<form method="POST" action="saveseats.php" name="form1">
		<!--<form method="POST" action="saveticket.php" name="form1">-->
		
				
				
					<section id="login">
					<div class="container">
					<div class="row">
					<div class="col-xs-12">
					<div class="form-wrap">
					<h1>Ticket Selection</h1>
					<form autocomplete="off">
                        <div class="form-group">
                            <label style="font-size:15px;width:200px;" for="name" class="cols-sm-2 control-label">Select Date</label>
                            <div class="cols-sm-10">
							<div class="input-group">
							<input style="font-size:15px;" type="date" name="tdate1"></td>
							</div></div></div>
						<div class="form-group">
                            <label style="font-size:15px;" for="name" class="cols-sm-2 control-label">Theatre</label>
                            <div class="cols-sm-10">
							<div class="input-group">
							<input style="font-size:15px;" type="text" disabled name="theatre" value="VIT Cinema"/>
							<!--<select name="theatre" style="font-size:15px;width:200px;">
							<option value="INOX">INOX</option>
							<option value="LUXE">LUXE</option>
							<option value="IMAX">IMAX</option>
							<option value="PVR">PVR</option>-->
							</select>
						</div></div></div>
						 
                        <div class="form-group">
                            <label style="font-size:15px;" for="name" class="cols-sm-2 control-label">Time</label>
                            <div class="cols-sm-10">
						<div class="input-group">
							<select name="time1" style="font-size:15px;width:200px;">
							<option value="12:30 PM">12:30 PM</option>
							<option value="4:00 PM">4:00 PM</option>
							<option value="8:00 PM">8:00 PM</option>
							</select>
							</div></div></div>
							 <div class="form-group">
                            <label style="font-size:15px;" for="name" class="cols-sm-2 control-label">Type</label>
                            <div class="cols-sm-10">
						<div class="input-group">
							<select name="ttype" style="font-size:15px;width:200px;">
							<option value="12:30 PM">platinum</option>
							<option value="4:00 PM">gold</option>
							<option value="8:00 PM">silver</option>
							</select>
							</div></div></div>
			 <div class="form-group">
                            <label style="font-size:15px;" for="name" class="cols-sm-2 control-label">Number of Seats</label>
                            <div class="cols-sm-10">
						<div class="input-group">
							<select name="seats" style="font-size:15px;width:200px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
			<option value="4">4</option>
            <option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			</select>
			</div></div></div>
			<input type="submit" value="Select Seats" id="btn-login" class="btn btn-custom btn-lg btn-block">
		</div></div></div></div></section>
		</form>
		</form>
		</div>
		</div>
		<div id="foot">
			<img src="images/clabs-grey.png" style="height: 25px;">
			<h4 style="margin-left: 10px;">VIT <strong>Cinema 2k17</strong></h4>
			<div id="footer">
				<a href="https://www.youtube.com/watch?v=Y3Y4IgUn8xA"><img src="images/youtube.png">
				<h6>YouTube</h6></a>
				<a href="https://twitter.com/vit_univ?lang=en"><img src="images/twitter.png">
				<h6>Twitter</h6></a>
				<a href="https://www.facebook.com/vituniversity/"><img src="images/facebook.png">
				<h6>Facebook</h6></a>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src=script.js></script>
</body>
</html>