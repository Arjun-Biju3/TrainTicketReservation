<?php
$con=mysqli_connect("localhost","root","","railwaydb");
$i=$_POST["userid"];
$sn=$_POST["sname"];
$un=$_POST["username"];
$pwd=$_POST["password"];
$ph=$_POST["phoneno"];
$eml=$_POST["email"];
$ad=$_POST["uad"];
$adress=$_POST["adress"];
$utype="emp";


$qry="Insert into tbl_staff values ('$i','$sn','$un','$pwd','$eml','$ph','$ad','$adress')";

if (mysqli_query($con,$qry)==TRUE)
{
      $qry="Insert into tbl_login values ('$un','$pwd','$utype')";
     if (mysqli_query($con,$qry)==TRUE)
       {
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=admin.php');
        }
}
else
      echo '<script> alert("Please try again");</script>';
?>
     