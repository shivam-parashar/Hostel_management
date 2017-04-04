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
$sql="select flat_no,max_acd-curr_acd from flat where 1";
if($con->query($sql)==TRUE)
{
	echo"<table>";
	echo"<caption><h3>Vacancy status of available flats</h3><caption>";
	echo"<tr><th>Flat_no</th><th>Vacancy</th></tr>";
	$result=$con->query($sql);
	while($row=$result->fetch_assoc())
	{
		$flat1=$row['flat_no'];
		$vacancy=$row['max_acd-curr_acd'];
		echo"<tr><td>".$flat1."</td><td>".$vacancy."</td></tr>";
	}
	echo"</table>";
	echo"click on Go Back to go to search menu";
}
?>