<!DOCTYPE HTML>
<html>
<body>
<style>
body{
	background : url("hostel.jpg");
	background-size: cover;
}
</style>
<form action="login2.php" method="POST">
  <body style="background-color:#FFD47F;">

<font color="white">Student ID:<br>
<input type="text" name="id"> <br><br>
DOB(yyyy-mm-dd):<br>
<input type="password" name="dob"> <br><br>
<input type="submit" name="submit">
</font>
</body>
</html>
<?php
session_start();
$con=new mysqli('localhost','root','','project');
if($con->connect_error)
{
	die("connection error");
}
/*if($pass==NULL||$uname==NULL)
{
	echo "try again";
	die();
}*/

		
 if (isset($_POST['submit']))
    {
		$sid = ($_POST['id']);
        $dob1 = ($_POST['dob']);
		
		
	$query ="SELECT * FROM student";
	$result8=$con->query($query);
	
	while($row=$result8->fetch_assoc())
	
	{$a= $row['sid'];
		$b= $row['dob'];
		if($a==$sid&&$b==$dob1)
		{
			header("location:student.php ? sid=$a");
		}
		
	}
	echo"enter proper details"; die();
	}
	
	
	
	


?>