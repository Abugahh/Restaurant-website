<!DOCTYPE html>
<html>
	<head>
     <title>UberEats-Register Page</title>
     <link rel="stylesheet" href="Register.css">
    </head>

 <body>
    <div class="form-area">
        <h4>Registration</h4>
        <h6>Please fill in the details to create an account with us.</h6>

        <form  action="Register.php" method="post">

             <p>Name</p><br>
             <input type='text' name="Firstname" placeholder='First Name' required>
             <input type='text'name="Lastname"placeholder='Last Name ' required>

             <p>Email</p><br>
             <input type='email'name="email"placeholder='Email Id' required>

             <p> Password</p><br>
             <input type='password'name="Password"placeholder='Enter Password' required>

             <p> Confirm Password</p><br>
             <input type='password'name="ConfirmPassword"placeholder='Confirm Password'  required>

             <input type="hidden" name="id" value="<?php echo $id; ?>">
              

             <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>
             
             <button type='Register'class='Register-btn'><strong>Register</strong></button>


             </form>




    </div>
        
    

     
  </body>
</html>