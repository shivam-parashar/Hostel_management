<!DOCTPYE HTML>
<html>
<body>
<form action="self_attend.php" method="GET">
  <body style="background-color:#FFD47F;">

Enter month :<br>
<input type="int(2)" name="month"><br>
<input type="radio" name="sid" value="<?php $sid4=$_GET['sid10']; echo $sid4; ?>" checked>CLICK on submit to see your attendance<br>
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
<a href="student.php"><h3><u>GO Back</u></h3></a><br>

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
	$month1=$_GET['month'];
	$sid1=$_GET['sid'];
	
			$sql1="select sid,count(attendance) from attendance where date like '%-".$month1."-%' and sid='".$sid1."' and attendance='p' group by sid";
			if($con->query($sql1)==true)
			{
				$result1=$con->query($sql1);
				if($result1->num_rows==0)
				{
					echo "<h3>No record found</h3><br>";
				}
				else
				{
					echo"<table>";
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
?>