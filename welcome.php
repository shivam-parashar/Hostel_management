<!DOCTYPE HTML>
<html>
<body>
<style>
body{
	background : url("hostel.jpg");
	background-size: cover;
}
</style>
<form action="welcome.php" method="GET">
<font color="white"><h1>Welcome to the hostel manager:</h1>
<body style="background-color:#FFD47F;">

<h2>login as</h2>
<input type="radio" name="usertype" value="admin" checked>Admin<br>
<input type="radio" name="usertype" value="student">Student<br><br>
<input type="submit" name="submit"><br>
<a href="mess.php"><h2>See Mess Menu</h2></a><br></font>
</form>
</body>
</html>
<?php
if (isset($_GET['submit']))
{
	$u=$_GET['usertype'];
	if($u=='admin')
	{
		header("location:login1.php");
	}
	else
	{
		header("location:login2.php");
	}
	
}
?>