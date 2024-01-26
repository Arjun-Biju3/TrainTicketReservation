 <?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="railwaydb";


$con=mysqli_connect($host,$user,$password,$db);


$user=$_SESSION["username"];


$cod="select * from tbl_staff where username='$user'";
$result=mysqli_query($con,$cod);
$row=mysqli_fetch_array($result);
$un=$row["s_name"];
$id=$row["id"];



$date=$_POST["date"];
$nos=$_POST["nos"];
$reason=$_POST["reason"];

 $sql="insert into tbl_leave values('$id','$un','$date','$nos','$reason')";
     
     if(mysqli_query($con,$sql)==TRUE)
     {
          
          echo '<script>alert("submitted");</script>';
          header('refresh:0;url=employee.php');
     }

     
     else
      echo '<script> alert("Please try again");</script>';
?>
     



