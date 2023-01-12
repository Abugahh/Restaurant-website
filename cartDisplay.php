<?php session_start(); ?>
<!DOCTYPE html>
<html lamg="en">

<head>

<title>Cart Disply</title>
<link rel="stylesheet" href="Adminss.css">

</head>
<body>
    <div class="info">
    
          <div class= "cards">
           <div class ="cards-content">   
            <table>

                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Meal</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    
                </tr>

                <?php 

                         $conn = mysqli_connect ("localhost","root","","food_proj");
                         if(isset($_SESSION['cartitems']))
                         {

                          $cartitems = $_SESSION['cartitems'];
                          //for($i=0; $i<count($cartitems); $i++)
                          foreach($cartitems as $id=> $item)
                          {
                            //print_r($item) ;
                         // $currentItem = $_SESSION['cartitems'][$i];
                          //$currentItem =$cartitems[$i];
                          $sql="SELECT * FROM `foods` WHERE `id` = $id;";
                          $result=$conn->query($sql);
                          while($row = $result->fetch_assoc())

                        { 

                 ?>
                        <tr>
                          <td><?php echo $row['id'];?></td>;
                          <td><?php echo'<img src="upload/' .$row['Image'].'"width="100px;" height="100px;" alt="Image">'?></td>;
                          <td><?php echo $row['Meal'];?></td>;
                          <td><?php echo $row['Price'];?></td>;
                          <td><?php echo $row['Description'];?></td>;
                          <td><?php echo $row['Category'];?></td>;
             
                          <td>
                            <input type="number" name="quantity" value="<?= $item['quantity']?>"  maxlength="4" size="4"><br> 
                          </td>
                          <td>
                            <a href="cartedit.php?id=<?php echo $row["id"]; ?>" class="del_btn">Remove</a>
                          </td>
                           
                       </tr>

                      
                           
                 <?php   
                      }
                        }

                 $conn->close(); 
                            }  //closing the connection

                 ?>
                 <tr>
                  <td colspan="2">    <a href="Orderss.php?id=<?php echo $row["id"]; ?>" class="edit_btn">Check-Out</a> </td>
                </tr>

             
            </table> 


          </div>
         </div>


</body>
</html>
