<?php

session_start();



if (isset($_GET['id'])){

	$cart=$_SESSION['cartitems'];
	//print_r($cart);

	unset($cart[array_search($_GET['id'], $cart)]);
	$_SESSION['cartitems'] =$cart;

	header ("location:cartDisplay.php");
}









 ?>