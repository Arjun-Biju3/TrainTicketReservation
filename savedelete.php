<?php
$con=mysqli_connect("localhost","root","","railwaydb");
$id=$_POST["tid"];
$tnam=$_POST["tname"];

$qry="delete from tbl_train_details where tid='$id' and tname='$tnam'";

if (mysqli_query($con,$qry)==TRUE)
{
     
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=traindetails.php');
        }
else
      echo '<script> alert("Please try again");</script>';
?>
