<?php
$conn=mysqli_connect ("localhost","root","","food_proj");
   

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

