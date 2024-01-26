<html>
<head>
	<title>leave checking</title>
</head>
<body>
<div class="row" style="height: 90%; width: 98%;background-color:white; padding:40px;">
      <center>
<table  border="1">
		<tr>
			<th>STAFF ID</th>
			<TH>STAFF NAME</TH>
			<TH>DATE</TH>
			<TH>NO OF DAYS</TH>
			<TH>REASON</TH>
			
			
		</tr>
		<tr>
			<td>	

<?php

$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select * FROM tbl_leave";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['staff_id']."<br>";
     
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

$qry="select * FROM tbl_leave";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['staff_name']."<br>";
     
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

$qry="select * FROM tbl_leave";

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

$qry="select * FROM tbl_leave";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['no_of_days']."<br>";
     
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

$qry="select * FROM tbl_leave";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['reason']."<br>";
     
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