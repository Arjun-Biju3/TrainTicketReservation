<?php
$con=mysqli_connect("localhost","root","","railwaydb");
$trm=$_POST["tnam"];
$srt=$_POST["srt"];
$dt=$_POST["dest"];
$dat=$_POST["dat"];
$tm=$_POST["tm"];
$ch=$_POST["money"];




$qry="Insert into tbl_schedule values ('$trm','$srt','$dt','$dat','$tm','$ch')";

if (mysqli_query($con,$qry)==TRUE)
{
     
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=newschedule.php');
        }
else
      echo '<script> alert("Please try again");</script>';
?>
     