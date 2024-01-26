<html>
<head>
	<title>edit train</title>
</head>
<body >
      <div>
            <form method="POST">
            <input type="date" name="date">
            <input type="submit" name="sub">
      </form>
      </div>
	 <div class="row" style="height: 90%; width: 93%;background-color:white; padding:40px;">
<center>
	<table  border="2">
		<tr>
			<th>ID</th>
			<TH>SEATNO</TH>
			<TH>STATUS</TH>
			<TH>PASSENGER</TH>
			<TH>TICKETNO</TH>
		</tr>
		<tr>
			<td>	
	<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 
$date=$_POST['date'];

$qry="select id FROM tbl_ticket_checking where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['id']."<br>";
     
      }
      
}
mysqli_close($con);

?>
</td>
<td>

	<?php

$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select seatno FROM tbl_ticket_checking where date='$date';";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

     echo $row['seatno']."<br>";
     
      }
      
}
mysqli_close($con);

?>
</td>
<td>

	<?php

$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select status FROM tbl_ticket_checking where date='$date';";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['status']."<br>";
     
      }
      
}
mysqli_close($con);

?>
</td>
<td>

	<?php

$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select passenger FROM tbl_ticket_checking where date='$date';";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['passenger']."<br>";
     
      }
      
}
mysqli_close($con);

?>
</td>
<td>

	<?php

$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select ticketno FROM tbl_ticket_checking where date='$date';";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['ticketno']."<br>";
     
      }
      
}
mysqli_close($con);

?>
</td>
</tr>
	</table>
</center>

</div>

</body>
</html>