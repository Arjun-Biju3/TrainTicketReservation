<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>new schedule</title>
</head>
<body bgcolor="grey">
  <br><br>
  
<div style="background-color:grey;height:100%;width:50%;">
  <form method="post" action="addschedule.php">
    <br>
    TRAIN:<input type="text" name="tnam" required><br><br>
    STARTING POINT:<input type="text" name="srt" required>  DESTINATION:<input type="text" name="dest" required><br><Br>
    
    DATE:<input type="date" name="dat" required>   TIME:<input type="time" name="tm" required>  CHARGE:<input type="text" name="money" required>
    <br><br>
    <center>
    <input type="submit" value="submit"> <input type="reset" value="reset">
  </center>
    
  </form>
</div>

</body>
</html>