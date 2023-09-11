<?php
$con=mysqli_connect("localhost","root","","railwaydb");
$na=$_POST["not"];
$ds=$_POST["dsn"];

$qry="delete from tbl_schedule where tname='$na' and destination='$ds'";

if (mysqli_query($con,$qry)==TRUE)
{
     
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=schedule.php');
        }
else
      echo '<script> alert("Please try again");</script>';
?>
