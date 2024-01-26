<html>
<head>
	<title>edit train</title>
</head>
<body>

<div style="background-color:white; ">
      
    <center><font color="brown" size="30" ><B>RAILWAY RESERVATION</B></font></center>
    </div>


<div style="background-color:blue; width:100%">
	<center>
	<p><b><h1>BOOKINGS</h1></b></p>
</center>
	
</div>
<div>
	<form method="POST">
		<input type="date" name="date">
		<input type="submit" name="sub">
	</form>
</div>	
 

<div class="row" style="height: 90%; width: 98%;background-color:white; padding:40px;">
      <center>
<table  border="1">
		<tr>
			<th>TICKET ID</th>
			<TH> TRAIN</TH>
			<TH>DATE</TH>
			<TH>CHECK IN</TH>
			<TH>DESTINATION</TH>
			<TH>NO OF SEATS</TH>
			<th>CLASS</th>
			<th>NAME</th>
				<th>EMAIL</th>
			<th>PHONE</th>
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

$qry="select * FROM tbl_reservation where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['ticket_id']."<br>";
     
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

$qry="select * FROM tbl_reservation where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['train']."<br>";
     
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

$qry="select * FROM tbl_reservation where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['date']."<br>";
     
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

$qry="select * FROM tbl_reservation where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['checkin']."<br>";
     
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

$qry="select * FROM tbl_reservation where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['destination']."<br>";
     
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

$qry="select * FROM tbl_reservation where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['no_of_seats']."<br>";
     
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

$qry="select * FROM tbl_reservation where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['class']."<br>";
     
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

$qry="select * FROM tbl_reservation where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['name']."<br>";
     
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

$qry="select * FROM tbl_reservation where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['email']."<br>";
     
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

$qry="select * FROM tbl_reservation where date='$date'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['phoneno']."<br>";
     
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