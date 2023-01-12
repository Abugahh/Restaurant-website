<?php
	session_start();
	$conn = mysqli_connect ("localhost","root","","food_proj");

	if(isset($_POST['orderbtn'])){
        $productId =(int) $_POST['mealId'];
        
        $_SESSION['cart-quantity']+=1;

      
        if(isset($_SESSION['cartitems']))
        {
           
           $_SESSION['cartitems'][$productId]=['quantity'=>1]; 

            
        }

         
        else{
            $_SESSION['cartitems'] = array();
        }

       // print_r($_SESSION['cartitems']); die;
    }


?>