
<!DOCTYPE html>
<html>
<body>

<form>
<h1>Welcome to the attendence department-</h1>
<body style="background-color:#FFD47F;">
  Date:<br>
  <input type="date" name="date"><br>
  SID:<br>
  <input type="varchar" name="sid"><br>
  Flat:<br>
  <input type="varchar" name="fno">
  <br>
  <h3>Plese select anyone of the following-</h3>
  <input type="radio" name="attend" value="p" checked> Present<br>
  <input type="radio" name="attend" value="a"> Absent<br>
  <input type="radio" name="attend" value="l"> On Leave<br>
  <input type="submit" name="submit">  
  <body style="background-color:#FFD47F;">

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
		if((empty($_GET['sid'])||empty($_GET['fno'])||empty($_GET['date']))==TRUE)
		{
			echo "enter details again";
			header("location:attend.php");
		}
		else
		{
			$sid1=$_GET['sid'];$fno1=$_GET['fno'];$date1=$_GET['date'];$attend1=$_GET['attend'];
			$sql="insert into attendance values ('".$sid1."','".$attend1."','".$date1."','".$fno1."')";
			if($con->query($sql)==TRUE)
			{
				echo "student attendance registered successfully";
				sleep(2);
				header("location:modify.php");
			}
		}
	}
?>