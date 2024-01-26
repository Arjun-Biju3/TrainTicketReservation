<HTML>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style type="text/css">
    .fake{
        width: 200px;
        height: 50px;
    }
</style>
</head>
<body>

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
                   
                        <?php echo '<div class="card" style="border: 2px solid grey;">';?>
                     

                     <h5 style="font-family:courier"><b> <?php echo 'feedback:'; echo $row["feedback"];?> 

           <div align="right">
           <h5 style="font-family:courier"><b> <?php echo $row["username"];  echo '-';echo $row['userid']; ?></b></h5>
     </div>
         
                                 <?php  echo '</div>';?>
                     <?php echo '<div class="fake"> </div>' ?>
                  <?php    
                  }
            }
?>     
</div>
</body>
</HTML>