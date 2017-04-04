<!DOCTYPE HTML>
<html>
<body>
<form action="insert_flat.php" method="GET">
<h1>Fill the information below:</h1>
Flat number:<input type="text" name="fno"><br><br>
<body style="background-color:#FFD47F;">

Maximum capacity:<input type="int" name="max"><br><br>
Number of rooms:<input type="int" name="room"><br><br>
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
$con=new mysqli('localhost','root','','project');
if($con->connect_error)
{
	die("connection error");
}
	if(isset($_GET['submit']))
	{
		if((empty($_GET['fno'])||empty($_GET['max'])||empty($_GET['room']))==TRUE)
		{
			echo "enter details again";
			sleep(2);
			header("location:insert_flat.php");
		}
		else
		{
		$fno1=$_GET['fno']; $max1=$_GET['max']; $room1=$_GET['room'];
		$sql="select count(*) from student where flat_no='".$fno1."'";
		$result=$con->query($sql);
		while($count=$result->fetch_assoc())
		{
			$count1=$count['count(*)'];
		}
		$curr1=$count1;
		$sql1="insert into flat values ('".$fno1."','".$max1."','".$curr1."','".$room1."')";
		if($con->query($sql1)==TRUE)
		{
			header("location:modify.php");
		}
		}
	}
	die();
?>