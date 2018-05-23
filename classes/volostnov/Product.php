<?php
namespace volostnov;

require_once './autoload.php';

abstract class Product implements Prices
{
	protected $name;
	protected $price;
	protected $discount = 10;
	protected $weight;
	protected $shipping;
	protected $objectName;

	public function __construct($name, $price, $weight, $oN)
	{
		$this->name = $name;
		$this->price = $price;
		$this->weight = $weight;
		$this->objectName = $oN;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function setShipping($shipping)
	{
		$this->shipping = $shipping;
	}

	public function setDiscount($discount)
	{
		$this->discount = $discount;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
	}

	public function getPrice()
	{
		if ((isset($this->discount))&&($this->discount)){
			$this->shipping = 300;
			return round($this->price*(100-$this->discount)/100,2);
		}
		else {
			$this->shipping = 250;
			return $this->price;
		}
	}

	public function getShipping()
	{
		$this->getPrice();
		return $this->shipping;
	}

	public function getDiscount()
	{
		return $this->discount;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function getObjectName()
	{
		return $this->objectName;
	}

	public function printPrice()
	{
		echo '<p>Цена: '.$this->getPrice().' руб.</p>';
	}

	public function printShipping()
	{
		echo '<p>Доставка: '.$this->getShipping().' руб.</p>';
	}

	public function printProductGeneral()
	{
		echo "<h3>$this->name</h3>";
		echo '<form action="addtocart.php" method="POST">';
		echo '<input type="hidden" name="product" value="'.$this->objectName.'">';
		echo '<input type="submit" name="submit" value="Add to cart">';
		echo '</form>';
		$this->printPrice();
		$this->printShipping();
	}

	public function printForCart()
	{
		echo "<tr><td>$this->name</td><td>".$this->getPrice()."руб.</td><td>".$this->getShipping()."руб.</td><td><a href='delfromcart.php?product=".$this->objectName."'>Удалить</a></td></tr>";
	}

	public function printForOrder()
	{
		echo "<tr><td>$this->name</td><td>".$this->getPrice()."руб.</td><td>".$this->getShipping()."руб.</td></tr>";
	}		
}
?>
