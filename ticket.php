<!DOCTYPE html>
<?php 
	session_start();
	?>
<?php 
		$conn = mysqli_connect('localhost', 'root', '','bookdeticket');
		$sql1="SELECT mname FROM ticket order by tickID desc";
		$result1=mysqli_query($conn,$sql1);		
		$row1=mysqli_fetch_row($result1);
		$sql2="SELECT tdate FROM ticket order by tickID desc";
		$result2=mysqli_query($conn,$sql2);		
		$row2=mysqli_fetch_row($result2);
		$sql3="SELECT theatre FROM ticket order by tickID desc";
		$result3=mysqli_query($conn,$sql3);		
		$row3=mysqli_fetch_row($result3);
		$sql4="SELECT time FROM ticket order by tickID desc";
		$result4=mysqli_query($conn,$sql4);		
		$row4=mysqli_fetch_row($result4);
		$sql5="SELECT seatno FROM ticket order by tickID desc";
		$result5=mysqli_query($conn,$sql5);		
		$row5=mysqli_fetch_row($result5);
		$sql6="SELECT mfare FROM ticket order by tickID desc";
		$result6=mysqli_query($conn,$sql6);		
		$row6=mysqli_fetch_row($result6);
		$sql7="SELECT TotalPrice FROM ticket order by tickID desc";
		$result7=mysqli_query($conn,$sql7);		
		$row7=mysqli_fetch_row($result7);
		$rs=number_format((float)$row7[0]/64.7, 2, '.', '');
		$q="SELECT name, num FROM register WHERE email='$_SESSION[user]'";
		$res=mysqli_query($conn,$q);
		$res=$res->fetch_assoc();
	?>
<html lang="en-US">
<head>
	<title>VIT Cinema</title>
	<link rel=icon href="images/favicon.png">
	<meta name='viewport' content="width=device-width, height=device-height, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
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
	font-weight: 400; 
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
</script>
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
		</div>
		 <h6><p align="right"><?php echo "User : " . $_SESSION["user"] . "<br>";?></p></h6>
		<div id="expand">
	<body  topmargin="0">
		
		<br/><br/><br/>
		<center>
		<div class="container">
    
		<div class="row">
               
<div class="col-md-4">
            
<div class="panel panel-success">
                
<div class="panel-heading">
                    
<h4 class="text-center">
                        
Ticket Summary</h4>
                
</div>
                
<div class="panel-body text-center">
                    
 </div>
                
<ul class="list-group list-group-flush text-center">
                    
<li class="list-group-item"><i class="icon-ok text-danger"></i>Movie Name   : <?php echo $row1[0] ?></li>
                    
<li class="list-group-item"><i class="icon-ok text-danger"></i>Movie Date   : <?php echo $row2[0] ?></li>
                   
<li class="list-group-item"><i class="icon-ok text-danger"></i>Movie Time   : <?php echo $row4[0] ?></li>
                
<li class="list-group-item"><i class="icon-ok text-danger"></i>Theatre Name : <?php echo $row3[0] ?></li>
  
<li class="list-group-item"><i class="icon-ok text-danger"></i>Seats        : <?php echo $row5[0] ?></li>
  
<li class="list-group-item"><i class="icon-ok text-danger"></i>Fare         : <?php echo $row5[0] ?>*<?php echo $row6[0] ?></li>
  
<li class="list-group-item"><i class="icon-ok text-danger"></i>CGST         : 9%</li>
  
<li class="list-group-item"><i class="icon-ok text-danger"></i>SGST         : 9%</li>

<li class="list-group-item"><i class="icon-ok text-danger"></i>Grand Total  : <?php echo $row7[0] ?></li>
    
</ul>
                <div class="panel-footer">
                    
<div id="paypal-button-container"></div>

                </div>
            
</div>
        
</div>
       
         
    
</div>

</div>

		
		</div>
		</center>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		 <script>
		 	function mess() {
		 		$.post('http://vittrekkingclub.co.in/mail.php',
					JSON.stringify({
						"name":'<?php echo split(' ',$res['name'])[0] ?>',
						"phone":'<?php echo $res['num']; ?>',
						"email":'<?php echo $_SESSION['user'] ?>'
					}),
					function (data) {}, 'json');
		 	}
        paypal.Button.render({

            env: 'sandbox', // sandbox | production

            // PayPal Client IDs - replace with your own
            // Create a PayPal app: https://developer.paypal.com/developer/applications/create
            client: {
                sandbox:    'Aers7KnuVI5cB49u4uVUSu3THdnMOZUhL7gClHT_BDjs63PqFA0VrdP0vbmjlGuZ1NnzvvO_fbyMhQC5',
                production: '<insert production client id>'
            },

            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // payment() is called when the button is clicked
            payment: function(data, actions) {
            	console.log($('#total-amt').val());
                // Make a call to the REST api to create the payment
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: <?php echo $rs; ?>, currency: 'USD' }
                            }
                        ]
                    }
                });
            },

            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {
            	mess();                   
                // Make a call to the REST api to execute the payment
                return actions.payment.execute().then(function() {
					$('#paypal-button-container').text('Confirmed');
                });
            }

        }, '#paypal-button-container');
    </script>
	</body>
</html>