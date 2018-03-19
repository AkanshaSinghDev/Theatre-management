 
<?php 
		session_start();
		$conn = mysqli_connect('localhost', 'root', '','bookdeticket');
		$sql="SELECT name FROM movie";
		$result=mysqli_query($conn,$sql);		
		$row=mysqli_fetch_row($result);
		//$conn1 = mysqli_connect('localhost', 'root', '','bookdeticket');
		$sql1="SELECT * FROM theatre where movie=$row[0]";
		$result1=mysqli_query($conn,$sql1);		
		$row1=mysqli_fetch_row($result1);
		echo $row;
		//extract($_POST);
		$tp=$_SESSION['types'];
		//$types=$_SESSION['types'];
		$t1=$row1[6];
		$t2=$row1[7];
		$t3=$row1[8];
		$mysqli = new mysqli('localhost', 'root','','bookdeticket');
		if($type=='platinum')
		{
			$abs=300;
		}
		else if($type=='gold')
		{
			$abs=200;
		}
		else
		{
			$abs=100;
		}
		$mfare=$_SESSION['mseats']*$abs;
		//$mseats=$seats;
		
		//$mfare=$_SESSION['mfare'];
		$mseat1=$_SESSION['mseats'];
		$tdate=$_SESSION['tdates'];
		$time=$_SESSION['ttime'];
		$emails=$_SESSION["mailid"];
		$theatres='VIT Cinema';
		$TotalPrice=(($mfare/100)*18+$mfare);
		$mysqli = new mysqli('localhost', 'root','','bookdeticket');
		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database');
		}
			$mysqli->query("select * FROM ticket");
			$query = "INSERT INTO ticket(mname,tdate,theatre,time,seatno,mfare,TotalPrice,email) VALUES ('$row[0]','$tdate','$theatres','$time','$mseat1','$mfare','$TotalPrice','$emails')";
			$insert_row = $mysqli->query($query);
			if($insert_row){
			  header("location:ticket.php");
			}
			else{
				die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
				
	?>
