<?php
include_once 'connect.php';


if(count($_POST)>0)
 {
  $id= $_POST['id'];
  $fname=$_POST['Firstname'];
  $sname=$_POST['Secondname'];
  $email=$_POST['Email'];
  $pass1=$_POST['Password'];
  $pass2=$_POST['ConfirmPassword'];
 
 	//query to update the data
    $sql= "UPDATE `registerr` SET  `id`='$id', `Firstname`='$fname',`Secondname`='$sname', `Email`='$email' ,`Password`='$pass1', `Confirm`='$pass2 ' WHERE id='$id'";

   if(mysqli_query($conn,$sql))

     {
      echo "modified successfully";
    }
    else{

      echo "error".$conn->error;
    }
}



?>
