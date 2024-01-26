<HTML>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="bill.css">
<link rel="stylesheet" type="text/css" href="ticket.css">
<style type="text/css">
    .fake{
        width: 200px;
        height: 50px;
    }
</style>
</head>
<body>

<div class="card-body">
<?php
                 session_start();


$host="localhost";
$user="root";
$password="";
$db="railwaydb";




$con=mysqli_connect($host,$user,$password,$db);

$user=$_SESSION["username"];
$cod="select * from registration where username='$user'";
$result1=mysqli_query($con,$cod);
$row1=mysqli_fetch_array($result1);
$un=$row1["username"];
$id=$row1["userid"];



$qwr="select * from tbl_reservation where userid='$id'";
$res=mysqli_query($con,$qwr);
$row=mysqli_num_rows($res);
while($rows=mysqli_fetch_array($res))

                  {
                    ?>
                   
                        <?php echo '<div class="card" style="border: 2px solid grey;">';?>
                     <form method="POST" action="cancelbook.php">

                     <h5 style="font-family:courier"><b> <?php echo 'TICKET ID:'?><input type="text" class="inp" name="id" value="<?php echo $rows["ticket_id"];?>" readonly><br></b> </h5>  

           <div class="train">
           <h5 style="font-family:courier"><b> <?php echo 'TRAIN:';echo $rows["train"];  echo '<br>'; ?></b></h5>
            </div><br>
          

          <div class="dest">
          <h5 style="font-family:courier"><b><?php  echo 'DESTINATION:'; echo $rows["destination"];  echo '<br>'; ?></b></h5>
        </div>

           <div class="date"> 
          <h5 style="font-family:courier"><b> <?php echo 'DATE:';echo $rows["date"];  echo '<br>';  ?></b></h5>
            </div>

            <div class="time">

        <h5 style="font-family:courier"><b> <?php echo 'TIME:';echo $rows["time"];  echo '<br>';  ?></b></h5>
           </div><br>

           <div class="chk"> 

         <h5 style="font-family:courier"><b><?php echo 'CHECK IN:';echo $rows["checkin"]; echo '<br>';  ?></b></h5>
         </div>

         <div class="seat">

         <h5 style="font-family:courier"><b> <?php echo 'SEATS:';echo $rows["no_of_seats"];  echo '<br>';  ?></b></h5>
       </div>

          <div class="cl">
          <h5 style="font-family:courier"><b><?php echo 'CLASS:';echo $rows["class"]; ?></b></h5>
        </div>
         
          <?php echo '<div class="card-body">';  ?>
          
                    <input type="submit" class="btne" name="print" value="PRINT">

                      <input type="submit" class="btn" name="cancel" value="CANCEL TICKET">
                 </form>
                       <?php  echo '</div></div>';?>
                     <?php echo '<div class="fake"> </div>' ?>
                  <?php    
                  }
?>


     
</div>



</body>
</HTML>