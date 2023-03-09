<?php

$connect = new PDO("mysql:host=localhost;dbname=matrimony", "root", "");
$query = "
 SELECT * FROM chat 
 WHERE (from_id = '$from_id' 
 AND to_id = '$to_id') 
 OR (from_id = '$to_id' 
 AND to_id = '$from_id') 
 ORDER BY dateAndTime DESC";

$statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '<ul class="list-unstyled">';
 foreach($result as $row)
 {
  $user_name = '';
  if($row["from_id"] == $from_id)
  {
	  
   $user_name = '<b class="text-success">You</b>';
  }
  else
  {
   $user_name = '<b class="text-danger">'.$name.'</b>';
  }
  $output .= '
  <li style="border-bottom:1px dotted #ccc">
   <p>'.$user_name.' - '.$row["message"].'
    <div align="right">
     - <small><em>'.$row['dateAndTime'].'</em></small>
    </div>
   </p>
  </li>
  ';
 }
 $output .= '</ul>';
 echo $output;

?>