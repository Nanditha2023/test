
<?php

include('connection.php');
session_start();
session_destroy();
?>
	<script>
		alert ("Logout successful");
		window.location= "index.php"
		
		</script>
	
	<?php

?>