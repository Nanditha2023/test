<?php

include('connection.php');
$eid=$_GET['uid'];

$query= "UPDATE `usertable` SET `isactive`='1' WHERE user_Id='$eid';";
$reuslt=mysqli_query($con,$query);

if($result)
{
    header("location:userView.php");
}
else
{
    header("location:userView.php");
}



?>