<html>

<head>
	
<title>
checkform
</title>
</head>
<body bgcolor="lightgrey">
	<h3 style="align:left;"><a href="employee.php">HOME</a></h3>
	<center>
<h1 style="font-family:courier;">PASSENGERS CHECKING FORM</h1><br><br>

<div style="background-color:white;height:50%;width:50%;"><br><br>
<form action="validcheck.php" method="post">
	
	DATE<input type="date" name="date"><br><br>

SEAT NO<input type="text" name="seatno" required><br><br>
STATUS<input type="radio" name="status" value="Y" required>YES    <input  type="radio" name="status" value="N">NO<br><br>
PASSENGER<input type="text" name="passengername"><br><br>
TICKET NO<input type="text" name="ticketno"><br><br>
<input type="SUBMIT" class="btn btn-primary">
<input type="reset" class="btn btn-primary" value="RESET">

</form>
</div>
</center>
</body>
</html>