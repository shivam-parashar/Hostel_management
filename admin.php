<!DOCTYPE HTML>
<html>
<body>
<form action="admin.php" method="GET">
<h1> Welcome Admin </h1><br>
what you would like to do?<br>
<input type="radio" name="opt" value="search" checked>Search <br>
<input type="radio" name="opt" value="modify"> Modify<br>
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
<a href="welcome.php"><h3>GO Back</h3></a><br>
<body style="background-color:#FFD47F;">

</form>
</body>
</html>
<?php
if (isset($_GET['submit']))
{
	$i=$_GET['opt'];
	if($i=="search")
	{
		header("location:search.php");
	}
	else if($i=="modify")
	{
		header("location:modify.php");
	}
}
die();
?>