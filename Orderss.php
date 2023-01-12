<?php 
session_start();
$conn=mysqli_connect ("localhost","root","","food_proj");


$cartitems =$_SESSION['cartitems'];

foreach($cartitems as $id =>$items){

  $sql_select="SELECT* FROM foods WHERE id= " .$id." limit 1";
  $result= $conn->query($sql_select);
  $Foodproduct=$result->fetch_assoc();
  $Price= $Foodproduct['Price'];
  $Quantity= $items['quantity'];
  $Image=$Foodproduct['Image'];
  $Meal=$Foodproduct['Meal'];
	


	

 $sql_insert= "INSERT INTO Orderss (Image,Meal,Quantity,productId,UserId)VALUES('$Image','$Meal','$Quantity','$id','$_SESSION[Id]')";
  
  if($conn->query($sql_insert)===TRUE){
		echo "Order Successfully Made";

    //header("location:Menuu.php");

	}else {
          
          echo "Error" .$conn->error;
	} 

}

$_SESSION['cartitems']= array();

?>


<!DOCTYPE>
<html >
 <html>
  <head>

     <title>PaymentPage</title>
     <link rel="stylesheet" href="login.css">

   </head>

  <body>
     <div class="form-area">
        <h4>Order here!!</h4>
        
         <form  action="Message.php">
             

            <p>Pay using Credit or Debit card</p><br>
             <label> Card Number </label>
             <input
             type="text"
             class="card-number-field"
             placeholder="###-###-###"/>


             <label> Delivery Date </label>
             <input type="text" class="date-number-field" 
                 placeholder="DD-MM-YY" />


            <label>  Meal </label>
            <input
            type="text"
            class="card-name-field"
            placeholder="Enter your Meal"/>

             <label> Amount </label>
            <input
            type="text"
            class="card-name-field"
            placeholder="Enter the amount"/>
         
            
             <br>
             <button type='submit' name="submits"class='submit-btn'>Submit</button>

          </form>




    
    </div>
  </body>
</html>

