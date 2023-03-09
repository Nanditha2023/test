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
$account_type=3;
$profilepic=$_FILES['profile']['name'];
$profile=$_FILES['profile']['tmp_name'];
$dir="images/";
$image=$dir.$profilepic;
move_uploaded_file($profile,$image);
$query="INSERT INTO `usertable`(`userFirstName`, `userLastName`, `gender`, `password`, `DOB`, `religion`, `caste`, `address`, `nationality`, `state`, `district`, `pincode`, `mothertongue`, `phone_no`, `Email`, `educational_qualification`, `occupation`, `mother's_name`, `father's_name`, `about_yourself`, `height`, `weight`,`account_type`,profilepic) 
VALUES ('$userfirstName','$usersecondname','$gender','$password','$dob','$religion','$caste','$address','$nationality','$state','$district','$pincode','$mothertongue','$phone_no','$email','$qualification','$occupation','$mothersname','$fathersname','$aboutyourself','$height','$weight','$account_type','$profilepic')";
$result=mysqli_query($con,$query);
if($result)
{ session_start();
    $_SESSION['msg']="Your Registration Completed...";
?>
<script>
alert("user Details Saved");
window.location.href='userLogin.php';
</script>
<?php
}
else
{
?>
<script>
alert("faild to adduser Details ");
window.location.href='userRegistration.php';
</script>
<?php
}
?>