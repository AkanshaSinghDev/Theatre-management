<!DOCTYPE html>
<?php 
		$conn = mysqli_connect('localhost', 'root', '','bookdeticket');
		$sql1="SELECT path FROM movie";
		$result1=mysqli_query($conn,$sql1);		
		$row1=mysqli_fetch_row($result1);
		//$sql2="SELECT seats FROM ticket";
		//$result2=mysqli_query($conn,$sql2);		
		//$row2=mysqli_fetch_row($result2);	
				
	?>
	
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>VIT Cinema</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr-custom.js"></script>
	</head>
	<body>
		<header class="header">
				<a class="codrops-icon codrops-icon--prev" href="home.php"></a>
			<h1 class="header__title">Back to Movie Names <span style="padding-left:21em">
	<?php 
	session_start();
	echo "User : " . $_SESSION["user"] . "<br>"; 
	?></center></h1>
		</header>
		<div class="container">
			<div class="cube">
				<div class="cube__side cube__side--front"></div>
				<div class="cube__side cube__side--back">
					<div class="screen">
						<div class="video">
							<video width="100%" class="video-player" src=<?php echo $row1[0] ?>  preload="auto" poster="media/poster1.jpg">
								<source src=<?php echo $row1[0] ?> type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'>
								<p>Sorry, but your browser does not support this video format.</p>
							</video>
							<button class="action action--play action--shown" aria-label="Play Video"></button>
						</div>
						<div class="intro intro--shown">
							<div class="intro__side">
								<h2 class="intro__title">
									<span class="intro__down">VIT Cinema<span class="intro__partial"></span></span>
								</h2>
							</div>
							<div class="intro__side">
								<button class="action action--seats">View Seating</button>
							</div>
						</div>
					</div>
				</div>
				<div class="cube__side cube__side--left"></div>
				<div class="cube__side cube__side--right"></div>
				<div class="cube__side cube__side--top"></div>
				<div class="rows rows--large">
					<div class="row">
						<div data-seat="A1" class="row__seat"></div>
						<div data-seat="A2" class="row__seat"></div>
						<div data-seat="A3" class="row__seat"></div>
						<div data-seat="A4" class="row__seat"></div>
						<div data-seat="A5" class="row__seat"></div>
						<div data-seat="A6" class="row__seat"></div>
						<div data-seat="A7" class="row__seat"></div>
						<div data-seat="A8" class="row__seat"></div>
						<div data-seat="A9" class="row__seat"></div>
						<div data-seat="A10" class="row__seat"></div>
						<div data-seat="A11" class="row__seat"></div>
						<div data-seat="A12" class="row__seat"></div>
						<div data-seat="A13" class="row__seat"></div>
						<div data-seat="A14" class="row__seat"></div>
						<div data-seat="A15" class="row__seat"></div>
						<div data-seat="A16" class="row__seat"></div>
						<div data-seat="A17" class="row__seat"></div>
						<div data-seat="A18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="B1" class="row__seat"></div>
						<div data-seat="B2" class="row__seat"></div>
						<div data-seat="B3" class="row__seat"></div>
						<div data-seat="B4" class="row__seat"></div>
						<div data-seat="B5" class="row__seat"></div>
						<div data-seat="B6" class="row__seat"></div>
						<div data-seat="B7" class="row__seat"></div>
						<div data-seat="B8" class="row__seat"></div>
						<div data-seat="B9" class="row__seat"></div>
						<div data-seat="B10" class="row__seat"></div>
						<div data-seat="B11" class="row__seat"></div>
						<div data-seat="B12" class="row__seat"></div>
						<div data-seat="B13" class="row__seat"></div>
						<div data-seat="B14" class="row__seat"></div>
						<div data-seat="B15" class="row__seat"></div>
						<div data-seat="B16" class="row__seat"></div>
						<div data-seat="B17" class="row__seat"></div>
						<div data-seat="B18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="C1" class="row__seat"></div>
						<div data-seat="C2" class="row__seat"></div>
						<div data-seat="C3" class="row__seat"></div>
						<div data-seat="C4" class="row__seat"></div>
						<div data-seat="C5" class="row__seat"></div>
						<div data-seat="C6" class="row__seat"></div>
						<div data-seat="C7" class="row__seat"></div>
						<div data-seat="C8" class="row__seat"></div>
						<div data-seat="C9" class="row__seat"></div>
						<div data-seat="C10" class="row__seat"></div>
						<div data-seat="C11" class="row__seat"></div>
						<div data-seat="C12" class="row__seat"></div>
						<div data-seat="C13" class="row__seat"></div>
						<div data-seat="C14" class="row__seat"></div>
						<div data-seat="C15" class="row__seat"></div>
						<div data-seat="C16" class="row__seat"></div>
						<div data-seat="C17" class="row__seat"></div>
						<div data-seat="C18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="D1" class="row__seat"></div>
						<div data-seat="D2" class="row__seat"></div>
						<div data-seat="D3" class="row__seat"></div>
						<div data-seat="D4" class="row__seat"></div>
						<div data-seat="D5" class="row__seat"></div>
						<div data-seat="D6" class="row__seat"></div>
						<div data-seat="D7" class="row__seat"></div>
						<div data-seat="D8" class="row__seat"></div>
						<div data-seat="D9" class="row__seat"></div>
						<div data-seat="D10" class="row__seat"></div>
						<div data-seat="D11" class="row__seat"></div>
						<div data-seat="D12" class="row__seat"></div>
						<div data-seat="D13" class="row__seat"></div>
						<div data-seat="D14" class="row__seat"></div>
						<div data-seat="D15" class="row__seat"></div>
						<div data-seat="D16" class="row__seat"></div>
						<div data-seat="D17" class="row__seat"></div>
						<div data-seat="D18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="E1" class="row__seat"></div>
						<div data-seat="E2" class="row__seat"></div>
						<div data-seat="E3" class="row__seat"></div>
						<div data-seat="E4" class="row__seat"></div>
						<div data-seat="E5" class="row__seat"></div>
						<div data-seat="E6" class="row__seat"></div>
						<div data-seat="E7" class="row__seat"></div>
						<div data-seat="E8" class="row__seat"></div>
						<div data-seat="E9" class="row__seat"></div>
						<div data-seat="E10" class="row__seat"></div>
						<div data-seat="E11" class="row__seat"></div>
						<div data-seat="E12" class="row__seat"></div>
						<div data-seat="E13" class="row__seat"></div>
						<div data-seat="E14" class="row__seat"></div>
						<div data-seat="E15" class="row__seat"></div>
						<div data-seat="E16" class="row__seat"></div>
						<div data-seat="E17" class="row__seat"></div>
						<div data-seat="E18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="F1" class="row__seat"></div>
						<div data-seat="F2" class="row__seat"></div>
						<div data-seat="F3" class="row__seat"></div>
						<div data-seat="F4" class="row__seat"></div>
						<div data-seat="F5" class="row__seat"></div>
						<div data-seat="F6" class="row__seat"></div>
						<div data-seat="F7" class="row__seat"></div>
						<div data-seat="F8" class="row__seat"></div>
						<div data-seat="F9" class="row__seat"></div>
						<div data-seat="F10" class="row__seat"></div>
						<div data-seat="F11" class="row__seat"></div>
						<div data-seat="F12" class="row__seat"></div>
						<div data-seat="F13" class="row__seat"></div>
						<div data-seat="F14" class="row__seat"></div>
						<div data-seat="F15" class="row__seat"></div>
						<div data-seat="F16" class="row__seat"></div>
						<div data-seat="F17" class="row__seat"></div>
						<div data-seat="F18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="G1" class="row__seat"></div>
						<div data-seat="G2" class="row__seat"></div>
						<div data-seat="G3" class="row__seat"></div>
						<div data-seat="G4" class="row__seat"></div>
						<div data-seat="G5" class="row__seat"></div>
						<div data-seat="G6" class="row__seat"></div>
						<div data-seat="G7" class="row__seat"></div>
						<div data-seat="G8" class="row__seat"></div>
						<div data-seat="G9" class="row__seat"></div>
						<div data-seat="G10" class="row__seat"></div>
						<div data-seat="G11" class="row__seat"></div>
						<div data-seat="G12" class="row__seat"></div>
						<div data-seat="G13" class="row__seat"></div>
						<div data-seat="G14" class="row__seat"></div>
						<div data-seat="G15" class="row__seat"></div>
						<div data-seat="G16" class="row__seat"></div>
						<div data-seat="G17" class="row__seat"></div>
						<div data-seat="G18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="H1" class="row__seat"></div>
						<div data-seat="H2" class="row__seat"></div>
						<div data-seat="H3" class="row__seat"></div>
						<div data-seat="H4" class="row__seat"></div>
						<div data-seat="H5" class="row__seat"></div>
						<div data-seat="H6" class="row__seat"></div>
						<div data-seat="H7" class="row__seat"></div>
						<div data-seat="H8" class="row__seat"></div>
						<div data-seat="H9" class="row__seat"></div>
						<div data-seat="H10" class="row__seat"></div>
						<div data-seat="H11" class="row__seat"></div>
						<div data-seat="H12" class="row__seat"></div>
						<div data-seat="H13" class="row__seat"></div>
						<div data-seat="H14" class="row__seat"></div>
						<div data-seat="H15" class="row__seat"></div>
						<div data-seat="H16" class="row__seat"></div>
						<div data-seat="H17" class="row__seat"></div>
						<div data-seat="H18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="I1" class="row__seat"></div>
						<div data-seat="I2" class="row__seat"></div>
						<div data-seat="I3" class="row__seat"></div>
						<div data-seat="I4" class="row__seat"></div>
						<div data-seat="I5" class="row__seat"></div>
						<div data-seat="I6" class="row__seat"></div>
						<div data-seat="I7" class="row__seat"></div>
						<div data-seat="I8" class="row__seat"></div>
						<div data-seat="I9" class="row__seat"></div>
						<div data-seat="I10" class="row__seat"></div>
						<div data-seat="I11" class="row__seat"></div>
						<div data-seat="I12" class="row__seat"></div>
						<div data-seat="I13" class="row__seat"></div>
						<div data-seat="I14" class="row__seat"></div>
						<div data-seat="I15" class="row__seat"></div>
						<div data-seat="I16" class="row__seat"></div>
						<div data-seat="I17" class="row__seat"></div>
						<div data-seat="I18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="J1" class="row__seat"></div>
						<div data-seat="J2" class="row__seat"></div>
						<div data-seat="J3" class="row__seat"></div>
						<div data-seat="J4" class="row__seat"></div>
						<div data-seat="J5" class="row__seat"></div>
						<div data-seat="J6" class="row__seat"></div>
						<div data-seat="J7" class="row__seat"></div>
						<div data-seat="J8" class="row__seat"></div>
						<div data-seat="J9" class="row__seat"></div>
						<div data-seat="J10" class="row__seat"></div>
						<div data-seat="J11" class="row__seat"></div>
						<div data-seat="J12" class="row__seat"></div>
						<div data-seat="J13" class="row__seat"></div>
						<div data-seat="J14" class="row__seat"></div>
						<div data-seat="J15" class="row__seat"></div>
						<div data-seat="J16" class="row__seat"></div>
						<div data-seat="J17" class="row__seat"></div>
						<div data-seat="J18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="K1" class="row__seat"></div>
						<div data-seat="K2" class="row__seat"></div>
						<div data-seat="K3" class="row__seat"></div>
						<div data-seat="K4" class="row__seat"></div>
						<div data-seat="K5" class="row__seat"></div>
						<div data-seat="K6" class="row__seat"></div>
						<div data-seat="K7" class="row__seat"></div>
						<div data-seat="K8" class="row__seat"></div>
						<div data-seat="K9" class="row__seat"></div>
						<div data-seat="K10" class="row__seat"></div>
						<div data-seat="K11" class="row__seat"></div>
						<div data-seat="K12" class="row__seat"></div>
						<div data-seat="K13" class="row__seat"></div>
						<div data-seat="K14" class="row__seat"></div>
						<div data-seat="K15" class="row__seat"></div>
						<div data-seat="K16" class="row__seat"></div>
						<div data-seat="K17" class="row__seat"></div>
						<div data-seat="K18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="L1" class="row__seat"></div>
						<div data-seat="L2" class="row__seat"></div>
						<div data-seat="L3" class="row__seat"></div>
						<div data-seat="L4" class="row__seat"></div>
						<div data-seat="L5" class="row__seat"></div>
						<div data-seat="L6" class="row__seat"></div>
						<div data-seat="L7" class="row__seat"></div>
						<div data-seat="L8" class="row__seat"></div>
						<div data-seat="L9" class="row__seat"></div>
						<div data-seat="L10" class="row__seat"></div>
						<div data-seat="L11" class="row__seat"></div>
						<div data-seat="L12" class="row__seat"></div>
						<div data-seat="L13" class="row__seat"></div>
						<div data-seat="L14" class="row__seat"></div>
						<div data-seat="L15" class="row__seat"></div>
						<div data-seat="L16" class="row__seat"></div>
						<div data-seat="L17" class="row__seat"></div>
						<div data-seat="L18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="M1" class="row__seat"></div>
						<div data-seat="M2" class="row__seat"></div>
						<div data-seat="M3" class="row__seat"></div>
						<div data-seat="M4" class="row__seat"></div>
						<div data-seat="M5" class="row__seat"></div>
						<div data-seat="M6" class="row__seat"></div>
						<div data-seat="M7" class="row__seat"></div>
						<div data-seat="M8" class="row__seat"></div>
						<div data-seat="M9" class="row__seat"></div>
						<div data-seat="M10" class="row__seat"></div>
						<div data-seat="M11" class="row__seat"></div>
						<div data-seat="M12" class="row__seat"></div>
						<div data-seat="M13" class="row__seat"></div>
						<div data-seat="M14" class="row__seat"></div>
						<div data-seat="M15" class="row__seat"></div>
						<div data-seat="M16" class="row__seat"></div>
						<div data-seat="M17" class="row__seat"></div>
						<div data-seat="M18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="N1" class="row__seat"></div>
						<div data-seat="N2" class="row__seat"></div>
						<div data-seat="N3" class="row__seat"></div>
						<div data-seat="N4" class="row__seat"></div>
						<div data-seat="N5" class="row__seat"></div>
						<div data-seat="N6" class="row__seat"></div>
						<div data-seat="N7" class="row__seat"></div>
						<div data-seat="N8" class="row__seat"></div>
						<div data-seat="N9" class="row__seat"></div>
						<div data-seat="N10" class="row__seat"></div>
						<div data-seat="N11" class="row__seat"></div>
						<div data-seat="N12" class="row__seat"></div>
						<div data-seat="N13" class="row__seat"></div>
						<div data-seat="N14" class="row__seat"></div>
						<div data-seat="N15" class="row__seat"></div>
						<div data-seat="N16" class="row__seat"></div>
						<div data-seat="N17" class="row__seat"></div>
						<div data-seat="N18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="O1" class="row__seat"></div>
						<div data-seat="O2" class="row__seat"></div>
						<div data-seat="O3" class="row__seat"></div>
						<div data-seat="O4" class="row__seat"></div>
						<div data-seat="O5" class="row__seat"></div>
						<div data-seat="O6" class="row__seat"></div>
						<div data-seat="O7" class="row__seat"></div>
						<div data-seat="O8" class="row__seat"></div>
						<div data-seat="O9" class="row__seat"></div>
						<div data-seat="O10" class="row__seat"></div>
						<div data-seat="O11" class="row__seat"></div>
						<div data-seat="O12" class="row__seat"></div>
						<div data-seat="O13" class="row__seat"></div>
						<div data-seat="O14" class="row__seat"></div>
						<div data-seat="O15" class="row__seat"></div>
						<div data-seat="O16" class="row__seat"></div>
						<div data-seat="O17" class="row__seat"></div>
						<div data-seat="O18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="P1" class="row__seat"></div>
						<div data-seat="P2" class="row__seat"></div>
						<div data-seat="P3" class="row__seat"></div>
						<div data-seat="P4" class="row__seat"></div>
						<div data-seat="P5" class="row__seat"></div>
						<div data-seat="P6" class="row__seat"></div>
						<div data-seat="P7" class="row__seat"></div>
						<div data-seat="P8" class="row__seat"></div>
						<div data-seat="P9" class="row__seat"></div>
						<div data-seat="P10" class="row__seat"></div>
						<div data-seat="P11" class="row__seat"></div>
						<div data-seat="P12" class="row__seat"></div>
						<div data-seat="P13" class="row__seat"></div>
						<div data-seat="P14" class="row__seat"></div>
						<div data-seat="P15" class="row__seat"></div>
						<div data-seat="P16" class="row__seat"></div>
						<div data-seat="P17" class="row__seat"></div>
						<div data-seat="P18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="Q1" class="row__seat"></div>
						<div data-seat="Q2" class="row__seat"></div>
						<div data-seat="Q3" class="row__seat"></div>
						<div data-seat="Q4" class="row__seat"></div>
						<div data-seat="Q5" class="row__seat"></div>
						<div data-seat="Q6" class="row__seat"></div>
						<div data-seat="Q7" class="row__seat"></div>
						<div data-seat="Q8" class="row__seat"></div>
						<div data-seat="Q9" class="row__seat"></div>
						<div data-seat="Q10" class="row__seat"></div>
						<div data-seat="Q11" class="row__seat"></div>
						<div data-seat="Q12" class="row__seat"></div>
						<div data-seat="Q13" class="row__seat"></div>
						<div data-seat="Q14" class="row__seat"></div>
						<div data-seat="Q15" class="row__seat"></div>
						<div data-seat="Q16" class="row__seat"></div>
						<div data-seat="Q17" class="row__seat"></div>
						<div data-seat="Q18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="R1" class="row__seat"></div>
						<div data-seat="R2" class="row__seat"></div>
						<div data-seat="R3" class="row__seat"></div>
						<div data-seat="R4" class="row__seat"></div>
						<div data-seat="R5" class="row__seat"></div>
						<div data-seat="R6" class="row__seat"></div>
						<div data-seat="R7" class="row__seat"></div>
						<div data-seat="R8" class="row__seat"></div>
						<div data-seat="R9" class="row__seat"></div>
						<div data-seat="R10" class="row__seat"></div>
						<div data-seat="R11" class="row__seat"></div>
						<div data-seat="R12" class="row__seat"></div>
						<div data-seat="R13" class="row__seat"></div>
						<div data-seat="R14" class="row__seat"></div>
						<div data-seat="R15" class="row__seat"></div>
						<div data-seat="R16" class="row__seat"></div>
						<div data-seat="R17" class="row__seat"></div>
						<div data-seat="R18" class="row__seat"></div>
					</div>
				</div>
				<!-- /rows -->
			</div><!-- /cube -->
		</div><!-- /container -->
		<div class="plan">
			<h3 class="plan__title">Screen Projection</h3>
			<div class="rows rows--mini">
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="A1"></div>
					<div class="row__seat tooltip" data-tooltip="A2"></div>
					<div class="row__seat tooltip" data-tooltip="A3"></div>
					<div class="row__seat tooltip" data-tooltip="A4"></div>
					<div class="row__seat tooltip" data-tooltip="A5"></div>
					<div class="row__seat tooltip" data-tooltip="A6"></div>
					<div class="row__seat tooltip" data-tooltip="A7"></div>
					<div class="row__seat tooltip" data-tooltip="A8"></div>
					<div class="row__seat tooltip" data-tooltip="A9"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="A13"></div>
					<div class="row__seat tooltip" data-tooltip="A14"></div>
					<div class="row__seat tooltip" data-tooltip="A15"></div>
					<div class="row__seat tooltip" data-tooltip="A16"></div>
					<div class="row__seat tooltip" data-tooltip="A17"></div>
					<div class="row__seat tooltip" data-tooltip="A18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="B1"></div>
					<div class="row__seat tooltip" data-tooltip="B2"></div>
					<div class="row__seat tooltip" data-tooltip="B3"></div>
					<div class="row__seat tooltip" data-tooltip="B4"></div>
					<div class="row__seat tooltip" data-tooltip="B5"></div>
					<div class="row__seat tooltip" data-tooltip="B6"></div>
					<div class="row__seat tooltip" data-tooltip="B7"></div>
					<div class="row__seat tooltip" data-tooltip="B8"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="B11"></div>
					<div class="row__seat tooltip" data-tooltip="B12"></div>
					<div class="row__seat tooltip" data-tooltip="B13"></div>
					<div class="row__seat tooltip" data-tooltip="B14"></div>
					<div class="row__seat tooltip" data-tooltip="B15"></div>
					<div class="row__seat tooltip" data-tooltip="B16"></div>
					<div class="row__seat tooltip" data-tooltip="B17"></div>
					<div class="row__seat tooltip" data-tooltip="B18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="C1"></div>
					<div class="row__seat tooltip" data-tooltip="C2"></div>
					<div class="row__seat tooltip" data-tooltip="C3"></div>
					<div class="row__seat tooltip" data-tooltip="C4"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="C8"></div>
					<div class="row__seat tooltip" data-tooltip="C9"></div>
					<div class="row__seat tooltip" data-tooltip="C10"></div>
					<div class="row__seat tooltip" data-tooltip="C11"></div>
					<div class="row__seat tooltip" data-tooltip="C12"></div>
					<div class="row__seat tooltip" data-tooltip="C13"></div>
					<div class="row__seat tooltip" data-tooltip="C14"></div>
					<div class="row__seat tooltip" data-tooltip="C15"></div>
					<div class="row__seat tooltip" data-tooltip="C16"></div>
					<div class="row__seat tooltip" data-tooltip="C17"></div>
					<div class="row__seat tooltip" data-tooltip="C18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="D1"></div>
					<div class="row__seat tooltip" data-tooltip="D2"></div>
					<div class="row__seat tooltip" data-tooltip="D3"></div>
					<div class="row__seat tooltip" data-tooltip="D4"></div>
					<div class="row__seat tooltip" data-tooltip="D5"></div>
					<div class="row__seat tooltip" data-tooltip="D6"></div>
					<div class="row__seat tooltip" data-tooltip="D7"></div>
					<div class="row__seat tooltip" data-tooltip="D8"></div>
					<div class="row__seat tooltip" data-tooltip="D9"></div>
					<div class="row__seat tooltip" data-tooltip="D10"></div>
					<div class="row__seat tooltip" data-tooltip="D11"></div>
					<div class="row__seat tooltip" data-tooltip="D12"></div>
					<div class="row__seat tooltip" data-tooltip="D13"></div>
					<div class="row__seat tooltip" data-tooltip="D14"></div>
					<div class="row__seat tooltip" data-tooltip="D15"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="E1"></div>
					<div class="row__seat tooltip" data-tooltip="E2"></div>
					<div class="row__seat tooltip" data-tooltip="E3"></div>
					<div class="row__seat tooltip" data-tooltip="E4"></div>
					<div class="row__seat tooltip" data-tooltip="E5"></div>
					<div class="row__seat tooltip" data-tooltip="E6"></div>
					<div class="row__seat tooltip" data-tooltip="E7"></div>
					<div class="row__seat tooltip" data-tooltip="E8"></div>
					<div class="row__seat tooltip" data-tooltip="E9"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="E12"></div>
					<div class="row__seat tooltip" data-tooltip="E13"></div>
					<div class="row__seat tooltip" data-tooltip="E14"></div>
					<div class="row__seat tooltip" data-tooltip="E15"></div>
					<div class="row__seat tooltip" data-tooltip="E16"></div>
					<div class="row__seat tooltip" data-tooltip="E17"></div>
					<div class="row__seat tooltip" data-tooltip="E18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="F1"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="F3"></div>
					<div class="row__seat tooltip" data-tooltip="F4"></div>
					<div class="row__seat tooltip" data-tooltip="F5"></div>
					<div class="row__seat tooltip" data-tooltip="F6"></div>
					<div class="row__seat tooltip" data-tooltip="F7"></div>
					<div class="row__seat tooltip" data-tooltip="F8"></div>
					<div class="row__seat tooltip" data-tooltip="F9"></div>
					<div class="row__seat tooltip" data-tooltip="F10"></div>
					<div class="row__seat tooltip" data-tooltip="F11"></div>
					<div class="row__seat tooltip" data-tooltip="F12"></div>
					<div class="row__seat tooltip" data-tooltip="F13"></div>
					<div class="row__seat tooltip" data-tooltip="F14"></div>
					<div class="row__seat tooltip" data-tooltip="F15"></div>
					<div class="row__seat tooltip" data-tooltip="F16"></div>
					<div class="row__seat tooltip" data-tooltip="F17"></div>
					<div class="row__seat tooltip" data-tooltip="F18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="G1"></div>
					<div class="row__seat tooltip" data-tooltip="G2"></div>
					<div class="row__seat tooltip" data-tooltip="G3"></div>
					<div class="row__seat tooltip" data-tooltip="G4"></div>
					<div class="row__seat tooltip" data-tooltip="G5"></div>
					<div class="row__seat tooltip" data-tooltip="G6"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="G9"></div>
					<div class="row__seat tooltip" data-tooltip="G10"></div>
					<div class="row__seat tooltip" data-tooltip="G11"></div>
					<div class="row__seat tooltip" data-tooltip="G12"></div>
					<div class="row__seat tooltip" data-tooltip="G13"></div>
					<div class="row__seat tooltip" data-tooltip="G14"></div>
					<div class="row__seat tooltip" data-tooltip="G15"></div>
					<div class="row__seat tooltip" data-tooltip="G16"></div>
					<div class="row__seat tooltip" data-tooltip="G17"></div>
					<div class="row__seat tooltip" data-tooltip="G18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="H1"></div>
					<div class="row__seat tooltip" data-tooltip="H2"></div>
					<div class="row__seat tooltip" data-tooltip="H3"></div>
					<div class="row__seat tooltip" data-tooltip="H4"></div>
					<div class="row__seat tooltip" data-tooltip="H5"></div>
					<div class="row__seat tooltip" data-tooltip="H6"></div>
					<div class="row__seat tooltip" data-tooltip="H7"></div>
					<div class="row__seat tooltip" data-tooltip="H8"></div>
					<div class="row__seat tooltip" data-tooltip="H9"></div>
					<div class="row__seat tooltip" data-tooltip="H10"></div>
					<div class="row__seat tooltip" data-tooltip="H11"></div>
					<div class="row__seat tooltip" data-tooltip="H12"></div>
					<div class="row__seat tooltip" data-tooltip="H13"></div>
					<div class="row__seat tooltip" data-tooltip="H14"></div>
					<div class="row__seat tooltip" data-tooltip="H15"></div>
					<div class="row__seat tooltip" data-tooltip="H16"></div>
					<div class="row__seat tooltip" data-tooltip="H17"></div>
					<div class="row__seat tooltip" data-tooltip="H18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="I1"></div>
					<div class="row__seat tooltip" data-tooltip="I2"></div>
					<div class="row__seat tooltip" data-tooltip="I3"></div>
					<div class="row__seat tooltip" data-tooltip="I4"></div>
					<div class="row__seat tooltip" data-tooltip="I5"></div>
					<div class="row__seat tooltip" data-tooltip="I6"></div>
					<div class="row__seat tooltip" data-tooltip="I7"></div>
					<div class="row__seat tooltip" data-tooltip="I8"></div>
					<div class="row__seat tooltip" data-tooltip="I9"></div>
					<div class="row__seat tooltip" data-tooltip="I10"></div>
					<div class="row__seat tooltip" data-tooltip="I11"></div>
					<div class="row__seat tooltip" data-tooltip="I12"></div>
					<div class="row__seat tooltip" data-tooltip="I13"></div>
					<div class="row__seat tooltip" data-tooltip="I14"></div>
					<div class="row__seat tooltip" data-tooltip="I15"></div>
					<div class="row__seat tooltip" data-tooltip="I16"></div>
					<div class="row__seat tooltip" data-tooltip="I17"></div>
					<div class="row__seat tooltip" data-tooltip="I18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="J1"></div>
					<div class="row__seat tooltip" data-tooltip="J2"></div>
					<div class="row__seat tooltip" data-tooltip="J3"></div>
					<div class="row__seat tooltip" data-tooltip="J4"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="J8"></div>
					<div class="row__seat tooltip" data-tooltip="J9"></div>
					<div class="row__seat tooltip" data-tooltip="J10"></div>
					<div class="row__seat tooltip" data-tooltip="J11"></div>
					<div class="row__seat tooltip" data-tooltip="J12"></div>
					<div class="row__seat tooltip" data-tooltip="J13"></div>
					<div class="row__seat tooltip" data-tooltip="J14"></div>
					<div class="row__seat tooltip" data-tooltip="J15"></div>
					<div class="row__seat tooltip" data-tooltip="J16"></div>
					<div class="row__seat tooltip" data-tooltip="J17"></div>
					<div class="row__seat tooltip" data-tooltip="J18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="K1"></div>
					<div class="row__seat tooltip" data-tooltip="K2"></div>
					<div class="row__seat tooltip" data-tooltip="K3"></div>
					<div class="row__seat tooltip" data-tooltip="K4"></div>
					<div class="row__seat tooltip" data-tooltip="K5"></div>
					<div class="row__seat tooltip" data-tooltip="K6"></div>
					<div class="row__seat tooltip" data-tooltip="K7"></div>
					<div class="row__seat tooltip" data-tooltip="K8"></div>
					<div class="row__seat tooltip" data-tooltip="K9"></div>
					<div class="row__seat tooltip" data-tooltip="K10"></div>
					<div class="row__seat tooltip" data-tooltip="K11"></div>
					<div class="row__seat tooltip" data-tooltip="K12"></div>
					<div class="row__seat tooltip" data-tooltip="K13"></div>
					<div class="row__seat tooltip" data-tooltip="K14"></div>
					<div class="row__seat tooltip" data-tooltip="K15"></div>
					<div class="row__seat tooltip" data-tooltip="K16"></div>
					<div class="row__seat tooltip" data-tooltip="K17"></div>
					<div class="row__seat tooltip" data-tooltip="K18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="L1"></div>
					<div class="row__seat tooltip" data-tooltip="L2"></div>
					<div class="row__seat tooltip" data-tooltip="L3"></div>
					<div class="row__seat tooltip" data-tooltip="L4"></div>
					<div class="row__seat tooltip" data-tooltip="L5"></div>
					<div class="row__seat tooltip" data-tooltip="L6"></div>
					<div class="row__seat tooltip" data-tooltip="L7"></div>
					<div class="row__seat tooltip" data-tooltip="L8"></div>
					<div class="row__seat tooltip" data-tooltip="L9"></div>
					<div class="row__seat tooltip" data-tooltip="L10"></div>
					<div class="row__seat tooltip" data-tooltip="L11"></div>
					<div class="row__seat tooltip" data-tooltip="L12"></div>
					<div class="row__seat tooltip" data-tooltip="L13"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="L17"></div>
					<div class="row__seat tooltip" data-tooltip="L18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="M1"></div>
					<div class="row__seat tooltip" data-tooltip="M2"></div>
					<div class="row__seat tooltip" data-tooltip="M3"></div>
					<div class="row__seat tooltip" data-tooltip="M4"></div>
					<div class="row__seat tooltip" data-tooltip="M5"></div>
					<div class="row__seat tooltip" data-tooltip="M6"></div>
					<div class="row__seat tooltip" data-tooltip="M7"></div>
					<div class="row__seat tooltip" data-tooltip="M8"></div>
					<div class="row__seat tooltip" data-tooltip="M9"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="M14"></div>
					<div class="row__seat tooltip" data-tooltip="M15"></div>
					<div class="row__seat tooltip" data-tooltip="M16"></div>
					<div class="row__seat tooltip" data-tooltip="M17"></div>
					<div class="row__seat tooltip" data-tooltip="M18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="N1"></div>
					<div class="row__seat tooltip" data-tooltip="N2"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="N5"></div>
					<div class="row__seat tooltip" data-tooltip="N6"></div>
					<div class="row__seat tooltip" data-tooltip="N7"></div>
					<div class="row__seat tooltip" data-tooltip="N8"></div>
					<div class="row__seat tooltip" data-tooltip="N9"></div>
					<div class="row__seat tooltip" data-tooltip="N10"></div>
					<div class="row__seat tooltip" data-tooltip="N11"></div>
					<div class="row__seat tooltip" data-tooltip="N12"></div>
					<div class="row__seat tooltip" data-tooltip="N13"></div>
					<div class="row__seat tooltip" data-tooltip="N14"></div>
					<div class="row__seat tooltip" data-tooltip="N15"></div>
					<div class="row__seat tooltip" data-tooltip="N16"></div>
					<div class="row__seat tooltip" data-tooltip="N17"></div>
					<div class="row__seat tooltip" data-tooltip="N18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="O1"></div>
					<div class="row__seat tooltip" data-tooltip="O2"></div>
					<div class="row__seat tooltip" data-tooltip="O3"></div>
					<div class="row__seat tooltip" data-tooltip="O4"></div>
					<div class="row__seat tooltip" data-tooltip="O5"></div>
					<div class="row__seat tooltip" data-tooltip="O6"></div>
					<div class="row__seat tooltip" data-tooltip="O7"></div>
					<div class="row__seat tooltip" data-tooltip="O8"></div>
					<div class="row__seat tooltip" data-tooltip="O9"></div>
					<div class="row__seat tooltip" data-tooltip="O10"></div>
					<div class="row__seat tooltip" data-tooltip="O11"></div>
					<div class="row__seat tooltip" data-tooltip="O12"></div>
					<div class="row__seat tooltip" data-tooltip="O13"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat row__seat--reserved"></div>
					<div class="row__seat tooltip" data-tooltip="O16"></div>
					<div class="row__seat tooltip" data-tooltip="O17"></div>
					<div class="row__seat tooltip" data-tooltip="O18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="P1"></div>
					<div class="row__seat tooltip" data-tooltip="P2"></div>
					<div class="row__seat tooltip" data-tooltip="P3"></div>
					<div class="row__seat tooltip" data-tooltip="P4"></div>
					<div class="row__seat tooltip" data-tooltip="P5"></div>
					<div class="row__seat tooltip" data-tooltip="P6"></div>
					<div class="row__seat tooltip" data-tooltip="P7"></div>
					<div class="row__seat tooltip" data-tooltip="P8"></div>
					<div class="row__seat tooltip" data-tooltip="P9"></div>
					<div class="row__seat tooltip" data-tooltip="P10"></div>
					<div class="row__seat tooltip" data-tooltip="P11"></div>
					<div class="row__seat tooltip" data-tooltip="P12"></div>
					<div class="row__seat tooltip" data-tooltip="P13"></div>
					<div class="row__seat tooltip" data-tooltip="P14"></div>
					<div class="row__seat tooltip" data-tooltip="P15"></div>
					<div class="row__seat tooltip" data-tooltip="P16"></div>
					<div class="row__seat tooltip" data-tooltip="P17"></div>
					<div class="row__seat tooltip" data-tooltip="P18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="Q1"></div>
					<div class="row__seat tooltip" data-tooltip="Q2"></div>
					<div class="row__seat tooltip" data-tooltip="Q3"></div>
					<div class="row__seat tooltip" data-tooltip="Q4"></div>
					<div class="row__seat tooltip" data-tooltip="Q5"></div>
					<div class="row__seat tooltip" data-tooltip="Q6"></div>
					<div class="row__seat tooltip" data-tooltip="Q7"></div>
					<div class="row__seat tooltip" data-tooltip="Q8"></div>
					<div class="row__seat tooltip" data-tooltip="Q9"></div>
					<div class="row__seat tooltip" data-tooltip="Q10"></div>
					<div class="row__seat tooltip" data-tooltip="Q11"></div>
					<div class="row__seat tooltip" data-tooltip="Q12"></div>
					<div class="row__seat tooltip" data-tooltip="Q13"></div>
					<div class="row__seat tooltip" data-tooltip="Q14"></div>
					<div class="row__seat tooltip" data-tooltip="Q15"></div>
					<div class="row__seat tooltip" data-tooltip="Q16"></div>
					<div class="row__seat tooltip" data-tooltip="Q17"></div>
					<div class="row__seat tooltip" data-tooltip="Q18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" data-tooltip="R1"></div>
					<div class="row__seat tooltip" data-tooltip="R2"></div>
					<div class="row__seat tooltip" data-tooltip="R3"></div>
					<div class="row__seat tooltip" data-tooltip="R4"></div>
					<div class="row__seat tooltip" data-tooltip="R5"></div>
					<div class="row__seat tooltip" data-tooltip="R6"></div>
					<div class="row__seat tooltip" data-tooltip="R7"></div>
					<div class="row__seat tooltip" data-tooltip="R8"></div>
					<div class="row__seat tooltip" data-tooltip="R9"></div>
					<div class="row__seat tooltip" data-tooltip="R10"></div>
					<div class="row__seat tooltip" data-tooltip="R11"></div>
					<div class="row__seat tooltip" data-tooltip="R12"></div>
					<div class="row__seat tooltip" data-tooltip="R13"></div>
					<div class="row__seat tooltip" data-tooltip="R14"></div>
					<div class="row__seat tooltip" data-tooltip="R15"></div>
					<div class="row__seat tooltip" data-tooltip="R16"></div>
					<div class="row__seat tooltip" data-tooltip="R17"></div>
					<div class="row__seat tooltip" data-tooltip="R18"></div>
				</div>
			</div>
			
			<form method="POST" action="option.php">
			<div class="styled-select yellow rounded">
			
			</div>
			<button type="submit" class="action action--buy">Select Seating</button>
			</form>
		</div><!-- /plan -->
		<button class="action action--lookaround action--disabled" arial-label="Unlook View"></button>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>