<?php
$con=mysqli_connect("localhost","root","","railwaydb");

$date=$_POST['date'];
$sno=$_POST["seatno"];
$sts=$_POST["status"];
$pnam=$_POST["passengername"];
$tno=$_POST["ticketno"];

$qry="Insert into tbl_ticket_checking values ('','$date','$sno','$sts','$pnam','$tno')";
if (mysqli_query($con,$qry)==TRUE)
{
   
      echo '<script> alert("Successful");</script>';

       header('refresh:0;url=checkingform.php');
}
else
      echo '<script> alert("Please try again");</script>';

?>

