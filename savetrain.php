<?php
$con=mysqli_connect("localhost","root","","railwaydb");
$id=$_POST["tid"];
$tnam=$_POST["tname"];
$stp=$_POST["start"];
$dsp=$_POST["destination"];
$tsno=$_POST["nos"];



$qry="Insert into tbl_train_details values ('$id','$tnam','$stp','$dsp','$tsno')";

if (mysqli_query($con,$qry)==TRUE)
{
     
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=traindetails.php');
        }
else
      echo '<script> alert("Please try again");</script>';
?>
     