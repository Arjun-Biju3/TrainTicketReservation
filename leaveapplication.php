<!DOCTYPE html>
<html>
<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>leave application</title>
</head>
<body>
<div class="row" style="height:; width: 93%;background-color:red; padding:40px;">
		<p align="left"><a href="employee.php"><b><font color="black">HOME</font></b></a></p>
		<p align="right"><a href="myapplications.php"><b><font color="black">MY APPLICATIONS</font></b></a></p>
		<center>
	<h1>LEAVE APPLICATION</h1>
	</center>
</div>
<br><br>
<div style="background-color:grey; width: 50%;">
	<br>
<form method="POST" action="addleave.php">
	<br>
	
DATE <input type="date" name="date">
<br><br>
NO OF DAYS<input type="number" name="nos">
<br><br>
REASON<textarea name="reason"></textarea>
<br><br>
<input type="submit" name="sub" value="SUBMIT">
<br>





</form>
</div>
	

</div>
</body>
</html>