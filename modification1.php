
<!DOCTYPE html>
<html>
<body>
<form action="modification1.php" method="GET">
<body style="background-color:#FFD47F;">


 <font color="blue"><h1>PLEASE RE-ENTER THE STUDENT DETAILS:<br></h1></font>
 
  SID:(Do not change)
  <input type="text" name="sid" value="<?php echo $_GET['sid2'];?>"><br><br>
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
	if((empty($_GET['name'])||empty($_GET['mob'])||empty($_GET['dob'])||empty($_GET['branch'])||empty($_GET['batch'])||empty($_GET['fno'])||empty($_GET['rno']))==TRUE)
	{
		echo"plz enter details properly. don't leave any field empty.";
	}
	else
	{
		$sid3=$_GET['sid'];
		$sql="select * from student where sid='".$sid3."'";
		$result=$con->query($sql);
		while($row=$result->fetch_assoc())
		{
			$fno2=$row['flat_no'];
		}
			$sql2="update flat set curr_acd=curr_acd-1 where flat_no='".$fno2."'";
			if($con->query($sql2)==FALSE)
			{
				echo "sql2 failed";
			}
			
			if(empty($row['sid']))
			{
				echo "enter sid again";
				
			}
			$name1=$_GET['name'];$batch1=$_GET['batch'];$branch1=$_GET['branch'];$fno1=$_GET['fno'];$rno1=$_GET['rno'];$dob1=$_GET['dob'];$mob1=$_GET['mob'];$gender1=$_GET['gender'];
			$sql1="update student set name='".$name1."', mob_no='".$mob1."', dob='".$dob1."', branch='".$branch1."', flat_no='".$fno1."', room_no='".$rno1."'
			where sid='".$sid3."'";
			if($con->query($sql1)==TRUE)
			{
				$sql3="update flat set curr_acd=curr_acd+1 where flat_no='".$fno1."'";
				if($con->query($sql3)==TRUE)
				{
					echo"student data updated successfully";
				}
			}
			else
			{
				echo"error";
			}
	}
}
?>