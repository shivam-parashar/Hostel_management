<!DOCTPYE HTML>
<html>
<body>
<form action="find.php" method="GET">
  <body style="background-color:#FFD47F;">

<h1>Enter name of student you want to find :</h1>
<input type="text" name="name"><br><br>
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
<a href="student.php"><h3><u>GO Back</h3></u></h3></a><br>

</form>
</body>
</html>
<style>
table {
    width:50%;
}

th, td {
    padding: 5px;
    text-align: left;
}
tr:nth-child(even) {
    background-color: #eee;
}
tr:nth-child(odd) {
   background-color:#fff;
}
th {
    background-color: black;
    color: white;
}
</style>
<?php
$con=new mysqli('localhost','root','','project');
if($con->connect_error)
{
	die("connection error");
}
if(isset($_GET['submit']))
{
	$name1=$_GET['name'];
	$sql="select * from student where name like '%".$name1."%'";
	if($con->query($sql)==TRUE)
	{
		$result=$con->query($sql);
		if($result->num_rows==0)
				{
					echo "no result found.";
				}
		else
		{
			echo "<table>";
			echo "<tr><th>SID</th><th>NAME</th><th>BATCH</th><th>BRANCH</th><th>FLAT_NO</th><th>ROOM_NO</th><th>GENDER</th></tr>";
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
					echo "<tr><td>".$sid1."</td><td>".$name1."</td><td>".$batch1."</td><td>".$branch1."</td><td>".$flat_no1."</td><td>".$room_no1."</td><td>".$gender1."</td><td></tr>";
				}
				echo"</table>";
		}
	}
	echo"click on go back to go to student menu";
}
?>