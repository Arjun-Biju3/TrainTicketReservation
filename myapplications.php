<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my application</title>
</head>
<body>
<div class="row" style="height: 90%; width: 98%;background-color:white; padding:40px;">
      <center>
<table  border="1">
		<tr>
			<th>DATE</th>
			<TH>NO OF DAYS</TH>
			<TH>REASON</TH>
			
			
		</tr>
		<tr>
			<td>	
				<?php
			session_start();


$host="localhost";
$user="root";
$password="";
$db="railwaydb";


$con=mysqli_connect($host,$user,$password,$db);

	$user=$_SESSION["username"];

	$sql="select * from tbl_staff where username='$user'";
	$res1=mysqli_query($con,$sql);
	$row1=mysqli_fetch_assoc($res1);
	$id=$row1["id"];

if($con===false)
{
      die("connection error");
} 

$qry="select * FROM tbl_leave where staff_id='$id'";

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
		


$host="localhost";
$user="root";
$password="";
$db="railwaydb";


$con=mysqli_connect($host,$user,$password,$db);

	$user=$_SESSION["username"];

	$sql="select * from tbl_staff where username='$user'";
	$res1=mysqli_query($con,$sql);
	$row1=mysqli_fetch_assoc($res1);
	$id=$row1["id"];

if($con===false)
{
      die("connection error");
} 

$qry="select * FROM tbl_leave where staff_id='$id'";

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

<td>			<?php
			


$host="localhost";
$user="root";
$password="";
$db="railwaydb";


$con=mysqli_connect($host,$user,$password,$db);

	$user=$_SESSION["username"];

	$sql="select * from tbl_staff where username='$user'";
	$res1=mysqli_query($con,$sql);
	$row1=mysqli_fetch_assoc($res1);
	$id=$row1["id"];

if($con===false)
{
      die("connection error");
} 

$qry="select * FROM tbl_leave where staff_id='$id'";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['reason']."<br>";
     
      }
      
}
mysqli_close($con);

?></td>
</tr>
	</table>

</center>

	</div> 


	<p style="font-family:courier">* your application satus will be informed through  registered mobile number</p>

</body>
</html>
</body>
</html>