<!DOCTYPE html>
<html>
<body>
<form action="modification.php" method="GET">
<h1>Enter SID to be updated:</h1>
  <body style="background-color:#FFD47F;">

<input type="text" name="sid"><br><br>
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_GET['submit']))
{
	$sid1=$_GET['sid'];
	if(empty($_GET['sid'])==TRUE)
	{
		echo "enter sid again";
	}
	else
	{
		header("location:modification1.php ? sid2=$sid1");
	}
}
?>