<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style1.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style1.css" />
	<title>profile</title>
</head>
<body>
	<br>
<div style="background-color:lightgrey; height: 60%;width: 31%;">
	
<div id="display-image" class="profile-pic-div">
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
            <img src="./image/<?php echo $data['filename']; ?>" width="200px">
 
        <?php
        }
        ?>
    </div>

    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    
   
<div id="content">
        <form method="POST" action="upload4.php" enctype="multipart/form-data">
            <h5 style="font-family: courier;"><b>PROFILE-PIC :</b></h5>

                <input class="" type="file" name="uploadfile" value=""  />
           <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
           
        </form>
    </div>

    <br>
  <h5 style="font-family: courier;"><b>NAME :</b><?php $con=mysqli_connect("localhost","root","","railwaydb"); $user=$_SESSION["username"];  $cod="select * from registration where username='$user'";$results=mysqli_query($db,$cod);$rows=mysqli_fetch_assoc($results);echo $rows['username'];?></h5>
   

    
    
    
    


  <br>
  <h5 style="font-family: courier;"><b>EMAIL :</b><?php $con=mysqli_connect("localhost","root","","railwaydb"); $user=$_SESSION["username"];  $cod="select * from registration where username='$user'";$results=mysqli_query($db,$cod);$rows=mysqli_fetch_assoc($results);echo $rows['email'];?></h5>
   
  <br>
  <h5 style="font-family: courier;"><b>PHONE :</b><?php $con=mysqli_connect("localhost","root","","railwaydb"); $user=$_SESSION["username"];  $cod="select * from registration where username='$user'";$results=mysqli_query($db,$cod);$rows=mysqli_fetch_assoc($results);echo $rows['phoneno'];?></h5>
   
  <br>
 <h5 style="font-family: courier;"><b>CITY :</b><?php $con=mysqli_connect("localhost","root","","railwaydb"); $user=$_SESSION["username"];  $cod="select * from registration where username='$user'";$results=mysqli_query($db,$cod);$rows=mysqli_fetch_assoc($results);echo $rows['city'];?></h5>
   
  <br>

</div>

</body>
</html>