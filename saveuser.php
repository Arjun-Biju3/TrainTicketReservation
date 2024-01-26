 <?php
$con=mysqli_connect("localhost","root","","railwaydb");
$i=$_POST["userid"];
$un=$_POST["username"];
$pwd=$_POST["password"];
$utype="user";
$phno=$_POST["phoneno"];
$eml=$_POST["email"];
$dadd=$_POST['Add'];
$cty=$_POST['city'];


$qry="Insert into registration values ('$i','$un','$pwd','$utype','$phno','$eml','$dadd','$cty')";

if (mysqli_query($con,$qry)==TRUE)
{
      $qry="Insert into tbl_login values ('$un','$pwd','$utype')";
     if (mysqli_query($con,$qry)==TRUE)
       {
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=logpage.php');
        }
}
else
      echo '<script> alert("Please try again");</script>';
?>
     