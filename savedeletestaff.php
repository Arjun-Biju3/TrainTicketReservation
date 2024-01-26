<?php
$con=mysqli_connect("localhost","root","","railwaydb");
$sid=$_POST["sid"];
$snam=$_POST["sname"];
$usnam=$_POST["usname"];

$qry="delete from tbl_staff where id='$sid' and s_name='$snam'";

if (mysqli_query($con,$qry)==TRUE)
{

      $qry="delete from tbl_login where username='$usnam' and usertype='emp'";

     if (mysqli_query($con,$qry)==TRUE)

     {
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=staffdetails.php');
        }
   }     
else
      echo '<script> alert("Please try again");</script>';
?>
