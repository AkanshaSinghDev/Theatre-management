<?php 
				session_start();
		$conn = mysqli_connect('localhost', 'root', '','bookdeticket');
		$sql="SELECT name FROM movie";
		$result=mysqli_query($conn,$sql);		
		$row=mysqli_fetch_row($result);
		$conn1 = mysqli_connect('localhost', 'root', '','bookdeticket');
		$sql1="SELECT * FROM theatre where movie=$row";
		$result1=mysqli_query($conn1,$sql1);		
		$row1=mysqli_fetch_row($result1);
		echo $row;
		$types = $_POST['ttype'];
		//$times = $_POST['ttimes'];
		$t1=$row1[6];
		$t2=$row1[7];
		$t3=$row1[8];
		//echo "<script type='text/javascript'>alert($t1)</script>";
		//echo "<script type='text/javascript'>alert($t2)</script>";
		//echo "<script type='text/javascript'>alert($t3)</script>";
		extract($_POST);
		/*$tp=$_POST['ttype'];
		$tp=$ttype;
		$_SESSION['types']=$ttype;
		//$types2=$_SESSION['types'];
		if($tp=='platinum')
		{
			$abs=$t1;
		}
		else if($tp=='gold')
		{
			$abs=$t2;
		}
		else if($tp=='silver')
		{
			$abs=$t3;
		}
		else
		{
			$abs=150;
		}*/
		$_SESSION['types']=$ttype;
		$types=$_SESSION['types'];
		$mysqli = new mysqli('localhost', 'root','','bookdeticket');
		if($types=='platinum')
		{
			$abs=300;
		}
		else if($types2=='gold')
		{
			$abs=200;
		}
		else
		{
			$abs=100;
		}
		$mfare=$seats*$abs;
		$mseats=$seats;
		//$_SESSION['mfare']=$seats*$abs;
		//$_SESSION['mseats']=$seats;
		//$_SESSION['tdates']=$tdate1;
		//$_SESSION['ttime']=$time1;
		$_SESSION['mfare']=$_POST['seats']*$abs;
		$_SESSION['mseats']=$_POST['seats'];
		$_SESSION['tdates']=$_POST['tdate1'];
		$_SESSION['tname']=$row[0];
		$_SESSION['ttime']=$_POST['time1'];
		//$_SESSION['ttimes']=$times;
		$emails=$_SESSION["mailid"];
		$theatres='VIT Cinema';
		if($types!=0){
		  header("location:seat.php");
		}
		else{
			die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>
