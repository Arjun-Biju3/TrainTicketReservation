<?php
$host="localhost";
$user="root";
$password="";
$db="railwaydb";


$con=mysqli_connect($host,$user,$password,$db);
 if(isset($_POST["search"]))
 {
 	$chkin=$_POST["srt"];
 	$dest=$_POST["dest"];
 	$dat=$_POST["dat"];

 	$sql="select * from tbl_schedule where startingpt='$chkin' and destination='$dest' and date='$dat'";
 	$res=mysqli_query($con,$sql);
   $num=mysqli_num_rows($res);
   if($num>0)
   {
 	while($row=mysqli_fetch_array($res))

 	{

  ?>
  <html>
  <head>
 <link rel="stylesheet" type="text/css" href="fetch.css">
  </head>
  <body bgcolor="white">
  <br><br>
  <center>
 <div class="pop">
  <form method="post" action="payment.php">
    
    <div class="train">
  	<font style="font-family:courier;font-size: 20;"><b>TRAIN:</b><input type="text" name="train" value="<?php echo $row['tname'];?>" readonly></font>
  </div>
   <div class="de">
  	<font style="font-family:courier;font-size: 20;"><b>DESTINATION:</b><input type="text"  name="destination" value="<?php echo $row['destination'];?>" readonly></font>
  </div>
  <div class="chk">
   <font style="font-family:courier;font-size: 20;"> <b>CHECK IN:</b>  <input type="text" class="in1" name="starting" value="<?php echo $row['startingpt'];?>" readonly></font>
  </div>
  <div class="date">
  <font style="font-family:courier;font-size: 20;">	<b>DATE:</b><input type="date" name="date" value="<?php echo $row['date'];?>" readonly></font>
  </div>
  <div class="time">
    <font style="font-family:courier;font-size: 20;"><b>TIME:</b><input type="text" name="time" class="time1" value="<?php echo $row['time'];?>" readonly></font>
      </div>
  	

  <input type="submit" class="btn" value="NEXT" name="submit">

  <br>

  </form>
</div>
</center>

  <?php
 	}
 }
 else
 {
  echo '<script>alert("NO TRAIN AVAILABLE")</script>';
  header('refresh:0;url=home.php');
 }
}
?>






</body>
</html>