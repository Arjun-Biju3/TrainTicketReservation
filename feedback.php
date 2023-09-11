<html>
<head>
<title>FEEDBACKS</title>

<style type="text/css">
    .fake{
        width: 200px;
        height: 50px;
    }
</style>
</head>
<body bgcolor="lightgrey">
	<form method="POST" action="addfeedback.php">
		<h2 style="font-family:courier"> YOUR FEEDBACKS</h2><br>
<textarea rows="10" cols="50" name="feedback" required></textarea><br><br>
<input type="SUBMIT" class="btn btn-primary">
</form>

<div>
	<div class="card-columns">
<?php

      $con=mysqli_connect("localhost","root","","railwaydb");
if($con===false)
{
      die("connection error");
} 

$qry="select * FROM tbl_feedback;";

$results=mysqli_query($con,$qry);


if(mysqli_num_rows($results)>0)
{
      while($row=mysqli_fetch_assoc($results))
      {               

                  
                    ?>
                   
                        <?php echo '<div class="card" style="border: 2px solid grey; width:300px;background-color:white">';?>
                     

                     <h5 style="font-family:courier"><b> <?php echo $row["feedback"];?> 

           <div align="right">
           <h5 style="font-family:courier"><b> <?php echo $row["username"]; ?></b></h5>
     </div>
         
                                 <?php  echo '</div>';?>
                     <?php echo '<div class="fake"> </div>' ?>
                  <?php    
                  }
            }
?>     
</div>
</div>

</body>
</html>