
<?php
include("connection.php");

$id=$_POST['theUser'];
$matchUserId=$_POST['matchUserId'];

$se = "SELECT * FROM requesttable WHERE fk_user_id = $matchUserId AND recipient_id = $id";
$show=mysqli_query($con,$se);
$cnt = mysqli_num_rows($show);
if($cnt>0)
{
	$query="UPDATE `requesttable` SET `recipient_status`=1 , notify=1 WHERE `fk_user_id`='$matchUserId' AND recipient_id = $id";
$rrss=mysqli_query($con,$query);
	
	$qry = "INSERT INTO requesttable (fk_user_id,recipient_id,recipient_status,notify) VALUES ('$id','$matchUserId','1','1')";

$result=mysqli_query($con,$qry);
if($result)
{
?>
<script>
alert("YEY! ITS A MATCH ☺");
window.location.href='chat.php';
</script>
<?php
}
else
{
?>
<script>
alert("faild ");
window.location.href='userHome.php';
</script>
<?php
}
	
}
else{
$qry = "INSERT INTO requesttable (fk_user_id,recipient_id,recipient_status) VALUES ('$id','$matchUserId','0')";

$result=mysqli_query($con,$qry);
if($result)
{
?>
<script>
alert("success");
window.location.href='userHome.php';
</script>
<?php
}
else
{
?>
<script>
alert("faild ");
window.location.href='userHome.php';
</script>
<?php
}
}
?>