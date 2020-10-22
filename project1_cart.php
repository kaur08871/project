<?php

if (isset($_POST['item']) && isset($_POST['quantity']))
{
	require('mysqli_connect.php');
	
	$item = $_POST['item'];
	$quantity = $_POST['quantity'];
	
	if (isset($_COOKIE['orderid']))
	{
		$cartid = $_COOKIE['orderid'];
		
		$q = "INSERT INTO orders (orderid, bookid, quantity) 
		VALUES ('$cartid', '$item', '$quantity')";
		$r = @mysqli_query($dbc, $q);
       
	}
	else {
		$date = "1/28/2019";
		$q = "INSERT INTO cart (order_date) VALUES ($date)";
		$r = @mysqli_query($dbc, $q);
		$last_id = mysqli_insert_id($dbc);
		
		$q = "INSERT INTO orders (orderid, bookid, quantity) 
		VALUES ('$last_id', '$item', '$quantity')";
		$r = @mysqli_query($dbc, $q);
		setcookie('cartid', $last_id, time()+10000);
	}
}
header('location: project1_checkout.php');
?>	
