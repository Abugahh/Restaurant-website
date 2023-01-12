<?php 
	$conn = mysqli_connect ("localhost","root","","food_proj");



//Delete data 
$sql = "DELETE FROM registerr WHERE id=' " .$_GET["id"] ." ' ";

if (mysqli_query($conn, $sql)) {

  echo "Record deleted successfully";
} else {

     echo "Error" .$conn->error;
} 

$sql = "DELETE FROM foods WHERE id=' " .$_GET["id"] ." ' ";

if (mysqli_query($conn, $sql)) {

  echo "Record deleted successfully";
} else {

     echo "Error" .$conn->error;
}







?>




