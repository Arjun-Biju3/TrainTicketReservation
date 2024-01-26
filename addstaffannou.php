<?php
$con=mysqli_connect("localhost","root","","railwaydb");
$i=$_POST["id"];
$ann=$_POST["announcements"];
$announcer="staff";

$qry="Insert into tbl_announcements values ('$i','$ann','$announcer')";
if (mysqli_query($con,$qry)==TRUE)
{
      echo '<script> alert("succesful");</script>';
        header('refresh:0;url=employee.php');

       }
else
      echo '<script> alert("Please try again");</script>';
      

?>