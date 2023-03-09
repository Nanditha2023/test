<?php
include("connection.php");
$adminName=$_POST['adminname'];
$password=$_POST['Password'];
$query="SELECT * FROM `admintable` WHERE `adm_name`='$adminName' and `password`=$password";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
while($row = mysqli_fetch_array($result))
{
    $type = $row['adm_name'];
    $theId = $row['adm_id'];
}

session_start();
$_SESSION["id"] = $theId;
$_SESSION["plan"] = $type;


if($num==1)
{
header("location:adminHome.php");
}
else
{
header("location:adminLogin.php");
}
?>