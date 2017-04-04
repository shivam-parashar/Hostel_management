<!DOCTYPE HTML>
<html>
<body>
<form action="search.php" method="GET">
<h1>Choose any of the following options</h1><br>
<body style="background-color:#FFD47F;">

<input type="radio" name="opt" value="solo" checked>find information of a student.<br>
<input type="radio" name="opt" value="yearwise">find  information of students of specific batch.<br>
<input type="radio" name="opt" value="vacancy">find vacancy status in each flat.<br>
<input type="radio" name="opt" value="m_atend">find monthly attendance of students of a specific batch.<br>
<input type="radio" name="opt" value="flatwise">find information of students flatwise.<br>
<input type="submit" name="submit"><br>
<style>
a:link {
    color: red;
    background-color: transparent;
    text-decoration: none;
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
<a href="admin.php"><h3><u>GO Back</u></h3></a><br>

</form>
</body>
</html>
<?php
if(isset($_GET['submit']))
{
	$a=$_GET['opt'];
	if($a=="solo")
	{
		header("location:solo.php");
	}
	if($a=="yearwise")
	{
		header("location:yearwise.php");
	}
	if($a=="vacancy")
	{
		header("location:vacancy.php");
	}
	if($a=="m_atend")
	{
		header("location:m_attend.php");
	}
	if($a=="flatwise")
	{
		header("location:flatwise.php");
	}
}
die();
?>