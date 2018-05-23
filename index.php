<?php
	require_once './autoload.php';
	session_start();
	
	if (!isset($_SESSION['cart'])) {
		$cart = new \volostnov\Cart();
		$_SESSION['cart'] = $cart;
	}
	else {
		$cart = $_SESSION['cart'];
	}

	require './loadcatalog.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Каталог товаров</title>
</head>
<body>
<a href="./mycart.php">Корзина</a><br>

<h2>Игрушки</h2>
<?php 
	$toy1->printProductGeneral();
	$toy1->printAges();

	$toy2->printProductGeneral();
	$toy2->printAges();
?>
<h2>Напитки</h2>
<?php
	$drink1->printProductGeneral();
	$drink1->printVolume();
	$drink1->printAlc();
	$drink2->printProductGeneral();
	$drink2->printVolume();
	$drink2->printAlc();
	$drink3->printProductGeneral();
	$drink3->printVolume();
	$drink3->printAlc();
?>
<h2>Моторные масла</h2>
<?php
	$mo1->printProductGeneral();
	$mo1->printVolume();
	$mo1->printViscosity();
	$mo2->printProductGeneral();
	$mo2->printVolume();
	$mo2->printViscosity();
?>
<h2>Шины</h2>
<?php
	$tire1->printProductGeneral();
	$tire2->printProductGeneral();
	$tire3->printProductGeneral();
?>
<h2>Овощи</h2>
<?php
	$vege1->printProductGeneral();
	$vege2->printProductGeneral();
	$vege3->printProductGeneral();
	$vege4->printProductGeneral();
?>

</body>
</html>
