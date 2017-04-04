<!DOCTYPE HTML>
<html>
<body>
<form action="update.php" method="POST">
Fill new username and password:<br>
Username<input type="text" name="u"> <br>
Password<input type="password" name="p"> <br>
<input type="submit" name="submit">
<body style="background-color:#FFD47F;">

</form>
</body>
</html>
<?php
$con=new mysqli('localhost','root','','project');
if($con->connect_error)
{
	die("connection error");
}
if(isset($_POST['submit']))
{
	
	if(empty($_POST['u'])||empty($_POST['p'])==TRUE)
	{
		echo "enter carefully";
	}
	else
	{
		$u1=$_POST['u'];
		$p1=$_POST['p'];
		
			$sql="delete * from users";
			if($con->query($sql)==TRUE)
			{
				$sql1="insert into users values('".$u1."','".$p1."','1')";
				if($con->query($sql1)==TRUE)
				{
					header("location:admin.php");
				}
			}
	}
}
?>