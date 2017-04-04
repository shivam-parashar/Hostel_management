<!DOCTPYE HTML>
<html>
<body>
<form action="flatwise.php" method="GET">
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
<a href="search.php"><h3><u>GO Back</u></h3></a><br>
  <body style="background-color:#FFD47F;">


</form>
</body>
</html>
<style>
table {
    width:100%;
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
$sql="select * from flat";
$result=$con->query($sql);
while($row1=$result->fetch_assoc())
{
	$flat1=$row1['flat_no'];
	$sql1="select * from student where flat_no='".$flat1."'";
	$result1=$con->query($sql1);
	
	if($con->query($sql1)==TRUE)
			{
				if($result1->num_rows==0)
				{
					echo "<table>";
					echo"<caption><h3>".$flat1." is Empty.</h3></caption><table><br>";
				}
				else
				{
					echo "<table>";
					echo "<caption><h3>".$flat1."</caption></h3>";
					echo "<tr><th>SID</th><th>NAME</th><th>BATCH</th><th>BRANCH</th><th>FLAT_NO</th><th>ROOM_NO</th><th>DOB</th><th>MOBILE_NO</th><th>GENDER</th></tr>";
					while($row=$result1->fetch_assoc())
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
				}
			}
	
}
echo "<br> click on Go Back to go to search menu.";
?>