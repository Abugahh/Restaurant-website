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
            <li><a href="#"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="Admin-Menu.php"><i class="fas fa-pizza-slice"></i>Menu</a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i>Analytics</a></li>
            <li><a href="Ordersmade.php"><i class="fas fa-project-diagram"></i>Total Orders</a></li>
            <li><a href="#"><i class="fas fa-user-friends"></i>Employees</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Settings</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Messages</a></li>
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
            <div class="topnav">
                
              <input type="text" placeholder="Search..">
              </div>
        </div> 
         

        <!---info has totals--->
        <div class="info">

          <div class= "card">
            <div>Total Orders
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="25px" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                    </svg>
            </div>
                <?php
                    $conn = mysqli_connect ("localhost","root","","food_proj"); 
                    $sql="select count(*) as total from orderss";
                    $result=mysqli_query($conn,$sql);
                    $data=mysqli_fetch_assoc($result);
                    echo $data['total']
                  ?>  
                 <br>

         </div>

          <div class ="card">
                 <div > Total users  
                   <svg xmlns="http://www.w3.org/2000/svg" width="25px" style="position: absolute;" class="h-6 w-6" fill="none"  
                    viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                 
                 <?php
                    $conn = mysqli_connect ("localhost","root","","food_proj"); 
                    $sql="select count(*) as total from registerr";
                    $result=mysqli_query($conn,$sql);
                    $data=mysqli_fetch_assoc($result);
                    echo $data['total']
                  ?>
                 <br> 

          </div>

          <div class="card">Total Profit<i class="far fa-usd-circle"></i>
                 <br>
                 <br>   25000000


          </div>

          <div class="card">Total Returns<i class="fas fa-dollar-sign"></i>
                <br>
                <br>  300000

          </div>

      </div>

       
           <!---info has users and most ordered by users--->
        <div class="info">
    
          <div class= "cards">
           <div class ="cards-content">   
            <table>

                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Secondname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Confim</th>
                    <th colspan="2">Action</th> <!---takes both cells in edit and delete--->
                </tr>

                <?php 

                 $conn = mysqli_connect ("localhost","root","","food_proj");

                 //only things in php to be included in php
                 $sql_select="SELECT * FROM registerr";
                 $result=$conn->query($sql_select);

                 while($row=$result->fetch_assoc())
                {

                 ?>
                        <tr>
                          <td><?php echo $row['id'];?></td>;
                          <td><?php echo $row['Firstname'];?></td>;
                          <td><?php echo $row['Secondname'];?></td>;
                          <td><?php echo $row['Email'];?></td>;
                          <td><?php echo $row['Password'];?></td>;
                          <td><?php echo $row['Confirm'];?></td>;
             
                          <td>
                            <a href="Update-data.php?id=<?php echo $row["id"]; ?>" class="edit_btn" >Update</a>
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

          <div class ="cardss">This shows a chart for users growth <br>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                        </svg>

          </div>

    </div>

  </div>
</div>


</body>
</html>