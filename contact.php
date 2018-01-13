<?php 
if(isset($_GET['submit']))
{
	$n = $_GET['t'];
	if($n=="12")
	  echo "string";
}
 ?>
 <form action="contact.php" method="GET">
 	<input type="text" name="t">
 	<button name="submit">submit</button>
 </form>