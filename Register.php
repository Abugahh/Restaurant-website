<?php

//procedural way to connect to database
$conn=mysqli_connect ("localhost","root","","food_proj");
  /*if(!$conn) {

	  die("Not connected".mysql_connect_error());

	}else{
		echo "connected Successfully";
	}*/

//Already created a table before

//Create table Register

$sql ="CREATE TABLE Registerr (
id INT(10) AUTO_INCREMENT PRIMARY KEY,
Firstname VARCHAR (10) NOT NULL ,
Secondname VARCHAR (10) NOT NULL,
Email VARCHAR (15) NOT NULL,
Password VARCHAR(15)NOT NULL,
Confirm VARCHAR(15)NOT NULL
 )"; 

 /*if($conn->query($sql)===TRUE){
		echo "Table Created";

	}else {
          
          echo "Error" .$conn->error;
	}*/

//insert data
    $id =$_POST['id'];
	$Firstname= $_POST['Firstname'];
	$Lastname= $_POST['Lastname'];
	$email= $_POST['email'];
	$Password= $_POST['Password'];
	$ConfirmPassword= $_POST['ConfirmPassword'];


	

$sql_insert= "INSERT INTO registerr(id,Firstname,Secondname,email,Password,Confirm)VALUES(NULL,'$Firstname','$Lastname','$email','$Password','$ConfirmPassword')";
  
  if($conn->query($sql_insert)===TRUE){
		echo "Your Registered Successfully";

	}else {
          
          echo "Error" .$conn->error;
	} 





?>


