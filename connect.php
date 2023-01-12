<?php
$conn=mysqli_connect ("localhost","root","","food_proj");
  if(!$conn) {

	  die("Not connected".mysql_connect_error());

	}else{
		echo "connected Successfully";
	}



 

?>