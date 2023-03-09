<?php
include("connection.php");
$val=$_POST['notifyVal'];
$id=$_POST['theId'];
$query="UPDATE `requesttable` SET `notify`= $val WHERE `fk_user_id`='$id' ";
$result=mysqli_query($con,$query);


?>
