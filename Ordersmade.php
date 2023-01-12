<?php session_start();?>
<!DOCTYPE html>

<html lamg="en">
<head>

<title>Admin's View</title>
<link rel="stylesheet" href="Admins.css">

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h3>ADMINISTRATOR</h3>
        <ul>
            <li><a href="adminnn.php"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="Admin-Menu.php"><i class="fas fa-pizza-slice"></i>Menu</a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i>Analytics</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Total Orders</a></li>
            <li><a href="#"><i class="fas fa-user-friends"></i>Employees</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Settings</a></li>
            <li><a href="#"><i class="fas fa-envelope-open-dollar"></i>Messages</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome!
            <div class ="Sessions">
               <small>
              <i class="fas fa-user-check"></i> <?php echo "Welcome" .$_SESSION ['Email'];?>
               </small>
                  
            </div>
            
            <div>

                <svg xmlns="http://www.w3.org/2000/svg" width="25px" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="4"> <!---change the svg not the path--->
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
           
        </div> 



         <div class="info">
    
          <div class= "cards">
           <div class ="cards-content">   
            <table>

                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Meal</th>
                    <!-- <th>Price</th> -->
                    <th>Quantity</th>
                    <th>ProductId</th>
                    <th>UserId</th> <!---takes both cells in edit and delete--->
                </tr>

                <?php 

                 $conn = mysqli_connect ("localhost","root","","food_proj");

                 //only things in php to be included in php
                 $sql_select="SELECT * FROM orderss";
                 $result=$conn->query($sql_select);

                 while($row=$result->fetch_assoc())
                {

                 ?>
                        <tr>
                          <td><?php echo $row['Id'];?></td>;
                          <td><?php echo'<img src="upload/' .$row['Image'].'"width="100px;" height="100px;" alt="Image">'?></td>;
                          <td><?php echo $row['Meal'];?></td>;
                          <!-- <td><?php echo $row['Price'];?></td>; -->
                          <td><?php echo $row['Quantity'];?></td>;
                          <td><?php echo $row['productId'];?></td>;
                          <td><?php echo $row['UserId'];?></td>;
                                                  
                       </tr>
                 <?php   
    
                }

                 $conn->close();    //closing the connection

                 ?>

             
            </table> 
          </div>
         </div>

         

    </div>

  </div>
</div>


</body>
</html>