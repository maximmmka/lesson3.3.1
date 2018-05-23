<?php
	session_start();
	unset($__SESSION['cart']);
	session_destroy();
	header('Location: mycart.php');
?>