<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>schedule</title>
</head>
<body>
<div style="background-color:white; ">
        
    <center><font color="brown" size="30" ><B>RAILWAY RESERVATION</B></font></center>
    </div>
  <table border="0" width="100%" bgcolor="blue" height="8%">
<tr>

   <th width="20%"><a href="admin.php"><font color="black"  size="4">   HOME</font></a></th>
<th width="20%"><a href="newschedule.php"><font color="black"  size="4">NEW SCHEDULE</font></a></th>
</tr>
</table><center>

</center>
<br><br>
<div style="background-color:white">
   <center>
   <table  border="2">
      <tr>
         <th>TRAIN</th>
         <TH>STARTING</TH>
         <TH>DESTINATION</TH>
         <TH>DATE</TH>
         <TH>TIME</TH>
      </tr>
      <tr>
         <td>  
   <?php

$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select tname FROM tbl_schedule;";

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

$qry="select startingpt FROM tbl_schedule;";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

     echo $row['startingpt']."<br>";
     
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

$qry="select destination FROM tbl_schedule;";

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

$qry="select date FROM tbl_schedule;";

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

$qry="select time FROM tbl_schedule;";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {  

      echo $row['time']."<br>";
     
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