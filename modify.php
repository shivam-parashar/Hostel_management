<!DOCTYPE HTML>
<html>
<body>
<form action="modify.php" method="GET">
<h2> Select from the choices below:</h2>
<input type="radio" name="opt" value="insert" checked>insert new student in records.<br>
<input type="radio" name="opt" value="delete">delete a student's record.<br>
<input type="radio" name="opt" value="modification">modify a student record.<br>
<input type="radio" name="opt" value="attend">take attendance flatwise.<br>
<input type="radio" name="opt" value="insert_flat">insert new flat in records.<br>
<input type="submit" name="submit"><br>
<body style="background-color:#FFD47F;">

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
<a href="admin.php"><h3><u><h3>Go Back</h3></u></h3></a><br>

</form>
</body>
</html>
<?php
if(isset($_GET['submit']))
{
	$a=$_GET['opt'];
	if($a=="insert")
	{
		header("location:insert.php");
	}
	if($a=="delete")
	{
		header("location:delete.php");
	}
	if($a=="modification")
	{
		header("location:modification.php");
	}
	if($a=="attend")
	{
		header("location:attend.php");
	}
	if($a=="insert_flat")
	{
		header("location:insert_flat.php");
	}
}
die();
?>