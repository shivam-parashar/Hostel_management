<!DOCTYPE HTML>
<html>
<body>
<style>
body{
	background : url("hostel.jpg");
	background-size: cover;
}
</style>
<form action="login1.php" method="POST">

<font color="white"><h1> Please enter the information: </h1>
Username <input type="text" name="u"> <br><br>
Password <input type="password" name="p"> <br><br>
<input type="submit" name="submit">
<body style="background-color:#FFD47F;">

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
		$u = ($_POST['u']);
        $p = ($_POST['p']);
		
		
	$query ="SELECT * FROM users ";
	$result8=$con->query($query);
	
	while($row=$result8->fetch_assoc())
	
	{$a= $row['username'];
		$b= $row['password'];
		if($a==$u&&$b==$p)
		{
			header("location:admin.php"); die();
		}
		
	}
	echo"enter proper details"; die();
	}
	
	
	
	


?>