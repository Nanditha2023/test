<?php
include("connection.php");

$userName=$_POST['username'];
$password=$_POST['Password'];

$query="SELECT * FROM `usertable` WHERE `userFirstName`='$userName' and `password`='$password'and isactive=0";

$result = mysqli_query($con, $query) or die(mysqli_error($con));
$num = mysqli_num_rows($result);

while($row = mysqli_fetch_array($result))
{
	$type = $row['account_type'];
	$theId = $row['user_Id'];
}

session_start();
$_SESSION["id"] = $theId;
$_SESSION["plan"] = $type;

if($num == 1)
{
	
	if(($type == null)|| ($type > 2))
	{
		header("location:selectPlan.php");
	}
	else{
header("location:userHome.php");

	}
}
else
{
header("location:userLogin.php");
}
?>