<!DOCTPYE HTML>
<html>
<body>
<form action="m_attend.php" method="GET">
<h3>Enter month:</h3>
  <body style="background-color:#FFD47F;">
<input type="int(2)" name="month"><br>
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
<a href="search.php"><h3><u>GO Back</u></h3></a><br>

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
if(isset($_GET['month']))
{
	$month1=$_GET['month'];
	$sql="select flat_no from flat";
	if($con->query($sql)==true)
	{
		$result=$con->query($sql);
		while($row=$result->fetch_assoc())
		{
			$flat1=$row['flat_no'];
			$sql1="select sid,count(attendance) from attendance where date like '%-".$month1."-%' and flat_no='".$flat1."' and attendance='p' group by sid";
			if($con->query($sql1)==true)
			{
				$result1=$con->query($sql1);
				echo"<table>";
				echo"<caption><h3>".$flat1."</h3></caption>";
				echo"<tr><th>SID</th><th>Month's attendance</th></tr>";
				while($row1=$result1->fetch_assoc())
				{
					$sid1=$row1['sid'];
					$count1=$row1['count(attendance)'];
					echo"<tr><td>".$sid1."</td><td>".$count1."</td></tr>";
				}
				echo"</table>";
			}
			
		}
		echo"click on Go Back to go to search menu";
	}
}
?>