<?php
include("connection.php");
$query="SELECT * FROM `usertable`";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
echo ($num);
?>