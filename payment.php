<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
     <link rel="stylesheet" type="text/css" href="payment.css">
     <script type="text/javascript">
    function multiplyBy()
{
       
        num1=document.getElementById("firstnumber").value;
        num2 = document.getElementById("seat").value;

        document.getElementById("result").innerHTML = num1 * num2;
}
function multiplyByac()
{
        num=4;
        num1=document.getElementById("firstnumber").value;
        num2 = document.getElementById("seat").value;

        document.getElementById("result").innerHTML = num1 * num2 * num;
}
function multiplyBysl()
{
        num=2;
        num1=document.getElementById("firstnumber").value;
        num2 = document.getElementById("seat").value;

        document.getElementById("result").innerHTML = num1 * num2 * num;
}
</script>
<style type="text/css">
    .hide{
        background-color: white;
        width: 2px;
        height: 2px;
        position: absolute;
        top: 77%;
        left: 28%;
    }
</style>
</head>
<body bgcolor="white">
<?php
$host="localhost";
$user="root";
$password="";
$db="railwaydb";


$con=mysqli_connect($host,$user,$password,$db);
 if(isset($_POST["submit"]))
 {
     $chkin=$_POST["starting"];
     $dest=$_POST["destination"];
     $dat=$_POST["date"];

     $sql="select * from tbl_schedule where startingpt='$chkin' and destination='$dest' and date='$dat'";
     $res=mysqli_query($con,$sql);

     while($row=mysqli_fetch_array($res))

     {

  ?>
  <br><br>
  

  <form method="post" action="savepayment1.php">
     <center>
     <div style="background-color:lightgrey;width:50% ;">
    <br>
     <b>TRAIN:</b>  <input type="text" name="train" value="<?php echo $row['tname'];?>" readonly>
     <b>DESTINATION:</b>  <input type="text" name="destination" value="<?php echo $row['destination'];?>" readonly><br><br><br>
    <b>CHECK IN:</b>  <input type="text" name="starting" value="<?php echo $row['startingpt'];?>" readonly>

     
     <b>DATE : </b><input type="date" name="date" value="<?php echo $row['date'];?>" readonly><br><br><br>
        <b>TIME : </b><input type="text" name="time" value="<?php echo $row['time'];?>" readonly>

        <b>NO OF SEATS:</b><input type="number" name="nos"  id="seat" required><br><br><br><br>
        <b>CLASS:</b>
        <input type="radio" name="class" value="FIRST" onclick="multiplyBy()" required>FIRST
         <input type="radio" name="class" value="AC" onclick="multiplyByac()">AC
          <input type="radio" name="class" value="SLEEPER" onclick="multiplyBysl()">SLEEPER
          <br>
  <br>

 
</div>
</center>

<br><br>

<center><br><br>
<div style="background-color:lightgrey;width:50%">
    <br>
    <h2 style="font-family:courier;" align="center">PAYMENT</h2>
   <div class="logo">
     <img src="images\87-870470_credit-card-icons-credit-card.png" width="100px" height="50px" align="left">
     <br>
<br>
<br>
     <img src="images\download (1).png" width="100px" height="50px" align="left">
 </div>
     <div class="cd">
     <b>CARD NO</b> <input type="text" name="cno"  class="in1" placeholder="card number" required>
 </div>
 <br><div class="exp">
     <b>EXPIRY DATE</b> <input type="text" name="exp" class="in2" placeholder="mm/y" required>
 </div><br>
 <div class="cs">
     <b>SECURITY CODE</b> <input type="text" name="cvv" class="in3" placeholder="cvv"required>
 </div><br>
 <br><br><br><br><br><br><br>
 <button class="btn" name="sub" id="result">PAY</button>
     
        
     <br><br>
</div>

<div class="hide">
    <input type="number" style="background-color:black;border: none; width: 0px; height: 0px; visibility:hidden;" name="num" id="firstnumber" value="<?php echo $row['charge'] ?>">
</div>

     </center>

  <?php
     }
 }
?>


</form>
</body>
</html>