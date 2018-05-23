<?php
	require_once './autoload.php';

	$toy1 = new \volostnov\Toy('Кубики',500,0.2,'toy1');
	$toy1->setAges(0,5);
	$toy2 = new \volostnov\Toy('Кукла',2500,0.5,'toy2');
	$toy2->setAges(2,7);
	$drink1 = new \volostnov\Drink('CocaCola',50,0.05,'drink1');
	$drink1->setVolume(0.33);
	$drink1->setAlc(0);
	$drink2 = new \volostnov\Drink('Fanta',45,0.05,'drink2');
	$drink2->setVolume(0.33);
	$drink2->setAlc(0);
	$drink3 = new \volostnov\Drink('Ром Bacardi Superior',1500,1.1,'drink3');
	$drink3->setVolume(0.5);
	$drink3->setAlc(40);
	$mo1 = new \volostnov\MotorOil('Mobil1',2000,5.2,'mo1');
	$mo1->setVolume(5);
	$mo1->setViscosity('5w30');
	$mo2 = new \volostnov\MotorOil('Shell',2500,4.2,'mo2');
	$mo2->setVolume(4);
	$mo2->setViscosity('0w40');
	$tire1 = new \volostnov\Tires('Nokian',4000,6,'tire1');
	$tire2 = new \volostnov\Tires('Dunlop',3500,7,'tire2');
	$tire3 = new \volostnov\Tires('Brigestone',3800,5,'tire3');
	$vege1 = new \volostnov\Vege('Картофель',500,20,'vege1');
	$vege2 = new \volostnov\Vege('Капуста',100,4,'vege2');
	$vege3 = new \volostnov\Vege('Морковь',300,5,'vege3');
	$vege4 = new \volostnov\Vege('Салат',200,0.5,'vege4');
?>
