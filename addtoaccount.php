<?php
    //start the session
	session_start();

	//retrieve existing session variable named "cart"
	if(isset($_SESSION['cart']))
	    $cart = $_SESSION['cart'];
	
	if($cart) {
	    $cart .= ',' . $_GET['id'];
	}else {
	    $cart = $_GET['id'];
	}
	//update the session variable with new content
	$_SESSION['cart'] = $cart;

	
	//redirect to the useraccount.php page
	// header('Location: useraccount.php');


	$recipe_id_num = $_GET['id'];
	echo "<div style='color: green; text-align:center;'>Added to favorites.</div>";
    header( "Refresh:1; url=recipedetails.php?id=$recipe_id_num", true, 303);
	
?>