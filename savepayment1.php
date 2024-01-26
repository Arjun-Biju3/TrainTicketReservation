

     <?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="railwaydb";


$con=mysqli_connect($host,$user,$password,$db);


$user=$_SESSION["username"];
$cod="select * from registration where username='$user'";
$result=mysqli_query($con,$cod);
$row=mysqli_fetch_array($result);
$un=$row["username"];
$id=$row["userid"];
$em=$row["email"];
$ph=$row["phoneno"];


$date=$_POST["date"];
$time=$_POST["time"];
$chkin=$_POST["starting"];
$dest=$_POST["destination"];
$nos=$_POST["nos"];
$train=$_POST["train"];
$class=$_POST["class"];
$card=$_POST["cno"];
$exp=$_POST["exp"];
$cvv=$_POST["cvv"];

 $sql="insert into tbl_payment values('','$card','$exp','$cvv','$un','$id','$em')";
     
     if(mysqli_query($con,$sql)==TRUE)
     {
          $qry="insert into tbl_reservation values('','$date','$time','$chkin','$dest','$nos','$train','$class','$un','$em','$ph','$id')";
          if(mysqli_query($con,$qry)==TRUE)
          {
          
          echo '<script>alert("payment sucess");</script>';
          header('refresh:0;url=bill1.php');
     }

     }
     else
      echo '<script> alert("Please try again");</script>';
?>
     



