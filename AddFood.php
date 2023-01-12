<?php 
$conn=mysqli_connect ("localhost","root","","food_proj");



  $id =$_POST['id'];
	$Meal= $_POST['Meal'];
	$Price= $_POST['Description'];
	$Description= $_POST['Description'];
	$Image= $_POST['Image'];
	$Category= $_POST['Category'];


	

$sql_insert= "INSERT INTO foods (id,Meal,Price,Description,Image,Category)VALUES(NULL,'$Meal','$Price','$Description','$Image','$Category')";
  
  if($conn->query($sql_insert)===TRUE){
		echo "Added Successfully";

	}else {
          
          echo "Error" .$conn->error;
	} 










?>