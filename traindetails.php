<html>
<head>
	<title>edit train</title>
</head>
<body>
	<div class="row" style="height:; width: 93%;background-color:blue; padding:40px;">
		<a href="admin.php"><font color="black"  size="4">HOME</font></a></th>
		<center>
	<h1>TRAIN DETAILS</h1>
	</center>
</div>

 <table border="0" width="100%" bgcolor="orange" height="8%">
    <tr>
    	<th><a href="addtrain.php"><font color="black"  size="4"> ADD</font></a></th>
    	<th><a href="deletetrain.php"><font color="black"  size="4"> DELETE</font></a></th>
    	
    </tr>
</table>
<div class="row" style="height: 90%; width: 93%;background-color:white; padding:40px;">
<center>
	<table  border="2">
		<tr>
			<th>ID</th>
			<TH>NAME</TH>
			<TH>START</TH>
			<TH>DESTINATION</TH>
			<TH>SEATS</TH>
		</tr>
		<tr>
			<td>	
	<?php

$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select tid,tname,starting_point,destination,total_seats FROM tbl_train_details;";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['tid']."<br>";
     
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

$qry="select tid,tname,starting_point,destination,total_seats FROM tbl_train_details;";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

     echo $row['tname']."<br>";
     
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

$qry="select tid,tname,starting_point,destination,total_seats FROM tbl_train_details;";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['starting_point']."<br>";
     
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

$qry="select tid,tname,starting_point,destination,total_seats FROM tbl_train_details;";

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

$qry="select tid,tname,starting_point,destination,total_seats FROM tbl_train_details;";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['total_seats']."<br>";
     
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