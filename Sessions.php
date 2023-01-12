<?php
session_start();
$conn=mysqli_connect ("localhost","root","","food_proj");

//For customers
if(isset($_POST["Login"])){
    if(empty($_POST["Email"]) || empty($_POST["Password"])){
        header("location:login.php?error=Emptyinput");
        exit();
    }
    else{
        $sql="SELECT * FROM `registerr`WHERE Email='".$_POST['Email']."' limit 1 ";
        $result=$conn->query($sql);

        if($result->fetch_assoc()){
            $_SESSION['Email']=$_POST['Email'];
            $_SESSION['Id']=$result->fetch_assoc()['id'];
            $_SESSION['cart-quantity'] = 0;
            $_SESSION['cartitems']=array();
            header("location:Menuu.php ");
        }
        else{
            echo "Not registered";
        }
    }
}
else{
    echo "Error";
}


//For admins
if(isset($_POST["Adminlogin"])){
    if(empty($_POST["Email"]) || empty($_POST["Password"])){
        header("location:login.php?error=Emptyinput");
        exit();
    }
    else{
        $sql="SELECT * FROM `admins`WHERE Email='".$_POST['Email']."' ";
        $result=$conn->query($sql);

        if($result->fetch_assoc()){
            $_SESSION['Email']=$_POST['Email'] ;
            header("location:adminnn.php ");
          
            
   
        }
        else{
            echo "Not an Admin";
        }
    }
}
else{
    echo "Error";
}



?>

