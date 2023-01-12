<?php

//session_start();
$conn=mysqli_connect ("localhost","root","","food_proj");
  if(!$conn) {

	  die("Not connected".mysql_connect_error());

	}else{
		echo "connected Successfully";
	} 


/*$sql ="CREATE TABLE Login (
Email VARCHAR(15) PRIMARY KEY,
Password VARCHAR (10) NOT NULL
 )"; 

  if($conn->query($sql)===TRUE){
		echo "Table Created";

	}else {
          
          echo "Error" .$conn->error;
	}*/
$id=$_POST['id'];
$Meal= $_POST['Meal'];
$Price= $_POST['Price'];
$Description= $_POST['Description'];
$Image= $_POST['Image'];


$sql_insert= "INSERT INTO Foods(id,Meal,Price,Description,Image)VALUES(NULL,'$Meal','$Price','$Description','$Image')";
  
  /*if($conn->query($sql_insert)===TRUE){
		echo "insert Created";
s
	}else {
          
          echo "Error" .$conn->error;
	}*/




/*if (isset($_POST["saveImage"])) {
  
  $id=$_POST['id'];
  $Meal= $_POST['Meal'];
  $Price= $_POST['Price'];
  $Description= $_POST['Description'];
  $Image= $_FILES['Image'];
	
	$query = "INSERT INTO Foods(id,Meal,Price,Description,Image)VALUES(NULL,'$Meal','$Price','$Description','$Image')";
	$query_run= mysqli_query($conn,$query);


	if($query_run){
		move_uploaded_file($_FILES['Image']['tmp_name'],"upload/".$_FILES['Images']);

		
    
    header("location:Admin-int.php");
	}

	else{
		header("location:Admin-intphp");
	}*/




} 


 

?>