<!DOCTYPE html>
<html>

<head>

	<link rel=icon href="images/back.png">
	<meta name='viewport' content="width=device-width, height=device-height, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCDgDPM1e51R6SgC3Jxcq3rSbPn0g9qoRQ&sensor=false" type="text/javascript"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="angular/ngapp.js"></script>
    <script src="js/jquery-2.1.4.js"></script>
</head>
<body style="background-image:url('hcare2.jpeg'); background-repeat:no-repeat; background-size:100% 100%;">	


<div class="container">
		<div class="navbar">
			<h3>VIT <strong>Cinema</strong></h3>
			<ul class="nav nav-tabs">
			  <li role="presentation" class="active"><a href="index.php">Home</a></li>
			  <li role="presentation" class="active"><a href="review.php" >Reviews</a></li>
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


	
	
		<?php
			require("connect2.php");
			
			$array1 = array();
			$array2 = array();
			
			
			$sql = "SELECT XCOR,YCOR FROM details";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					array_push($array1,$row['XCOR']);
					array_push($array2,$row['YCOR']);					
				}
						
			//echo'<br>"X-COORDINATES":'.json_encode($array1).'<br>';					
			//echo'"Y-COORDINATES":'.json_encode($array2);				
				
			} else {
				echo "0 results";
			}
			$db->close();

		?>
		
		<p id="demo"></p>
		<p id="demo2"></p>
		
	
		<div id="map" style="height: 400px; width: 400px; margin:auto;"></div>	
		
		<br>
		<br><br>
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
		
		<script>
			var local = [];
			var local2 = [];			
			
			local.push(<?php echo json_encode($array1); ?>);
			
			local2.push(<?php echo json_encode($array2); ?>);
			
		//	document.getElementById("demo").innerHTML = local;
		//	document.getElementById("demo2").innerHTML = local2;	
		
		var map = new google.maps.Map(document.getElementById('map'), {
		  zoom: 8,
		  center: new google.maps.LatLng(13.3, 79.3),
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		var infowindow = new google.maps.InfoWindow();

		var marker, i;

		for (i = 0; i < local[0].length; i++) { 

		  marker = new google.maps.Marker({
			position: new google.maps.LatLng(parseFloat(local[0][i]), parseFloat(local2[0][i])),
			map: map
		  });		  

		}		
		</script>			


</body>
</html>
