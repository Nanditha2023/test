
<?php
include("connection.php");

$from_id = $_POST['from_user_id'];
$to_id=$_POST['to_user_id'];
$name = $_POST['name'];



$chat_message=$_POST['chat_message'];

$qry = "INSERT INTO chat (from_id,to_id,message) VALUES ('$from_id','$to_id','$chat_message')";

$result=mysqli_query($con,$qry);

include('fetch_user_chat_history.php');

?>