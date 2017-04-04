<!DOCTYPE html>
<html>
<body>

<form action="delete.php" method="GET">
<h2>Enter the student ID of the student whose information you want to delete<br><br></h2>
  Student ID:<br>
  <input type="varchar" name="sid">
  <body style="background-color:#FFD47F;">

  <br><br>
  <input type="submit" name="submit"> <br>
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
		if(empty($_GET['sid'])==FALSE)
		{
			$sid1=$_GET['sid'];
			$sql1="select * from student where sid'".$sid1."'";
			if($con->query($sql1)==TRUE)
			{
				$result=$con->query($sql1);
				while($row=$result->fetch_assoc())
				{
					$flat1=$row['flat_no'];
				}
				$sql2="update flat set curr_acd=curr_acd-1 where flat_no='".$flat1."'";
				if($con->query($sql2)==TRUE)
				{
					
				}
			}
			$sql="delete from student where sid='".$sid1."'";
			if($con->query($sql)==TRUE)
			{
				echo "student record deleted successfully";
				header("location:modify.php");
			}
		}
	}
	?>