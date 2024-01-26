<html >

<head>
 
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="home.css">

</head>

<body bgcolor="white">
	<div class="row" style="height:%; width:95%;background-color:white; padding:40px;">
    <a href="profile.php">
<div class="div" style="background-color: grey;" >
  
   <?php
       $db = mysqli_connect("localhost", "root", "", "railwaydb");
        session_start();
    $user=$_SESSION["username"];
    $cod="select * from registration where username='$user'";
    $results=mysqli_query($db,$cod);
    $rows=mysqli_fetch_array($results);
    $uid=$rows["userid"];


        $query = " select * from tbl_image where uid='$uid'";
        $result = mysqli_query($db, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./image/<?php echo $data['filename']; ?>" id="photo">
 
        <?php
        }
        ?>
    
    
</div>


</a>
<div>
		<img src="images\14.png" height="150px" width="150px" align="left">
  </div>


<div align="right" class="title">
  <br><br><br>
    <font color="brown" size="10" ><B>RAILWAY RESERVATION</B></font>
  </div>
	</div>
	
	<div class="row" style="height:; width:101%;background-color:lightgrey; padding:40px;">
	<table border="0" width="100%" bgcolor="" height="8%">
    <tr>
    	<th><a href="home.php"><font color="black"  size="4">HOME</font></a></th>
    	<th><a href="aboutus.php"><font color="black"  size="4">ABOUT US</font></a></th>
    	<th><a href="feedback.php"><font color="black"  size="4">FEEDBACK</font></a></th>
    	<th><a href="announcements.php"><font color="black"  size="4">ANNOUNCEMENTS</font></a></th>
    	<th><a href="bill1.php"><font color="black"  size="4">MY BOOKING</font></a></th>
    	<th><a href="logout.php"><font color="black"  size="4">LOG OUT</font></a></th>
    </tr>
</table>

</div><br>



<marquee bgcolor="orange" align="center"><b><p style="font-family:courier">ANNOUNCEMENTS : <?php

$con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select announcement FROM tbl_announcements";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {     

            echo $row['announcement'];
      }
}
mysqli_close($con);
?></p></b></marquee>

<br><br>

<div class="main">
	<img src="images\90.jpg" align="left" height="100%">
  <form method="post" action="fetchdata.php">
    
  <div class="div1" style="background-color:lightgrey;">
    <br>
    
   <h5 style="font-family:courier"><b>CHECK IN:<input type="text"  name="srt" placeholder="Check In" required> </b> </h5> <br>
   <h5 style="font-family:courier"><b>DESTINATION:<input type="text"  name="dest" placeholder="Destination" required ></b> </h5><br>
    
   <h5 style="font-family:courier"><b> DATE:<input type="date"  name="dat" required> <BR><BR>  </b></h5>
   <center>
   <input  type="submit" class="btn1" style=" background-color: #00D400;" name="search" value="SEARCH"> <input type="reset" class="btn2" value="RESET">
</center>
</div>
 </form>
</div>
<br>
<br>
<div class="fake" style="height:20%;width:20%;">
    
</div>





</body>
</html>
