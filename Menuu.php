<?php session_start();

$conn = mysqli_connect ("localhost","root","","food_proj");

//only things in php to be included in php
$sql_select_breakfast="SELECT * FROM Foods WHERE `Category` = 'Breakfast' LIMIT 4;";
$breakfastProducts=$conn->query($sql_select_breakfast);

$sql_select_Lunch="SELECT * FROM Foods WHERE `Category` = 'Lunch' LIMIT 3;";
$LunchProducts=$conn->query($sql_select_Lunch);

$sql_select_Cocktails="SELECT * FROM Foods WHERE `Category` = 'Cocktails' LIMIT 3;"; //limits the products displayed
$CocktailsProducts=$conn->query($sql_select_Cocktails);

$sql_select_Deserts="SELECT * FROM Foods WHERE `Category` = 'Deserts' LIMIT 3;"; //limits the products displayed
$DesertsProducts=$conn->query($sql_select_Deserts);


?>
<!DOCTYPE html>
<html>
	<head>
     <title>UberEats-Register Page</title>
     <link rel="stylesheet" href="Menuu.css">
     <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    </head>

 <body>

    

      <div class="navlinks"> 

                <ul>

                <a href="Home.php"><li> HOME </li></a>
                <a href="#"><li> ABOUT</li></a>
                <a href="#"><li> RECIPE </li></a>
                <a href="#"><li> MENU </li></a>
                <a href="#"><li> SIGNATURE </li></a>
                <a href="#"><li> OFFERS</li></a>
                <a href="#"><li> HAPPY HOUR</li></a>
                <a href="#"><li> EVENTS</li></a>
                <?php if(isset($_SESSION['Email'])): ?>
                    <a href="logout.php"><li>LOGOUT</li></a>
                <?php endif; ?>
                <?php if(!isset($_SESSION['Email'])): ?>
                    <a href="login.php"><li> LOGIN </li></a>
                <?php endif; ?>
                <?php if(isset($_SESSION['Email'])): ?>
                <a href="#"><li>
                    <i class="fas fa-user-check" style="font-size: 1.5rem;"></i>
                    <small>
                        <?php echo $_SESSION ['Email'];?>
                    </small>
                </li></a>
                <a href="#" style="display:flex; flex-direction: row;"><li>
                    <div style="position: absolute; right:50px; top: 80px;">
                        <a href="cartDisplay.php">
                            <svg height="25pt" viewBox="0 -31 512.00033 512" width="25pt" xmlns="http://www.w3.org/2000/svg">
                                <path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0"/><path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0"/><path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0"/>
                            </svg>
                        </a>
                  </div>
                    <div style="position: absolute;background-color: white; color: black; border-radius: 20%; padding: 1px; right:45px; top: 75px;">
                        <span>
                            <?php echo $_SESSION['cart-quantity']?>;
                        </span>    
                    </div>
                </li></a>
              <?php endif; ?>
                <h2>Our Menu</h2>
            </ul>
       
   </div>

             
    <div>
        <h3 class="section-heading">Breakfast</h3>
        <div class="menu-container">
            <?php foreach($breakfastProducts as $product):?> <!---can change the product name--->
                <div class="card">
                    <div class="card-img-container">
                        <img src="upload/<?php echo $product['Image'];?>" class="card-img">
                    </div>
                    <div class="card-content">
                        <h4>
                            <?php echo $product['Meal'];?>
                        </h4>
                        <span>
                            <?php echo $product['Price'];?>
                        </span>
                        <br>
                        <small>
                            <p>
                                <?php echo $product['Description'];?>
                            </p>
                        </small>
                        <form method="POST" action="cart.php">
                            <input type="hidden" name="mealId" value="<?php echo $product['id'];?>">
                            <button class="btn" name="orderbtn" type="submit">
                                Order
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div>
        <h3 class="section-heading">Lunch</h3>
        <div class="menu-container">
            <?php foreach($LunchProducts as $product):?> 
                <div class="card">
                    <div class="card-img-container">
                        <img src="upload/<?php echo $product['Image'];?>" class="card-img">
                    </div>
                    <div class="card-content">
                        <h4>
                            <?php echo $product['Meal'];?>
                        </h4>
                        <span>
                            <?php echo $product['Price'];?>
                        </span>
                        <br>
                        <small>
                            <p>
                                <?php echo $product['Description'];?>
                            </p>
                        </small>
                        <form method="POST" action="cart.php">
                            <input type="hidden" name="mealId" value="<?php echo $product['id'];?>">
                            <button class="btn" name="orderbtn" type="submit">
                                Order
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>

    </div>
    <div>
        <h3 class="section-heading">Cocktails</h3>
      <div class="menu-container">
            <?php foreach($CocktailsProducts as $product):?> 
                <div class="card">
                    <div class="card-img-container">
                        <img src="upload/<?php echo $product['Image'];?>" class="card-img">
                    </div>
                    <div class="card-content">
                        <h4>
                            <?php echo $product['Meal'];?>
                        </h4>
                        <span>
                            <?php echo $product['Price'];?>
                        </span>
                        <br>
                        <small>
                            <p>
                                <?php echo $product['Description'];?>
                            </p>
                        </small>
                        <form method="POST" action="cart.php">
                            <input type="hidden" name="mealId" value="<?php echo $product['id'];?>">
                            <button class="btn" name="orderbtn" type="submit">
                                Order
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div>
        <h3 class="section-heading">Deserts</h3>
      <div class="menu-container">
            <?php foreach($DesertsProducts as $product):?> 
                <div class="card">
                    <div class="card-img-container">
                        <img src="upload/<?php echo $product['Image'];?>" class="card-img">
                    </div>
                    <div class="card-content">
                        <h4>
                            <?php echo $product['Meal'];?>
                        </h4>
                        <span>
                            <?php echo $product['Price'];?>
                        </span>
                        <br>
                        <small>
                            <p>
                                <?php echo $product['Description'];?>
                            </p>
                        </small>
                        <form method="POST" action="cart.php">
                            <input type="hidden" name="mealId" value="<?php echo $product['id'];?>">
                            <button class="btn" name="orderbtn" type="submit">
                                Order
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>

   </div>

    <br><br><br><div class="footer">
             <div class ="footercontainer">

               
                <div class="row">
                    <div class ="footercol">
                        <u><h4 >Order</h4></u>
                        
                        <ul>
                            <li><a href="Order.php">Payments</a></li>
                            <li><a href="#">Delivery</a></li>
                            <li><a href="#">Order status</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                        
                    </div>

                    
                   <div class ="footercol">
            
                        <u><h4 >Contact</h4></u>
                        <p>
                   P.O.Box 433-00502 <br>
                   Tel: 0714 781 351 <br>
                   Email: info@Uberneats.co.ke</p>
                
                    </div>
      


                   <div class ="footercol">
                        <u><h4 >Location</h4></u>
                        <p> Interstrat Limited<br>
                      2nd Floor Lavington Curve
                      James Gichuru Road, Nairobi </p>
                        
                    </div>
                </div>
            </div>

     
  </body>
</html>