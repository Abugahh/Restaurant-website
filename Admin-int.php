<!DOCTYPE html>
<html>
	<head>
     <title>Admin's food update</title>
     <link rel="stylesheet" href="login.css">
    </head>

 <body>
    <div class="form-area">
        <h4>Update</h4>


        <form  action="picture.php " method="post" enctype="multipart/form-data">

             
             <input type='hidden' name="id" value=" ">
       
             <p>Meal</p><br>
             <input type='text'name="Meal"placeholder='Meal' required>

             <p> Price</p><br>
             <input type='text'name="Price"placeholder='Enter Price' required>

             <p> Description</p><br>
             <input type='text'name="Description"placeholder='Description'  required>

             <p> Category</p><br>
             <input type='text'name="Category"placeholder='Category'  required>

              
             <p> Upload Image</p><br>
             <input type='file' name="Image" placeholder='Image' required>

             <button type='Image' name="submitImage" class='Update-btn'><strong>Update</strong></button>


         </form>




      </div>
        
    

     
  </body>
</html>