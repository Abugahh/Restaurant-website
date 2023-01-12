<!DOCTYPE html>
<html>
	<head>
     <title>UberEats Page</title>
     <link rel="stylesheet" href="login.css">
    </head>

 <body>
    <div class="form-area">
        <h4>Food</h4>
       

        <form  action="AddFood.php" method="post">

            <p>Meal</p><br>
             <input type='text' name="Meal"  placeholder='Meal' required>
             

             <p>Price</p><br>
             <input type='number'name="Price"   placeholder='Price' required>

             <p> Description</p><br>
             <input type='text'name="Description"  placeholder='Description' required>

             <p> Category</p><br>
             <input type='text'name="Category"  placeholder='Category'  required>

             <p> Upload Image</p><br>
             <input type='file'name="Image"   placeholder='Image'  required>

             <input type="hidden" id="nID" name="id" >

              

             
             
             <button type='submit' name="submit" value="submit" class='update-btn'><strong>Update</strong></button>


             
         </form>





    </div>
        
    

     
  </body>
</html>