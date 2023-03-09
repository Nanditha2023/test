
<?php
include("connection.php");

$id=$_POST['theUser'];
$accountNumber=$_POST['accountNumber'];
$cvv=$_POST['cvv'];
$plan=$_POST['plan'];

if($plan == 1)
{
	$amt = 100;
	$type = 0;
}
if($plan == 2)
{
	$amt = 500;
	$type = 1;
}
if($plan == 3)
{
	$amt = 800;
	$type = 2;
}


$qry = "SELECT * FROM banktable WHERE card_no = $accountNumber AND cvv = $cvv";

$result=mysqli_query($con,$qry);

$count = mysqli_num_rows($result);


if($count == 1)
{
	while($row = mysqli_fetch_array($result)){
		$bal = $row['balance'];
	}
	if ($bal < $amt)
	{
		?>
<script>
alert("Not enough balance");
history.back();
</script>
<?php
	}
	else{
		
	$qq = "UPDATE banktable SET balance = balance-'$amt' where card_no = $accountNumber ";
	$ext = mysqli_query($con,$qq);
	$dat=date('Y-m-d');
	
	$trans = "INSERT INTO `transactiontable`(`user_id`, `amount`, `date`) VALUES ('$id','$amt','$dat') ";
	$res = mysqli_query($con,$trans);
	
	$qr = "UPDATE usertable SET account_type = '$type' where user_id = $id ";
	$xt = mysqli_query($con,$qr);
	}
	?>
<script>
alert("Payment successfull");
window.location.href='userHome.php';
</script>
<?php

}
else
{
	?>
<script>
alert("Error ! No account found.");
<?php

?>

history.back();
</script>
<?php

}

?>
