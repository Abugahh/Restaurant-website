<!DOCTYPE html>
<html>
	<head>
     <title>UberEats-Login Page</title>
     <link rel="stylesheet" href="login.css">
    </head>

 <body>
    <div class="form-area">
        <h4>Login</h4>
        
         <form action="Sessions.php" method="post">
             

            <p>Email</p><br>
             <input type='email'name="Email"placeholder='Email Id' required>

            <p> Password</p><br>
             <input type='password'name="Password"placeholder='Enter Password' required><br><br>

             <a href="#">Forgot password?</a><br><br>
            
             <br>
             <button type='submit'class='submit-btn' value="Login" name="Login">Sign in</button> <br><br>

             <button type='submit'class='submit-btn' value="Login" name="Adminlogin">Sign in</button>
             </form>




    </div>
        
    

     
  </body>
</html>