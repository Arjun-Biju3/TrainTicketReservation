<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>schedules</title>
</head>
<body>
<div class="row" style="height:%; width:95%;background-color:white; padding:40px;">
		<center>
		<img src="images\logo1.jpg">
	</center>
	<center><font color="blue" size="30" ><B>RAILWAY RESERVATION</B></font></center>
	</div>
	<div style="background-color:orange; height: 10%;width: 100%;">
      <marquee><font family="courier"><B>BOOK YOUR TICKETS HERE AND ENJOY A TENSION FREE JOURNEY</B></font></marquee>
	</div>
	<br><br>
	
	<center>
	<div style="background-color:red;height:100%;width: 50%;">
		<form method="post" action="book.php">
		<a href="#######">
			<font color="black" family="" size="5">
		<?php

$host="localhost";
$user="root";
$password="";
$db="railwaydb";


$strt=$_POST["srt"];
$des=$_POST["dest"];
$dt=$_POST["dat"];



$con=mysqli_connect($host,$user,$password,$db);
if($con===false)
{
      die("connection error");
} 

$qry="select tname,startingpt,destination,date,time FROM tbl_schedule where destination='$des' and startingpt='$strt'and date='$dt';";

$results=mysqli_query($con,$qry);

if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['tname']." ".$row['startingpt']." "."TO"." ".$row['destination']."<br>"."DATE"." :".$row['date']."<br>"."CHECK IN".":".$row['time']."<br>";
     
      }
      
}
mysqli_close($con);

?>

</a>
</font>
<br>

<input type="submit" value="BOOK NOW">
</form
	</div>

</center>

</body>
</html>