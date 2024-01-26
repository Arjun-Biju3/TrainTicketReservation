<?php

session_start();
unset($_SESSION['username']);
header("location:index.php");
mysqli_close($con);
?>