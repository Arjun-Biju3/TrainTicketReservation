<?php

$host="localhost";
$user="root";
$password="";
$db="railwaydb";

error_reporting(0);
session_start();

$con=mysqli_connect($host,$user,$password,$db);
if($con===false)
{
      die("connection error");
} 


if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $un=$_POST["username"];
$pwd=$_POST["password"];


$sql="select * from tbl_login where username='$un' and password='$pwd'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

if ($row["password"]=="$pwd") 
 {

if($row["usertype"]=="user")
{    
    echo '<script>alert("welcome");</script>';
     $_SESSION["username"]=$un;
     header('refresh:0;url=home.php');
  }    

elseif($row["usertype"]=="admin")
{    
       echo '<script>alert("welcome admin");</script>';
      $_SESSION["username"]=$un;
      header('refresh:0;url=admin.php');
}
elseif($row["usertype"]=="emp")
{    
       echo '<script>alert("welcome employee");</script>';
      $_SESSION["username"]=$un;
      header('refresh:0;url=employee.php');
}

else
{
     $_SESSION["username"]=$un;
      echo"incorrect";
     
}
}
else
{
     echo '<script> alert("Incorrect UserName/User Type/Password");</script>';
            header('refresh:0;url=index.php');  
}
}
mysqli_close($con);
?>