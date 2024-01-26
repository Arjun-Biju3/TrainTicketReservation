<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body background="images\announce1.jpg">
<div class="row" style="height:%; width:95%;background-color:white; padding:40px;">
		
	<center><font color="brown" size="30" ><B>ANNOUNCEMENTS</B></font></center>
	</div>
	<br>
	<br>
	<div style="background-color:red;width:40% ;height:60%;">

		<?php

$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select announcement FROM tbl_announcements";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {     

            echo $row['announcement']."<br>";
      }
}
mysqli_close($con);
?>
	</div>
</body>
</html>