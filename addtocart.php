<?php
	require_once './autoload.php';
	include './loadcatalog.php';

	session_start();
	
	if (!isset($_SESSION['cart'])) {
		$cart = new \volostnov\Cart();
		$_SESSION['cart'] = $cart;
	}
	else {
		$cart = $_SESSION['cart'];
	}

	if (isset($_POST['product'])) {
		$prodname = $_POST['product'];
		$cart->addToCart($$prodname);
		$_SESSION['cart'] = $cart;
		header('Location: mycart.php');
		exit;
	}
	header('Location: index.php');
?>
