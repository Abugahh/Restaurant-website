
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
            <li><a href="#"><i class="fas fa-pizza-slice"></i>Menu</a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i>Analytics</a></li>
            <li><a href="Ordersmade.php"><i class="fas fa-project-diagram"></i>Total Orders</a></li>
            <li><a href="#"><i class="fas fa-user-friends"></i>Employees</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Settings</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Messages</a></li>
            <li><a href="AddsFood.php"><i class="fas fa-pizza-slice"></i>Add Food</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome!

          </div>


         <div class="info">
    
          <div class= "cards">
           <div class ="cards-content">   
            <table>

                <tr>
                    <th>ID</th>
                    <th>Meal</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                   
                    <th colspan="2">Action</th> <!---takes both cells in edit and delete--->
                </tr>

                <?php 

                 $conn = mysqli_connect ("localhost","root","","food_proj");

                 //only things in php to be included in php
                 $sql_select="SELECT * FROM Foods";
                 $result=$conn->query($sql_select);

                 while($row=$result->fetch_assoc())
                {

                 ?>
                        <tr>
                          <td><?php echo $row['id'];?></td>;
                          <td><?php echo $row['Meal'];?></td>;
                          <td><?php echo $row['Price'];?></td>;
                          <td><?php echo $row['Description'];?></td>;
                          <td><?php echo'<img src="upload/' .$row['Image'].'"width="100px;" height="100px;" alt="Image">'?></td>;
                          
             
                          <td>
                            <a href="Update-Menu.php?id=<?php echo $row["id"]; ?>" class="edit_btn" >Update</a>
                          </td>
                          <td>
                            <a href="Delete-data.php?id=<?php echo $row["id"]; ?>" class="del_btn">Delete</a>
                           </td>
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


</body>
</html>
         