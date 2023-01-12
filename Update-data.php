<?php
include_once 'connect.php';


if(count($_POST)>0)
 {
 	//query to update the data
   mysqli_query($conn,"UPDATE registerr set id='" . $_POST['id'] . "', Firstname='" . $_POST['Firstname'] . "', Lastname='" . $_POST['Secondname'] . "', email='" . $_POST['Email'] . "' ,Password='" . $_POST['Password'] . "', ConfirmPassword='" . $_POST['Confim'] . " ' WHERE id='" . $_POST['id'] . "'");
   $message = "Record Modified Successfully";
}

$result = mysqli_query($conn,"SELECT * FROM registerr WHERE id='" . $_GET['id'] . "'"); //data will be gotten from selected id and displayed
$row= mysqli_fetch_array($result);//data is fetched 

?>


<html>
	<head>
     <title>UberEats-Register Page</title>
     <link rel="stylesheet" href="Register.css">
    </head>

 <body>
    <div class="form-area">
        <h4>Registration</h4>
        <h6>Please fill in the details to create an account with us.</h6>

        <form  action="update.php" method="post">

        	<div> <?php if(isset($message)) { echo $message; } ?> </div>



             <p>Name</p><br>
             <input type='text' name="Firstname" value="<?php echo $row['Firstname'];?>" placeholder='First Name' required>
             <input type='text'name="Secondname" value="<?php echo $row['Secondname'];?>"placeholder='Last Name ' required>

             <p>Email</p><br>
             <input type='text'name="Email"   value="<?php echo $row['Email'];?>"placeholder='Email Id' required>

             <p> Password</p><br>
             <input type='text'name="Password" value="<?php echo $row['Password'];?>"placeholder='Enter Password' required>

             <p> Confirm Password</p><br>
             <input type='text'name="ConfirmPassword"  value="<?php echo $row['Confirm'];?> "placeholder='Confirm Password'  required>

             
             
            <input type="hidden" id="nID" name="id" value="<?= $row['id']?>">

              

             <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>
             
             <button type='submit' name="submit" value="submit" class='update-btn'><strong>Update</strong></button>


             </form>




    </div>
        
    

     
  </body>
</html>