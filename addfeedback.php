<?php
session_start();
$con=mysqli_connect("localhost","root","","railwaydb");
$fed=$_POST["feedback"];



$user=$_SESSION["username"];
$sql="select * from registration where username='$user'";
$result1=mysqli_query($con,$sql);
$row1=mysqli_fetch_array($result1);
$un=$row1["username"];
$id=$row1["userid"];




$qry="Insert into tbl_feedback values ('','$un','$id','$fed')";
if (mysqli_query($con,$qry)==TRUE)
{
      echo '<script> alert("succesful");</script>';

      header('refresh:0;url=home.php');

       }
else
      echo '<script> alert("Please try again");</script>';
      

?>

