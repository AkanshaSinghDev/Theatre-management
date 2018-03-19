

<!DOCTYPE HTML>
<?php
    session_start(); // needs to be before anything else on page to use $_SESSION
?>
<?php
	 
	$host='localhost';
$username='root';
$password='';
$db_name='bookdeticket';

$conn = mysqli_connect($host, $username, $password,$db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	
?>

<HTML>

	<HEAD>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>VIT Cinema</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	</HEAD>

	<BODY>
		<br /><br /><br />
		<div class="container">
			<div class="row well">
				<div class="span10">
					<form action="saveticket.php" method="POST" onsubmit="return validateCheckBox();">
						<ul class="thumbnails">
						<?php
							$conn = mysqli_connect('localhost', 'root', '','bookdeticket');
							$tdates = $_SESSION["tdates"];
							$tnames = $_SESSION["tname"];
							$ttimes = $_SESSION["ttime"];
							$query = "select seatno from ticket where tdate = '" . $tdates . "' and mname = '" . $tnames . "' and time = '" . $ttimes . "'";
							$result=mysqli_query($conn,$query);	
							$row=mysqli_fetch_row($result);
							//$result = mysql_query($query);
							if ($row == 0 )
								//if ( mysql_num_rows($result) == 0 )
							{
								for($i=1; $i<101; $i++)
								{
									echo "<li class='span1'>";
										echo "<a href='#' class='thumbnail' title='Available'>";
											echo "<img src='img/available.png' alt='Available Seat'/>";
											echo "<label class='checkbox'>";
												echo "<input type='checkbox' name='ch".$i."'/>".$i;
											echo "</label>";
										echo "</a>";
									echo "</li>";								
								}
							}
							else
							{
								$seats = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0,0,0,0,0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0,0,0,0,0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0,0,0,0,0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0,0,0,0,0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0,0,0,0,0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0,0,0,0,0, 0, 0, 0, 0, 0,0,0,0,0,0);
								while($row = mysql_fetch_array($result))
								{
									$seatno = explode("-", $row['seatno']);
									$seatno[3] = intval($seatno[3]) - 1;
									$seats[$seatno[3]] = 1;
								}
								for($i=1; $i<101; $i++)
								{
									$j = $i - 1;
									if($seats[$j] == 1)
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Booked'>";
												echo "<img src='img/occupied.png' alt='Booked Seat'/>";
												echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."' disabled/>".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
									else
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Available'>";
												echo "<img src='img/available.png' alt='Available Seat'/>";
												echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."'/>".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
								}									
								
							}
						?>
						</ul>
						<center>
							
							<br><br>
							<button type="submit" class="btn btn-info">
								<i class="icon-ok icon-white"></i> Submit
							</button>
							<button type="reset" class="btn">
								<i class="icon-refresh icon-black"></i> Clear
							</button>
								</center>
					</form>
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
		<script>
			function validateCheckBox()
			{
				var c = document.getElementsByTagName('input');
				for (var i = 0; i < c.length; i++)
				{
					if (c[i].type == 'checkbox')
					{
						if (c[i].checked) 
						{
							return true;
						}
					}
				}
				alert('Please select at least 1 ticket.');
				return false;
			}
		</script>
	</BODY>
</HTML>