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

	$order = new \volostnov\Order($cart);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ваш заказ</title>
</head>
<body>

<?php
	$order->printOrder();
?>

</body>
</html>
