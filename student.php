
<!DOCTYPE HTML>
<html>
<body>
<form action="student.php" method="GET">
  <body style="background-color:#FFD47F;">

<input type="radio" name="sid2" value="<?php $sid1=$_GET['sid']; echo $sid1; ?>" checked><h2>WELCOME TO STUDENT SECTION</h2><br><br>
<input type="radio" name="opt" value="self_info" checked>See your own details.<br>
<input type="radio" name="opt" value="self_attend">See your attendence.<br>
<input type="radio" name="opt" value="find">Search for location of someone.<br>
<input type="submit" name="submit"><br>
<style>
a:link {
    color: blue;
    background-color: transparent;
    text-decoration: none;s
}
a:hover {
    color: pink;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: purple;
    background-color: transparent;
    text-decoration: underline;
}
</style>
<a href="welcome.php"><h3>GO Back</h3></a>
<a href="contact.php"><h3>See essential contact list</h3></a><br>
</form>
</body>
</html>
<?php

if (isset($_GET['submit']))
{
	$i=$_GET['opt'];
	$sid3=$_GET['sid2'];
	if($i=="self_info")
	{
		header("location:self_info.php ? sid10=$sid3");
	}
	else if($i=="self_attend")
	{
		header("location:self_attend.php ? sid10=$sid3");
	}
	else if($i=="find")
	{
		header("location:find.php");
	}
}
die();
?>