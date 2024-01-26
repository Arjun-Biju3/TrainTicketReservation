<html>
<head>
	<title>edit train</title>
</head>
<body>
	
<div class="row" style="height: 10%; width: 98%;background-color:blue; padding:40px;">
	<a href="admin.php"><font color="black"  size="4">HOME</font></a></th>
	<center>
	<h1>STAFF DETAILS</h1>
</center>

</div>
 <table border="1" width="105%" bgcolor="orange" height="8%">
 	<tr>
 		<th width="20%"><a href="employeereg.php"><font color="black"  size="4">EMPLOYEE REGISTRATION</font></a></th>
 		<th width="20%"><a href="deleteemployee.php"><font color="black"  size="4">DELETE EMPLOYEE</font></a></th>
 	</table>

<div class="row" style="height: 90%; width: 98%;background-color:white; padding:40px;">
      <center>
<table  border="1">
		<tr>
			<th>ID</th>
			<TH> STAFF NAME</TH>
			<TH>USER NAME</TH>
			<TH>EMAIL</TH>
			<TH>PHONE NO</TH>
			<TH>UID NO</TH>
			<th>ADRESS</th>
		</tr>
		<tr>
			<td>	
	<?php

$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select id FROM tbl_staff;";

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

$qry="select s_name FROM tbl_staff";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

     echo $row['s_name']."<br>";
     
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

$qry="select username FROM tbl_staff";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['username']."<br>";
     
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

$qry="select email FROM tbl_staff";

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

$qry="select phone_no FROM tbl_staff";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['phone_no']."<br>";
     
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

$qry="select uid_no FROM tbl_staff";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['uid_no']."<br>";
     
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

$qry="select adress FROM tbl_staff";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['adress']."<br>";
     
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