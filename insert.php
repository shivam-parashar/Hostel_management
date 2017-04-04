<!DOCTYPE html>
<html>
<body>

<form action="insert.php" method="GET">

 <font color="blue"><h1>PLEASE ENTER THE STUDENT DETAILS:<br></h1></font>
 <body style="background-color:#FFD47F;">

 Student id:
 <input type="varchar" name="sid"><br><br>
  Name:
  <input type="text" name="name">
  <br>  <br>
	Gender:<br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br><br><br>
  Mobile no.:
  <input type="bigint" name="mob">
  <br> <br>
  DOB:
  <input type="date" name="dob"> <br><br>
  Branch:
  <input type="varchar" name="branch"><br><br>
  Batch:
  <input type="year" name="batch"> <br><br>
  Flat no.:
  <input type="varchar" name="fno"> <br><br>
  room no.:
  <input type="text" name="rno"> <br><br>
  
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
		if((empty($_GET['sid'])||empty($_GET['name'])||empty($_GET['mob'])||empty($_GET['dob'])||empty($_GET['branch'])||empty($_GET['batch'])||empty($_GET['fno'])||empty($_GET['rno']))==TRUE)
		{
			echo "enter details again";
			header("location:insert.php");
		}
		else
		{
			$sid1=$_GET['sid'];$name1=$_GET['name'];$batch1=$_GET['batch'];$branch1=$_GET['branch'];$fno1=$_GET['fno'];$rno1=$_GET['rno'];$dob1=$_GET['dob'];$mob1=$_GET['mob'];$gender1=$_GET['gender'];
			$sql="insert into student values ('".$sid1."','".$name1."','".$batch1."','".$branch1."','".$fno1."','".$rno1."','".$dob1."','".$mob1."','".$gender1."')";
			if($con->query($sql)==TRUE)
			{
				
				$sql1="update flat set curr_acd=curr_acd+1 where flat_no='".$fno1."'";
				if($con->query($sql1)===TRUE)
				{
					header("location:modify.php");
				}
				
			}
		}
	}
?>