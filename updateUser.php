<?php
include("connection.php");

$userfirstName=$_POST['userfirstname'];
$usersecondname=$_POST['userlastname'];
$gender=$_POST['gender'];
$religion=$_POST['religion'];
$caste=$_POST['caste'];
$address=$_POST['address'];
$nationality=$_POST['nationality'];
$state=$_POST['state'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$mothertongue=$_POST['mother_tongue'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$Password=$_POST['Password'];
$qualification=$_POST['educational_qualification'];
$occupation=$_POST['occupation'];
$mothersname=$_POST['mother'];
$fathersname=$_POST['father'];
$aboutyourself=$_POST['about_yourself'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$password=$_POST['Password'];
$dob=$_POST['dob'];
$account_type=$_POST['account_type'];
$query="UPDATE `usertable` SET `userFirstName`='$userfirstName',`userLastName`='$usersecondname',`gender`='$gender',`DOB`='$dob',`password`='$password',`religion`='$religion',`caste`='$caste',`address`='$address',`nationality`='$nationality',`state`='$state',`district`='$district',`pincode`='$pincode',`mothertongue`='$mothertongue',`phone_no`='$phone_no',`Email`='$email',`educational_qualification`='$qualification',`occupation`='$occupation',`mother's_name`='$mothersname',`father's_name`='$fathersname',`about_yourself`='$aboutyourself',`height`='$height',`weight`='$weight',`account_type`='$account_type' WHERE user_Id`='$id'";
$result=mysqli_query($con,$query);
if($result)
{
?>
<script>
alert("user Details Saved");
window.location.href='userView.php';
</script>
<?php
}
else
{
?>
<script>
alert("faild to adduser Details ");
window.location.href='userView.php';
</script>
<?php
}
?>