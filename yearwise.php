<!DOCTPYE HTML>
<html>
<body>
<form action="yearwise.php" method="GET">
Enter the batch year to get list:<br>
<input type="year" name="year"><br>
<input type="submit" name="submit"><br>
<body style="background-color:#FFD47F;">

</form>
</body>
</html>
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
<a href="yearwise.php">Search more</a><br>
<a href="search.php">GO Back</a><br>

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
		if(empty($_GET['year'])==TRUE)
		{
			echo"enter batch year again";
		}
		else
		{
			$batch1=$_GET['year'];
			$sql="select * from student where batch='".$batch1."'";
			$result=$con->query($sql);
			if($result->num_rows==0)
			{
				echo"No data found";
			}
			else
			{
				if($con->query($sql)==TRUE)
				{
					echo "<tr><th>SID</th><th>NAME</th><th>BATCH</th><th>BRANCH</th><th>FLAT_NO</th><th>ROOM_NO</th><th>DOB</th><th>MOBILE_NO</th><th>GENDER</th></tr>";
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
					echo "<tr><td>".$sid1."</td><td>".$name1."</td><td>".$batch1."</td><td>".$branch1."</td><td>".$flat_no1."</td><td>".$room_no1."</td><td>".$dob1."</td><td>".$mob1."</td><td>".$gender1."</td><td></tr>";
				}
				echo"</table>";
				echo "<br>click on the link search more to continue and on go back to go to search menu";
				}
			}
		}
	}