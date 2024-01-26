<?php 
$con=mysqli_connect("localhost","root","","railwaydb");


if (isset($_POST['cancel'])) {
$id=$_POST["id"];


 $qry="delete from tbl_reservation where ticket_id='$id'";
$res=mysqli_query($con,$qry);
if($res==true)
{
	echo '<script>alert("ticket cancelled");</script>';
     header('refresh:0;url=bill1.php');
}
else

echo '<script>alert("cancellation failed");</script>';
 header('refresh:0;url=bill1.php');
}
if (isset($_POST['print'])) {
$id=$_POST["id"];

$sql="select * from tbl_reservation where ticket_id='$id'";
$rese=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($rese))
{
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
   <link rel="stylesheet" type="text/css" href="print.css">
</head>
<body>
<div class="print">
    <div class="div2">
    <img class="image" src="images\14.png" height="90px" width="90px" align="middle">
    <div class="div1">
    <h4 style="font-family:courier">TICKET ID:<?php echo $row['ticket_id'];?></h4><br>
    <h4 style="font-family:courier">DESTINATION:<?php echo $row['destination'];?></h4><br>
    <h4 style="font-family:courier">DATE:<?php echo $row['date'];?></h4><br>
    <h4 style="font-family:courier">TIME:<?php echo $row['time'];?></h4><br>
    <h4 style="font-family:courier">NO OF SEATS:<?php echo $row['no_of_seats'];?></h4><br>
    <h4 style="font-family:courier">CLASS:<?php echo $row['class'];?></h4><br>
    <h4 style="font-family:courier">TRAIN:<?php echo $row['train'];?></h4><br>
    
</div>
</div>
<br>
<div class="btn">
<button class="btn1" onclick="window.print()">PRINT</button>
</div>
</div>


<div class="ins">
    <h3 style="font-family:courier">PRINT THE TICKET AND KEEP IT WHILE TRAVELLING</h3>
</div>
</body>
</html>


    <?php 
}

}
?>
