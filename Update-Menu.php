<?php
include_once 'connect.php';


if(count($_POST)>0)
 {
 	//query to update the data
   mysqli_query($conn,"UPDATE foods set id='" . $_POST['id'] . "', Meal='" . $_POST['Meal'] . "', Price='" . $_POST['Price'] . "', Description='" . $_POST['Description'] . "' , Category='" . $_POST['Category'] . "',Image='" . $_POST['Image'] . " ' WHERE id='" . $_POST['id'] . "'");
   $message = "Record Modified Successfully";
   header("Location:Admin-Menu.php");
}

$result = mysqli_query($conn,"SELECT * FROM foods WHERE id='" . $_GET['id'] . "'"); //data will be gotten from selected id and displayed
$row= mysqli_fetch_array($result);//data is fetched 

if(isset($_POST['submitImage']))
 {
  $id=$_POST['id'];
  $file=$_FILES['Image'];
  $Meal =$_POST['Meal'];
  $Price =$_POST['Price'];
  $Description = $_POST['Description'];
  $Category = $_POST['Category'];
  //$Image= $_FILES["Image"]['name'];
  $original_file_name = $file['name'];

  $file_tmp_location = $file['tmp_name'];

  $file_path ="upload/";
  move_uploaded_file($file_tmp_location, $file_path.$original_file_name);

  $sql_insert = "INSERT INTO `foods`(`Meal`, `Price`, `Description`, `Image`,`Category`) VALUES ('$Meal','$Price',\"$Description\",'$original_file_name','$Category')";
  $result = mysqli_query($conn,$sql_insert);
  echo $conn->error;
}

?>


<html>
	<head>
     <title>Admins food update</title>
     <link rel="stylesheet" href="login.css">
    </head>

 <body>
    <div class="form-area">
        <h4>Update</h4>
        

        <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

        	<div> <?php if(isset($message)) { echo $message; } ?> </div>



             <p>Meal</p><br>
             <input type='text' name="Meal" value="<?php echo $row['Meal'];?>" placeholder='Meal' required>
             

             <p>Price</p><br>
             <input type='text'name="Price"   value="<?php echo $row['Price'];?>"placeholder='Price' required>

             <p> Description</p><br>
             <input type='text'name="Description" value="<?php echo $row['Description'];?>"placeholder='Description' required>

             <p> Category</p><br>
             <input type='text'name="Category" value="<?php echo $row['Category'];?> "placeholder='Category'  required>

             <p> Upload Image</p><br>
             <input type='file'name="Image"  value="<?php echo $row['Image'];?> "placeholder='Image'  required>

             <input type="hidden" id="nID" name="id" value="<?= $row['id']?>">

              

             
             
             <button type='submit' name="submit" value="submit" class='update-btn'><strong>Update</strong></button>


             
         </form>




    </div>
        
    

     
  </body>
</html>