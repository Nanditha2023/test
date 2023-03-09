<?php


$from_id = $_POST['from_user_id'];
$to_id=$_POST['to_user_id'];
$name = $_POST['name'];

include('fetch_user_chat_history.php');

?>