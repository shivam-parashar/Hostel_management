<!DOCTYPE HTML>
<html>
<body>
<form action="solo.php" method="GET">
<br><br>
Enter SID of student to be find:<br>
<input type="text" name="sid"><br><br>
<input type="submit" name="submit"><br>
<body style="background-color:#FFD47F;">

<style>
a:link {
    color: blue;
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
<a href="solo.php"><h3>Search more</h3></a>
<a href="search.php"><h3>GO Back</h3></a><br>

</form>
</body>
</html>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<table style="/width:100%">
<?php
$con=new mysqli('localhost','root','','project');
if($con->connect_error)
{
	die("connection error");
}
	if(isset($_GET['submit']))
	{
		if(empty($_GET['sid'])==TRUE)
		{
			echo"enter sid again";
		}
		else
		{
			$sid1=$_GET['sid'];
			$sql="select * from student where sid='".$sid1."'";
			if($con->query($sql)==TRUE)
			{
				$result=$con->query($sql);
				while($row=$result->fetch_assoc())
				{
					$sid1=$row['sid'];
					$name1=$row['name'];
					$batch1=$row['batch'];
					$branch1=$row['branch'];
					$flat_no1=$row['flat_no'];
					$room_no1=$row['room_no'];
					$dob1=$row['dob'];
					$mob1=$row['mob_no'];
					$gender1=$row['gender'];
				}
				echo "<tr><th>SID</th><th>NAME</th><th>BATCH</th><th>BRANCH</th><th>FLAT_NO</th><th>ROOM_NO</th><th>DOB</th><th>MOBILE_NO</th><th>GENDER</th></tr>";
				echo "<tr><td>".$sid1."</td><td>".$name1."</td><td>".$batch1."</td><td>".$branch1."</td><td>".$flat_no1."</td><td>".$room_no1."</td><td>".$dob1."</td><td>".$mob1."</td><td>".$gender1."</td><td></tr>";
			}
			echo"</table>";
			echo "<br>click on the link search more to continue and on go back to go to search menu";
		}
	}